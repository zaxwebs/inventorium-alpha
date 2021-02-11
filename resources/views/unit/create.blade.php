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
								<input class="form-control" id="name" name="name" type="text" placeholder="Enter unit name">
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer">
					<button class="btn btn-primary" type="submit"> Submit</button>
				</div>
			</form>
		</div>

	</div>
</div>
@endsection