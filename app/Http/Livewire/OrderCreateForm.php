<?php

/* TODO
    Fix quantity and rate validation.
    Add Specific ID tasking.
*/

namespace App\Http\Livewire;

use App\Product;
use Livewire\Component;

class OrderCreateForm extends Component
{

    public $allProducts;

    public $productIds = [];
    public $productIdles = [];
    public $productRates= [];

    public $selling = true;

    public $productIdlesSkeleton = [
        'unit' => null,
        'quantity' => 1,
    ];

    protected $rules = [
        'productIds.*' => 'required|exists:products,id',
        'productIdles.*.quantity' => 'required|numeric|gt:0',
        'productRates.*' => 'required|numeric|gt:0',
    ];

    protected $validationAttributes  = [
        'productIds.*' => 'product',
        'productIdles.*.quantity' => 'quantity',
        'productRates.*' => 'rate',
    ];

    public function mount() {
        $this->allProducts = Product::all();
        $this->addProduct();
    }

    public function updated() {
        $this->resetValidation();
    }

    public function updatedSelling() {
        foreach($this->productIds as $index => $productId) {
            if($productId !== null) {
                $product = $this->allProducts->firstWhere('id', $productId);
                $this->productRates[$index] = $this->selling == true ? $product->selling_price : $product->cost_price;
            }
        }
    }

    public function updatedProductIds() {
        foreach($this->productIds as $index => $productId) {
            if($productId !== null) {
                $product = $this->allProducts->firstWhere('id', $productId);
                $this->productIdles[$index]['unit'] = $product->unit->name;
                $this->productRates[$index] = $this->selling == true ? $product->selling_price : $product->cost_price;
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

        $this->resetValidation();
    }

    public function submit() {
        $this->validate();
    }

    public function render() {
        return view('livewire.order-create-form');
    }
}
