<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SideBarLink extends Component
{
    public $routeName,$name,$icon;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($routeName,$name,$icon)
    {
        $this->name = $name;
        $this->routeName = $routeName;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.side-bar-link');
    }
}
