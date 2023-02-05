<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Brands extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Brands';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'A simple Brands block.';

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
    public $example = [];

    /**
     * Data to be passed to the block before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
          'brands' => $this->getBrands(),
        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $brands = new FieldsBuilder('brands');

        $brands
            ->addSelect('sort_by_brand_name', [
                'label' => 'Sort By Brand Name',
                'choices' => [
                    'asc' => 'A-Z',
                    'desc' => 'Z-A',
                ],
                'default_value' => 'asc',
            ]);

        return $brands->build();
    }

    public function getBrands() : array
    {
        $brands = get_posts([
            'post_type' => 'brands',
            'posts_per_page' => -1,
            'order' => get_field('sort_by_brand_name'),
        ]);

        return array_map(function ($brand) {
            return [
                'name' => get_field('brand_name', $brand->ID),
                'image' => get_field('brand_image', $brand->ID),
            ];
        }, $brands);
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
