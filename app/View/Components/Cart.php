<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Cart extends Component
{
    public $carts;
    public function __construct($carts)
    {
        $this->carts = $carts;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cart');
    }
}
