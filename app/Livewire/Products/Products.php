<?php

namespace App\Livewire\Products;

use App\Models\Product;
use Livewire\Component;
use App\Models\Cart;

class Products extends Component
{
    public $products;
    public $quantity = 0;
    public $productId;
    public function mount()
    {
        $this->products = Product::all();
    }

    public function render()
    {
        return view('livewire.products.products');
    }
    
    public function addToCart($product_id) {
        $this->productId = $product_id;
        dd($this->productId);
    }
}
