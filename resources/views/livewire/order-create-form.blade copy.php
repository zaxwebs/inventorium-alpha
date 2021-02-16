<div class="card">
    <form>
        @csrf
        <div class="card-header"><strong>Add an Order</strong></div>
        <div class="card-body">
            <div class="row">
                <pre class="col-sm-12">{{ json_encode($orderProducts) }}</pre>
            </div>
            @foreach ($orderProducts as $index => $orderProduct)
            <div wire:key="{{ $index }}" class="row">
                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="">Select Product</label>
                        <select wire:model="productIds.{{ $index }}" class="form-control" id="">
                            <option selected hidden>Select a Product</option>
                            @foreach ($allProducts as $product)
                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="">Quantity</label>
                        <div class="input-group">
                            <input wire:model.lazy="orderProducts.{{ $index }}.quantity" class="form-control"
                                type="number" min="0" step="any" value="{{ $orderProduct['quantity'] }}">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    {{ $orderProduct['unit'] ? $orderProduct['unit'] : 'Unit' }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="">Rate per {{ $orderProduct['unit'] ? $orderProduct['unit'] : 'Unit' }}</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">$</div>
                            </div>
                            <input wire:model.lazy="orderProducts.{{ $index }}.rate" class="form-control" type="number"
                                min="0" step="any" value="{{ $orderProduct['rate'] }}">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label class="d-block" for="">Actions</label>
                        <button class="btn btn-secondary" wire:click.prevent="removeProduct({{ $index }})">Remove
                            Product</button>
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