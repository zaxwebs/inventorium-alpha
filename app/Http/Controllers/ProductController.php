<?php

namespace App\Http\Controllers;

use App\Rate;
use App\Unit;
use App\Product;
use App\Category;
use App\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('products.create', [
            'products' => Product::pluck('name'),
            'units'=> Unit::all(),
            'categories'=> Category::all(),
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:products|max:255',
            'unit' => 'required|exists:units,id',
            'categories' => 'required|array',
            'categories.*' => 'required|in:'. Category::pluck('id')->implode(','),
            'cost_price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'selling_price' => 'required|regex:/^\d+(\.\d{1,2})?$/'
        ], [], ['categories.*' => 'category (or more)']);

        $product = Product::create([
            'name' => $request->get('name'),
            'unit_id' => $request->get('unit'),
        ]);

        $rate = Rate::create([
            'product_id' => $product->id,
            'cost_price' => $request->get('cost_price'),
            'selling_price' => $request->get('selling_price'),
        ]);

        foreach($request->get('categories') as $category_id) {
            ProductCategory::create([
                'product_id' => $product->id,
                'category_id' => $category_id
            ]);
        }

        return redirect()->back()->with('success', "New product '". $product->name."' has been created.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
