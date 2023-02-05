<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class Projects extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Projects';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'A simple Projects block.';

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
      'title' => 'Project example title',
      'subtitle' => 'Project example subtitle',
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
          'projects' => $this->getProjects(),
        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $projects = new FieldsBuilder('projects');

        $projects
            ->addText('title')
            ->addTextarea('subtitle')
            ->addSelect('project_category', [
                'label' => 'Filter by project category',
                'choices' => [
                    'all' => 'All',
                    'decor_design' => 'Decor / Design',
                    'decor_mockup' => 'Decor / Mockup',
                    'decor_architecture' => 'Decor / Architecture',
                ],
                'default_value' => 'all',
            ]);

        return $projects->build();
    }

    /**
     *  The function getProjects returns an array of projects.
     *
     *  - It first retrieves all the posts of post type 'projects' using the get_posts function and stores the result in the $projects variable.
     *  The number of posts per page is set to -1, meaning it will retrieve all the posts available, and the order of posts is set to 'ASC' (ascending order).
     *
     *  - The variable $blockSelectCategory is assigned the result of a collection of the choices field of the 'project_category' field group.
     *  The collection is filtered to get the first element that matches the value of the 'project_category' field.
     *
     *  - Finally, the $projects variable is mapped to extract relevant information from each post. The information includes the name, category,
     *  and image of each project. The returned collection is filtered based on whether the selected category is 'all' or if the
     *  project's category matches the selected category. The final result is taken as the first 4 elements of the collection and converted
     *  to an array before it is returned.
     *
     * @return array
     */
    public function getProjects() : array
    {
        $projects = get_posts([
            'post_type' => 'projects',
            'posts_per_page' => -1,
            'order' => 'ASC',
        ]);

        $blockSelectCategory = collect(get_field_object('project_category')['choices'])->filter(function ($choice, $key) {
          return get_field('project_category') === $key;
        })->first();

        return collect($projects)->map(function ($project) {
          return [
            'name' => get_field('project_name', $project->ID),
            'category' => get_field('project_categorie', $project->ID),
            'image' => get_field('project_image', $project->ID),
          ];
        })->filter(function ($project) use ($blockSelectCategory) {
          return Str::lower($blockSelectCategory) === 'all' || Str::lower($project['category']) === Str::lower($blockSelectCategory);
        })->take(4)->toArray();
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
