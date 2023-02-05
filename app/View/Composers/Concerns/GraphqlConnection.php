<?php

namespace App\View\Composers\Concerns;

use Illuminate\Support\Collection;

trait GraphqlConnection {
  /**
   * It gets the auth token from the WordPress transients cache, and if it's not there, it makes a
   * request to the GraphQL endpoint to get it
   *
   * @return string the auth token.
   */
  private $transientKey = 'graphql_auth_token';

  public function getAuthToken() : string
  {
      $endpoint = 'https://contentdeliveryserver.stellate.sh/graphql';
      $username = 'content-reader';
      $password = '2B89dhyv79n&c2Z8HRsZrq9&';

      $transient_key = $this->transientKey;
      $auth_token = get_transient( $this->transientKey );

      if ( $auth_token ) {
        return $auth_token;
      }

      $request_body = wp_json_encode([
        'query' => '
          mutation LoginUser {
            login(
              input: {clientMutationId: "uniqueId", username: "content-reader", password: "2B89dhyv79n&c2Z8HRsZrq9&"}
            ) {
              authToken
            }
          }
        '
      ]);

      $response = wp_remote_request($endpoint, [
        'method' => 'POST',
        'headers' => [
            'Content-Type' => 'application/json'
        ],
        'body' => $request_body
      ]);


      if (is_wp_error($response)) {
        throw new \Exception($response->get_error_message());
      }

      $decoded_response = json_decode($response['body'], true);
      $auth_token = $decoded_response['data']['login']['authToken'];


      set_transient($transient_key, $auth_token, 86400); // 24 hours

      return $auth_token;
  }

  /**
   * Gets the data from the Graphql endpoint and returns it in a collection.
   * @param string $query
   * @param mixed $type
   *
   * @var string $endpoint the endpoint to make the request to.
   * @var string $request_body the body of the request.
   *
   * @return array
   */

  public function getGraphData(string $query, ?string $type = null) : collection
  {

    $endpoint = 'https://contentdeliveryserver.stellate.sh/graphql';
    $request_body = wp_json_encode([
      'query' => $query
    ]);

    $response = wp_remote_request($endpoint, [
      'method' => 'POST',
      'headers' => [
        'Content-Type' => 'application/json',
        'Referer' => $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'],
        'Authorization' => 'Bearer ' . $this->getAuthToken()
      ],
      'body' => $request_body
    ]);

    /* Checking to see if the response is an error. If it is, it throws an exception. */
    if (is_wp_error($response)) {
      throw new \Exception($response->get_error_message());
    }

    $decoded_response = json_decode($response['body'], true );

    $data_mapping = [
      'default' => $decoded_response['data']['movies']['nodes']
    ];

    $graph_data = collect($data_mapping[$type] ?? $data_mapping['default']);

    /**
     * This code checks if the result of the getGraphData method, stored in the $graph_data variable, is empty. If it is,
     * the transient with the key stored in $this->transientKey is deleted using the delete_transient function. The purpose of
     * this code is to clear the cache in the case that the $graph_data result is empty.
    */
    if ($graph_data->isEmpty()) {
      delete_transient($this->transientKey);
    }

    return $graph_data;
  }
}
