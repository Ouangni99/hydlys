<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SubMenu extends Component
{
    /**
     * The fill.
     *
     * @var string
     */
    public $fill;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($fill)
    {
        $this->fill = $fill;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sub-menu');
    }
}
