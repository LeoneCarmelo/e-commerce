<?php

namespace App\Livewire\Products;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ShowProduct extends Component
{

    public $product = [];

    public function mount(Product $product)
    {
        $this->product = $product;
    }
    public function render()
    {
        if(Auth::id() != 1) {
            abort(403, 'You are not authorized');
        } else {
            return view('livewire.products.show-product');
        }
    }
}
