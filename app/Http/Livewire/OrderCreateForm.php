<?php

namespace App\Http\Livewire;

use App\Product;
use Livewire\Component;

class OrderCreateForm extends Component
{
    public $allProducts;
    public $orderProducts;
    public $newProduct = null;

    public $oldOrderProducts;

    public $productSkeleton = [
        'id' => null,
        'unit' => null,
        'quantity' => 0,
        'rate' => 0,
    ];

    public function mount() {
        $this->allProducts = Product::all();
        $this->orderProducts = [ $this->productSkeleton ];
    }

    public function updatingOrderProducts() {
        $this->oldOrderProducts = $this->orderProducts;
    }

    public function updatedOrderProducts() {
        $oldIds = array_column($this->oldOrderProducts, 'id');
        $ids = array_column($this->orderProducts, 'id');

        foreach($this->orderProducts as $index => $orderProduct) {
            if($orderProduct['id'] !== null) {
                $product = $this->allProducts->firstWhere('id', $orderProduct['id']);
                $this->orderProducts[$index]['unit'] = $product->unit->name;
                $this->orderProducts[$index]['rate'] = $product->selling_price;
            }
        }
    }

    public function addProduct() {
        $this->orderProducts[] = $this->productSkeleton;
    }

    public function removeProduct($index) {
        unset($this->orderProducts[$index]);
        $this->orderProducts = array_values($this->orderProducts);
    }

    public function render() {
        return view('livewire.order-create-form');
    }
}
