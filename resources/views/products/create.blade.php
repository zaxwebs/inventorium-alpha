@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">

                <form method="post" action="{{ route('products.store') }}">
                    @csrf
                    <div class="card-header"><strong>Add a Product</strong></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input class="form-control" id="name" name="name" list="names" type="text"
                                        placeholder="Enter product name" value="{{ old('name') }}">
                                    <datalist id="names">
                                        @foreach ($products as $product)
                                            <option value="{{ $product }}">
                                        @endforeach
                                    </datalist>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="description">Description <span class="text-muted">(Optional)</span></label>
                                    <textarea name="description" class="form-control" id="description"
                                        rows="3">{{ old('description') }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="name">Select a Unit</label>
                                    <div class="row">
                                        @foreach ($units as $unit)
                                            <div class="col-md-4">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="radio"
                                                        id="{{ 'unit-' . $unit->id }}" name="unit"
                                                        value="{{ $unit->id }}" @if (old('unit') == $unit->id) checked @endif>
                                                    <label class="form-check-label d-flex" for="{{ 'unit-' . $unit->id }}">
                                                        {{ $unit->name }}
                                                    </label>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="d-block" for="categories">Select Categories</label>
                                    <select name="categories[]" multiple class="form-control" id="categories" size="10">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ collect(old('categories'))->contains($category->id) ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="cost_price">Cost Price</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">₹</div>
                                        </div>
                                        <input class="form-control" id="cost_price" name="cost_price" type="number" min="0"
                                            step="any" placeholder="Enter cost price" value={{ old('cost_price') }}>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="cost_price">Selling Price</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">₹</div>
                                        </div>
                                        <input class="form-control" id="selling_price" name="selling_price" type="number"
                                            min="0" step="any" placeholder="Enter selling price"
                                            value={{ old('selling_price') }}>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary" type="submit"> Add Product</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/bootstrap-multiselect.min.css') }}">
@endsection

@section('scripts')
    <script src="{{ asset('js/bootstrap-multiselect.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#categories').multiselect({
                enableFiltering: true,
                buttonTextAlignment: 'left',
                buttonWidth: '100%',
                enableCaseInsensitiveFiltering: true,
                templates: {
                    filter: '<div class="multiselect-filter"><div class="input-group p-1"><input class="form-control multiselect-search" type="text" /><div class="input-group-append"><button class="multiselect-clear-filter input-group-text" type="button">Clear</button></div></div></div>'
                }
            })
        });

    </script>
@endsection
