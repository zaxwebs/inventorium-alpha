@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-md-6">
		<div class="card">

			<form method="post" action="{{ route('categories.store') }}">
				<div class="card-header"><strong>Create a Category</strong></div>
				<div class="card-body">
					<div class="row">
						<div class="col-sm-12">
							@csrf
							<div class="form-group">
								<label for="name">Name</label>
								<input class="form-control" name="name" list="names" type="text" placeholder="Enter category name">
								<datalist id="names">
									@foreach($categories as $category)
									<option value="{{ $category }}">
										@endforeach
								</datalist>
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer">
					<button class="btn btn-primary" type="submit"> Create Category</button>
				</div>
			</form>
		</div>

	</div>
</div>
@endsection