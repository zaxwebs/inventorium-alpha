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
									placeholder="Enter product name">
								<datalist id="names">
									@foreach($products as $product)
									<option value="{{ $product }}">
										@endforeach
								</datalist>
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
											<input class="form-check-input" type="radio" id="{{ 'unit-'.$unit->id }}" name="unit"
												value="{{ $unit->id }}">
											<label class="form-check-label d-flex" for="{{ 'unit-'.$unit->id }}">
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
								<label for="categories">Select Categories</label>
								<select multiple class="form-control" id="categories" size="10">
									@foreach ($categories as $category)
									<option value="{{ $category->id }}">{{ $category->name }}</option>
									@endforeach
								</select>
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