<?php

namespace App\View\Components\Cards;

use Illuminate\View\Component;

class lastTimeTaxPaied extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cards.last-time-tax-paied');
    }
}
