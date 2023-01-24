<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Example extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Example';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'A simple Example block.';

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
    public $icon = 'welcome-widgets-menus';

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
        'full_height' => true,
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
      'title' => 'Example',
      'subtitle' => 'Example',
      'background' => 'https://picsum.photos/1920/1080',
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
        'subtitle' => get_field('subtitle') ?: $this->example['subtitle'],
        'background' => get_field('background')['url'] ?: $this->example['background'],
      ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $example = new FieldsBuilder('example');

        $example
            ->addText('title')
            ->addText('subtitle')
            ->addImage('background');


        return $example->build();
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
