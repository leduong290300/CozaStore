<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Sliders extends Component
{
    public $sliders;
    public function __construct($sliders)
    {
       $this->sliders = $sliders;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sliders');
    }
}
