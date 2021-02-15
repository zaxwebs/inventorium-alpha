<?php

namespace App\Http\Livewire;

use App\Product;
use Livewire\Component;

class OrderCreateForm extends Component
{
    public $allProducts;
    public $orderProducts;
    public $newProduct = null;

    public $productSkeleton = [
        'id' => null,
        'unit' => null,
        'quantity' => 0,
    ];

    public function mount() {
        $this->allProducts = Product::all();
        $this->orderProducts = [ $this->productSkeleton ];
    }

    public function updatedOrderProducts() {
        foreach($this->orderProducts as $index => $orderProduct) {
            $product = $this->allProducts->firstWhere('id', $orderProduct['id']);
            $this->orderProducts[$index]['unit'] = $product->unit->name;
        }
    }

    public function addProduct() {
        $this->orderProducts[] = $this->productSkeleton;
    }

    public function render() {
        return view('livewire.order-create-form');
    }
}
