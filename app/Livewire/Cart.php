<?php

namespace App\Livewire;

use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Cart extends Component
{


    public function getCart()
    {
        return Session::get('cart', []);
    }

    public function render()
    {
        //Cart
        $cart = $this->getCart();
        $totalQuantity = 0;

        $products = [];
        foreach ($cart as $key => $value) {
            $totalQuantity += $value['quantity'];
            $product = Product::find($key);
            $product['quantity'] = $value;
            if($product){
                $products[$key] = $product;
            }
        }

        return view('livewire.cart', [
            'cart' => $cart,
             'totalQuantity' => $totalQuantity,
            'products' => $products
        ]);
    }
}
