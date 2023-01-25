<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Hero extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Hero';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'A simple Hero block.';

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
     * The block preview hero data.
     *
     * @var array
     */
    public $hero = [
      'title' => 'Hero example title',
      'subtitle' => 'Hero example subtitle',
      'background' => 'https://picsum.photos/1920/1080',
      'ctaLabel' => 'Get Started',
      'ctaLink' => '#',
    ];

    /**
     * Data to be passed to the block before rendering.
     *
     * @return array
     */
    public function with()
    {
      return [
        'title' => get_field('title') ?: $this->hero['title'],
        'subtitle' => get_field('subtitle') ?: $this->hero['subtitle'],
        'background' => get_field('background')['url'] ?: $this->hero['background'],
        'ctaLabel' => get_field('ctaLabel') ?: $this->hero['ctaLabel'],
        'ctaLink' => get_field('ctaLink') ?: $this->hero['ctaLink'],
      ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $hero = new FieldsBuilder('hero');

        $hero
            ->addText('title')
            ->addText('subtitle')
            ->addImage('background')
            ->addText('ctaLabel', [
              'label' => 'Button Text'
            ])
            ->addText('ctaLink', [
              'label' => 'Button Link'
            ]);


        return $hero->build();
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
