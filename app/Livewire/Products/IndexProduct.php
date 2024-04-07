<?php

namespace App\Livewire\Products;

use Livewire\Component;
use App\Models\Product;

class IndexProduct extends Component
{
    public $products;

    public function mount(){
        $this->products = Product::orderByDesc('id')->get();
    }

    public function render()
    {
        return view('livewire.products.index-product');
    }

    public function deleteProduct(Product $product){
        $product->delete();
        session()->flash('message', 'Product deleted successfully.');
        return $this->redirect('/products/index-product');
 }
}
