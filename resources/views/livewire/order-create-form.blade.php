<div class="card">
    <form>
        @csrf
        <div class="card-header"><strong>Add an Order</strong></div>
        <div class="card-body">
            <div class="row">
                {{ json_encode($orderProducts) }}
            </div>
            @foreach ($orderProducts as $index => $orderProduct)
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Select Product</label>
                        <select wire:model="orderProducts.{{ $index }}.id" class="form-control" id="">
                            <option selected hidden>Select a Product</option>
                            @foreach ($allProducts as $product)
                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="row">
                <div class="col-sm-12">
                    <button class="btn btn-primary" wire:click.prevent="addProduct">Add Product</button>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-primary" type="submit">Add Order</button>
        </div>
    </form>
</div>