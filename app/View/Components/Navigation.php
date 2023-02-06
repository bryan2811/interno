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
     * The function takes three arguments, assigns them to three properties, and then does nothing else
     * @param menuName The name of the menu you want to display.
     * @param themeLocation This is the name of the theme location that you want to display.
     * @param menuClass The class that will be applied to the ul element which forms the menu.
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
