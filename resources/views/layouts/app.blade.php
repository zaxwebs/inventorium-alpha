<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CoreUI CSS -->
	<link rel="stylesheet" href="https://unpkg.com/@coreui/icons@2.0.0-beta.3/css/all.min.css">
	<link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css" crossorigin="anonymous">
	<!-- View CSS -->
	@yield('styles')
	<!-- App CSS -->
	@yield('styles')
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<title>Inventorium</title>
</head>

<body class="c-app">
	@include('layouts.partials.sidebar')
	<div class="c-wrapper">
		<header class="c-header">
			<!-- Header content here -->
			<button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar"
				data-class="c-sidebar-lg-show" responsive="true">
				<i class="cil-hamburger-menu"></i>
			</button>
		</header>
		<div class="c-body">
			<main class="c-main">
				<!-- Error alert -->
				@if ($errors->any())
				<div class="container-fluid">
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
							<li class="d-flex align-items-center"><i class="cil-x"></i> {{ $error }}</li>
							@endforeach
						</ul>
					</div>
				</div>
				@endif
				<!-- Success alert -->
				@if (Session::has('success'))
				<div class="container-fluid">
					<div class="alert alert-success d-flex align-items-center">
						<i class="cil-check-alt"></i> {{ session('success') }}
					</div>
				</div>
				@endif
				<div class="container-fluid">
					@yield('content')
				</div>
			</main>
		</div>
		<footer class="c-footer">
			<!-- Footer content here -->
			&copy; Zack Webster
		</footer>
	</div>

	<!-- CoreUI JavaScript -->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.bundle.min.js"></script>
	@yield('scripts')
</body>

</html>