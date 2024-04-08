<?php

namespace App\Livewire\Products;

use Livewire\Component;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

use function Laravel\Prompts\error;

class IndexProduct extends Component
{
    public $products;

    public function mount(){
        $this->products = Product::where('user_id', Auth::id())->orderByDesc('id')->get();
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
