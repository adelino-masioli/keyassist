<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Brand extends Component
{

    public $alt;

    public $height;

    public $width;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($alt, $height, $width)
    {
        $this->alt = $alt;
        $this->height = $height;
        $this->width = $width;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.brand');
    }
}
