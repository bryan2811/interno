<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Reviews extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Reviews';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'A simple Reviews block.';

    /**
     * The block category.
     *
     * @var string
     */
    public $category = 'formatting';

    /**
     * The block icon.
     *
     * @var string|array
     */
    public $icon = 'editor-ul';

    /**
     * The block keywords.
     *
     * @var array
     */
    public $keywords = [];

    /**
     * The block post type allow list.
     *
     * @var array
     */
    public $post_types = [];

    /**
     * The parent block type allow list.
     *
     * @var array
     */
    public $parent = [];

    /**
     * The default block mode.
     *
     * @var string
     */
    public $mode = 'preview';

    /**
     * The default block alignment.
     *
     * @var string
     */
    public $align = '';

    /**
     * The default block text alignment.
     *
     * @var string
     */
    public $align_text = '';

    /**
     * The default block content alignment.
     *
     * @var string
     */
    public $align_content = '';

    /**
     * The supported block features.
     *
     * @var array
     */
    public $supports = [
        'align' => true,
        'align_text' => false,
        'align_content' => false,
        'full_height' => false,
        'anchor' => false,
        'mode' => false,
        'multiple' => true,
        'jsx' => true,
    ];

    /**
     * The block styles.
     *
     * @var array
     */
    public $styles = [];

    /**
     * The block preview example data.
     *
     * @var array
     */
    public $example = [
      'title' => 'Reviews Example Title',
    ];

    /**
     * Data to be passed to the block before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
          'title' => get_field('title') ?: $this->example['title'],
          'reviews' => $this->getReviews(),
        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $reviews = new FieldsBuilder('reviews');

        $reviews
            ->addText('title');

        $reviews;

        return $reviews->build();
    }

    /**
     *  The function getReviews returns an array of reviews.
     *
     *  - It retrieves all the posts of post type 'reviews' using the get_posts function and stores the result in the $reviews variable.
     *  The number of posts per page is set to -1, meaning it will retrieve all the posts available, and the order of posts is ascending.
     *
     * - Finally, the $reviews variable is collected into a collection using the collect function. The collection is then mapped to extract the
     *  image, name, location and review of each review. The final result is converted to an array using the toArray function and returned.
     *
     * @return array
     */
    public function getReviews() : array
    {
        $reviews = get_posts([
            'post_type' => 'reviews',
            'posts_per_page' => -1,
            'order' => 'ASC'
        ]);

        return collect($reviews)->map(function ($review) {
          return [
              'image' => get_field('user_image', $review->ID),
              'name' => get_field('user_name', $review->ID),
              'location' => get_field('user_location', $review->ID),
              'review' => get_field('user_review', $review->ID),
          ];
        })->toArray();
    }

    /**
     * Assets to be enqueued when rendering the block.
     *
     * @return void
     */
    public function enqueue()
    {
        //
    }
}
