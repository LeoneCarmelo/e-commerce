<?php

namespace App\Livewire\Products;

use App\Models\Product;
use Livewire\Component;
use App\Models\Cart;
use Illuminate\Support\Facades\Session;

class Products extends Component
{

    public $products;
    public $quantity = 1;
    public $productId;

    public function mount()
    {
        $this->products = Product::all();
    }

    public function getCart()
    {
        return Session::get('cart', []);
    }

    public function render()
    {
        $cart = $this->getCart();
        $totalQuantity = 0;
        foreach ($cart as $item) {
            $totalQuantity += $item['quantity'];
        }
        return view('livewire.products.products', compact('totalQuantity'));
    }
    
public function addToCart($productId)
{
    //dd(session('cart'));
    $cart = session()->get('cart', []);
    
    // Check if the product is already in the cart
    if (isset($cart[$productId])) {
        // Increment the quantity if the product is already in the cart
        $cart[$productId]['quantity'] += $this->quantity;
    } else {
        // Add the product to the cart
        $cart[$productId] = [
            'quantity' => $this->quantity,
            // You can also store other product details like name, price, etc.
        ];
    }
    
    // Save the updated cart back to the session
    session()->put('cart', $cart);
    session()->flash('message', 'Product add to the cart.');
    return redirect()->to('products');
}
}
