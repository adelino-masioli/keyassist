<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    public $className;

    public $link;

    public $text;

    public $icon;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($className, $link, $text, $icon)
    {
        $this->className = $className;
        $this->link = $link;
        $this->text = $text;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button');
    }
}
