<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Navigation extends Component
{
    public $type;
    public $linkColor;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $type)
    {
        $this->type = $type;
        $this->linkColor = $this->type === "dark" ? "white" : "black";
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
