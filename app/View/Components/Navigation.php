<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Navigation extends Component
{

    /**
     * The menu name.
     *
     * @var string
     */
    public $menuName;

    /**
     * The menu theme location.
     *
     * @var string
     */
    public $themeLocation;

    /**
     * The menu classes.
     *
     * @var string
     */
    public $menuClass;

    /**
     * Create a new component instance.
     *
     * The constructor sets the `menuName`, `themeLocation`, and `menuClass` properties to the values of the
     * `$menuName`, `$themeLocation`, and `$menuClass` arguments, respectively.
     *
     * @param string $menuName      The name of the menu to display.
     * @param string $themeLocation The name of the theme location to display.
     * @param string $menuClass     The class to apply to the `ul` element that forms the menu.
     *
     * @return void
     */
    public function __construct($menuName = '', $themeLocation = '', $menuClass = '')
    {
      $this->menuName = $menuName;
      $this->themeLocation = $themeLocation;
      $this->menuClass = $menuClass;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.navigation');
    }
}
