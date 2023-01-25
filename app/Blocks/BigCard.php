<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class BigCard extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Big Card';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'A simple Big Card block.';

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
      'title' => 'Title Example',
      'description' => 'Example Description',
      'image' => 'https://picsum.photos/200/300',
      'phone' => '555-555-5555',
      'link_text' => 'Link Text',
      'link' => 'https://google.com',
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
        'description' => get_field('description') ?: $this->example['description'],
        'image' => get_field('image')['url'] ?: $this->example['image'],
        'phone' => get_field('phone') ?: $this->example['phone'],
        'link_text' => get_field('link_text') ?: $this->example['link_text'],
        'link' => get_field('link') ?: $this->example['link'],
      ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $bigCard = new FieldsBuilder('big_card');

        $bigCard
            ->addText('title')
            ->addTextarea('description')
            ->addImage('image')
            ->addText('phone')
            ->addText('link_text')
            ->addLink('link');

        return $bigCard->build();
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
