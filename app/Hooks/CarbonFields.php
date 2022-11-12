<?php

namespace App\Hooks;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

class CarbonFields extends Hook
{
    protected $actions = [
      'after_setup_theme'
    ];

    public function __invoke()
    {
      add_action( 'carbon_fields_register_fields', function() {
        Container::make( 'theme_options', __( 'PrintScan Theme Options', 'crb' ) )
        ->add_fields( array(
          Field::make( 'image', 'site_logo', 'Site Logo' )
            ->set_value_type( 'url' ),
        ));
      });

      \Carbon_Fields\Carbon_Fields::boot();
    }
}
