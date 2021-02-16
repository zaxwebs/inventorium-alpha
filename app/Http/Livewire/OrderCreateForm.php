<?php

namespace App\Http\Livewire;

use App\Product;
use Livewire\Component;

class OrderCreateForm extends Component
{

    public $allProducts;

    public $productIds = [];
    public $productIdles = [];
    public $productRates= [];

    public $type = true; // true = selling, false = purchasing

    public $productIdlesSkeleton = [
        'unit' => null,
        'quantity' => 1,
    ];

    public function mount() {
        $this->allProducts = Product::all();
        $this->addProduct();
    }

    public function updatedProductIds() {
        foreach($this->productIds as $index => $productId) {
            if($productId !== null) {
                $product = $this->allProducts->firstWhere('id', $productId);
                $this->productIdles[$index]['unit'] = $product->unit->name;
                $this->productRates[$index] = $product->selling_price;
            }
        }
    }

    public function calculateProductTotal($index) {
        return $this->productRates[$index] * $this->productIdles[$index]['quantity'];
    }

    public function calculateTotal() {
        $total = 0;
        for($i=0; $i < count($this->productIds); $i++) {
            $total += $this->calculateProductTotal($i);
        }
        return $total;
    }

    public function addProduct() {
        $this->productIds[] = null;
        $this->productIdles[] = $this->productIdlesSkeleton;
        $this->productRates[] = 0;
    }

    public function removeProduct($index) {
        unset($this->productIds[$index]);
        $this->productIds = array_values($this->productIds);
        unset($this->productIdles[$index]);
        $this->productIdles = array_values($this->productIdles);
        unset($this->productRates[$index]);
        $this->productRates = array_values($this->productRates);
    }

    public function render() {
        return view('livewire.order-create-form');
    }
}
