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

    public function addToCart($productId)
{
    //dd(session('cart'));
    $cart = session()->get('cart', []);
    
    // Check if the product is already in the cart
    if (isset($cart[$productId])) {
        // Increment the quantity if the product is already in the cart
        $cart[$productId]['quantity'] += 1;
    } else {
        // Add the product to the cart
        $cart[$productId] = [
            'quantity' => $this->quantity,
            // You can also store other product details like name, price, etc.
        ];
    }
    
    // Save the updated cart back to the session
    session()->put('cart', $cart);
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
