<div class="card">
    <form>
        @csrf
        <div class="card-header"><strong>Add an Order</strong></div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="mr-1">Order Type</label>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button wire:click.prevent="$set('type', true)" type="button"
                                class="btn {{ $type == true ? 'btn-primary' : 'btn-secondary'}}">Selling</button>
                            <button wire:click.prevent="$set('type', false)" type="button"
                                class="btn {{ $type == false ? 'btn-primary' : 'btn-secondary'}}">Purchasing</button>
                        </div>
                    </div>
                </div>
            </div>
            @foreach ($productIds as $index => $productId)
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
                <div class="col-lg-2">
                    <div class="form-group">
                        <label for="">Quantity</label>
                        <div class="input-group">
                            <input wire:model.lazy="productIdles.{{ $index }}.quantity" class="form-control"
                                type="number" min="0" step="any" value="{{ $productIdles[$index]['quantity'] }}">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    {{ $productIdles[$index]['unit'] ? $productIdles[$index]['unit'] : 'Unit' }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="form-group">
                        <label for="">Rate per
                            {{ $productIdles[$index]['unit']  ? $productIdles[$index]['unit'] : 'Unit' }}</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">₹</div>
                            </div>
                            <input wire:model.lazy="productRates.{{ $index }}" class="form-control" type="number"
                                min="0" step="any" value="{{ $productRates[$index] }}">
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="form-group">
                        <label for="">Total</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">₹</div>
                            </div>
                            <input disabled class="form-control" type="number" min="0" step="any"
                                value="{{ $productRates[$index] * $productIdles[$index]['quantity'] }}">
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
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