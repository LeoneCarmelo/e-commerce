<?php

namespace App\Livewire\Products;

use App\Models\Product;
use Livewire\Component;

use Illuminate\Support\Facades\Session;

class Products extends Component
{

    public $products;

    public function mount()
    {
        $this->products = Product::all();
    }



    public function render()
    {
        return view('livewire.products.products');
    }
    
}
