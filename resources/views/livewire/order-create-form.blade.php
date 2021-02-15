<div class="card">
    <form>
        @csrf
        <div class="card-header"><strong>Add an Order</strong></div>
        <div class="card-body">
            <div class="row">
                <pre class="col-sm-12">{{ json_encode($orderProducts) }}</pre>
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
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Quantity</label>
                        <div class="input-group">

                            <input wire:model.lazy="orderProducts.{{ $index }}.quantity" class="form-control"
                                id="cost_price" name="cost_price" type="number" min="0" step="any"
                                value="{{ $orderProduct['quantity'] }}">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    {{ $orderProduct['unit'] ? $orderProduct['unit'] : 'Unit' }}</div>
                            </div>
                        </div>
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