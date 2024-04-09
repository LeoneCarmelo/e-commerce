<?php

namespace App\Livewire\Products;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateProduct extends Component
{
    public $name = '';
    public $description = '';
    public $weight = '';
    public $price = '';
    public $available = '';
    public $userId;

    public function render()
    {
        if(Auth::id() != 1) {
            abort(403, 'You are not authorized');
        } else {
            return view('livewire.products.create-product');
        }
    }

    public function save()
    {
        $val_data = $this->validate([
            'name' => 'required|max:50',
            'description' => 'nullable',
            'weight' => 'nullable',
            'price' => 'required|numeric',
            'available' => 'nullable',
        ],[
            'name.required' => 'The name is required. Please insert your name',
            'name.max' => 'The name can\'t exceed the 50 characters',
            'price.numeric' => 'The price number must contain only numbers',
            'price.required' => 'The price is required. Please insert thre price of the products',
        ]);
        
        $this->userId = Auth::id();
        $val_data['user_id'] = $this->userId;

        Product::create($val_data);

        session()->flash('message', 'Product created successfully.');

        return redirect()->route('index-product');
    }
}
