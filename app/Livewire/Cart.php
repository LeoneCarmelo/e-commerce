<?php

namespace App\Livewire;

use Livewire\Component;

class Cart extends Component
{
    public $quantity = 0;


    public function render()
    {
        return view('livewire.cart');
    }
}
