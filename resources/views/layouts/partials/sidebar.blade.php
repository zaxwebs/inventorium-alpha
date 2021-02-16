<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
	<div class="c-sidebar-brand d-lg-down-none">
		Inventorium
	</div>
	<ul class="c-sidebar-nav">
		<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="index.html">
				<i class="c-sidebar-nav-icon cil-puzzle"></i> Dashboard<span class="badge badge-info">NEW</span></a></li>
		<li class="c-sidebar-nav-title">Quick Links</li>
		<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="colors.html">
				<i class="c-sidebar-nav-icon cil-puzzle"></i> Add Sale</a></li>
		<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="typography.html">
				<i class="c-sidebar-nav-icon cil-puzzle"></i> Add Purchase</a></li>
		<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ route('orders.create') }}">
				<i class=" c-sidebar-nav-icon cil-cart"></i> Add Order</a></li>
		<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ route('products.create') }}">
				<i class="c-sidebar-nav-icon cil-devices"></i> Add Product</a></li>
		<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ route('categories.create') }}">
				<i class="c-sidebar-nav-icon cil-tag"></i> Add Category</a></li>
		<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ route('units.create') }}">
				<i class="c-sidebar-nav-icon cil-beaker"></i> Add Unit</a></li>
		<li class="c-sidebar-nav-title">Modules</li>
		<li class="c-sidebar-nav-item c-sidebar-nav-dropdown"><a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle"
				href="#">
				<i class="c-sidebar-nav-icon cil-puzzle"></i> Sales</a>
			<ul class="c-sidebar-nav-dropdown-items">
				<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="#"><span class="c-sidebar-nav-icon"></span>
						Add Sales</a></li>
				<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="#"><span class="c-sidebar-nav-icon"></span>
						View Sales</a></li>
			</ul>
		</li>
		<li class="c-sidebar-nav-item c-sidebar-nav-dropdown"><a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle"
				href="#">
				<i class="c-sidebar-nav-icon cil-puzzle"></i> Purchases</a>
			<ul class="c-sidebar-nav-dropdown-items">
				<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="#"><span class="c-sidebar-nav-icon"></span>
						Add Purchase</a></li>
				<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="#"><span class="c-sidebar-nav-icon"></span>
						View Purchases</a></li>
			</ul>
		</li>
		<li class="c-sidebar-nav-item c-sidebar-nav-dropdown"><a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle"
				href="#">
				<i class="c-sidebar-nav-icon cil-cart"></i> Orders</a>
			<ul class="c-sidebar-nav-dropdown-items">
				<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ route('orders.create') }}"><span
							class="c-sidebar-nav-icon"></span>
						Add Order</a></li>
				<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="#"><span class="c-sidebar-nav-icon"></span>
						View Orders</a></li>
			</ul>
		</li>
		<li class="c-sidebar-nav-item c-sidebar-nav-dropdown"><a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle"
				href="#">
				<i class="c-sidebar-nav-icon cil-devices"></i> Products</a>
			<ul class="c-sidebar-nav-dropdown-items">
				<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ route('products.create') }}"><span
							class="c-sidebar-nav-icon"></span>
						Add Product</a></li>
				<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="#"><span class="c-sidebar-nav-icon"></span>
						View Products</a></li>
			</ul>
		</li>
		<li class="c-sidebar-nav-item c-sidebar-nav-dropdown"><a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle"
				href="#">
				<i class="c-sidebar-nav-icon cil-tag"></i> Categories</a>
			<ul class="c-sidebar-nav-dropdown-items">
				<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ route('categories.create') }}"><span
							class="c-sidebar-nav-icon"></span>
						Add Category</a></li>
				<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="#"><span class="c-sidebar-nav-icon"></span>
						View Categories</a></li>
			</ul>
		</li>
		<li class="c-sidebar-nav-item c-sidebar-nav-dropdown"><a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle"
				href="#">
				<i class="c-sidebar-nav-icon cil-beaker"></i> Units</a>
			<ul class="c-sidebar-nav-dropdown-items">
				<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ route('units.create') }}"><span
							class="c-sidebar-nav-icon"></span>
						Add Unit</a></li>
				<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="#"><span class="c-sidebar-nav-icon"></span>
						View Units</a></li>
			</ul>
		</li>

		<li class="c-sidebar-nav-divider"></li>
		<li class="c-sidebar-nav-title">Extras</li>
		<li class="c-sidebar-nav-item c-sidebar-nav-dropdown"><a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle"
				href="#">
				<i class="c-sidebar-nav-icon cil-puzzle"></i> Pages</a>
			<ul class="c-sidebar-nav-dropdown-items">
				<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="#" target="_top">
						<i class="c-sidebar-nav-icon cil-puzzle"></i> Login</a></li>
				<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="#" target="_top">
						<i class="c-sidebar-nav-icon cil-puzzle"></i> Register</a></li>
			</ul>
		</li>
		<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="charts.html">
				<i class="c-sidebar-nav-icon cil-puzzle"></i> Charts</a></li>
		<li class="c-sidebar-nav-item c-sidebar-nav-dropdown"><a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle"
				href="#">
				<i class="c-sidebar-nav-icon cil-puzzle"></i> Notifications <span class="badge badge-info">NEW</span></a>
			<ul class="c-sidebar-nav-dropdown-items">
				<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="#"><span class="c-sidebar-nav-icon"></span>
						Alerts</a></li>
				<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="#"><span class="c-sidebar-nav-icon"></span>
						Badge</a></li>
				<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="#"><span class="c-sidebar-nav-icon"></span>
						Modals</a></li>
			</ul>
		</li>
	</ul>
	<button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent"
		data-class="c-sidebar-minimized"></button>
</div>