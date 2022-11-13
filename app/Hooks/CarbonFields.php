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
          Field::make( 'text', 'facebook_link', 'Facebook Link' ),
          Field::make( 'text', 'linkedin_link', 'Linkedin Link' ),
          Field::make( 'complex', 'hero_tabs', 'Homepage Hero Tabs' )
            ->set_layout( 'tabbed-horizontal' )
            ->add_fields( array(
              Field::make( 'text', 'title', 'Title' ),
              Field::make( 'text', 'subtitle', 'Subtitle' ),
              Field::make( 'text', 'link', 'Button Link' ),
            ) ),
          Field::make( 'complex', 'home_services', 'Homepage Services Tabs' )
            ->set_layout( 'tabbed-horizontal' )
            ->add_fields( array(
              Field::make( 'image', 'service_image', 'Service Image' )
                ->set_value_type( 'url' ),
              Field::make( 'text', 'title', 'Title' ),
              Field::make( 'text', 'subtitle', 'Subtitle' ),
              Field::make( 'text', 'link', 'Button Link' ),
            ) ),
        ));
      });

      \Carbon_Fields\Carbon_Fields::boot();
    }
}
