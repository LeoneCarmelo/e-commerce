<?php

namespace App\Livewire\Product;

use Livewire\Component;
use App\Models\Product;

class EditProduct extends Component
{
    public $product;
    public $name;
    public $description;
    public $weight;
    public $price;

    public function mount(Product $product)
    {
        $this->name = $product->name;
        $this->description = $product->description;
        $this->weight = $product->weight;
        $this->price = $product->price;
    }

    public function render()
    {
        return view('livewire.product.edit-product');
    }

    public function update()
    {
        $val_data = $this->validate([
            'name' => 'required|max:50',
            'price' => 'required|numeric',
            'description' => 'nullable',
            'weight' => 'nullable'
        ],[
            'name.required' => 'The name is required. Please insert your name',
            'name.max' => 'The name can\'t exceed the 50 characters',
            'price.numeric' => 'The price number must contain only numbers',
            'price.required' => 'The price is required. Please insert the price of the product',
        ]);

        $this->product->update($val_data);

        session()->flash('message', 'Product updated successfully.');

        return redirect()->to('products/index-product');
    }
}
