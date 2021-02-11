@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-md-6">
		<div class="card">

			<form method="post" action="{{ route('units.store') }}">
				<div class="card-header"><strong>Create a Unit</strong></div>
				<div class="card-body">
					<div class="row">
						<div class="col-sm-12">
							@csrf
							<div class="form-group">
								<label for="name">Name</label>
								<input class="form-control" id="name" name="name" list="names" type="text"
									placeholder="Enter unit name">
								<datalist id="names">
									@foreach($units as $unit)
									<option value="{{ $unit }}">
										@endforeach
								</datalist>
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer">
					<button class="btn btn-primary" type="submit"> Create Unit</button>
				</div>
			</form>
		</div>

	</div>
</div>
@endsection