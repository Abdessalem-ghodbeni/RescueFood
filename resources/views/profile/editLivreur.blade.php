<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from booking.webestica.com/agent-listings.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Feb 2024 15:41:29 GMT -->
<head>
	@include('./fournisseur/header')
</head>

<body>

 
 
<main>

<!-- =======================
Menu item START -->
<section class="pt-4">
	<div class="container">
		<div class="card rounded-3 border p-3 pb-2">
			<!-- Avatar and info START -->
			<div class="d-sm-flex align-items-center">
				<div class="avatar avatar-xl mb-2 mb-sm-0">
					<img class="avatar-img rounded-circle" src="{{asset('layoutsCss/images/livreur.png')}}" alt="">
				</div>
				<h4 class="mb-2 mb-sm-0 ms-sm-3"><span class="fw-light">Hi</span>{{ Auth::user()->name }}</h4>
				<a href="add-listing.html" class="btn btn-sm btn-primary-soft mb-0 ms-auto flex-shrink-0"><i class="bi bi-plus-lg fa-fw me-2"></i>Add New Listing</a>
			</div>
			<!-- Avatar and info START -->
			
			<!-- Responsive navbar toggler -->
			<button class="btn btn-primary w-100 d-block d-xl-none mt-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#dashboardMenu" aria-controls="dashboardMenu">
				<i class="bi bi-list"></i> Dashboard Menu
			</button>

			<!-- Nav links START -->
			<div class="offcanvas-xl offcanvas-end mt-xl-3" tabindex="-1" id="dashboardMenu">
				<div class="offcanvas-header border-bottom p-3">
					<h5 class="offcanvas-title">Menu</h5>
					<button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#dashboardMenu" aria-label="Close"></button>
				</div>
				<!-- Offcanvas body -->
				<div class="offcanvas-body p-3 p-xl-0">
					<!-- Nav item -->
					<div class="navbar navbar-expand-xl">
						<ul class="navbar-nav navbar-offcanvas-menu">

							<li class="nav-item"> <a class="nav-link" href="agent-dashboard.html"><i class="bi bi-house-door fa-fw me-1"></i>Dashboard</a>	</li>

							<li class="nav-item"> <a class="nav-link active" href="agent-listings.html"><i class="bi bi-journals fa-fw me-1"></i>Listings</a> </li>

							<li class="nav-item"> <a class="nav-link" href="agent-bookings.html"><i class="bi bi-bookmark-heart fa-fw me-1"></i>Bookings</a> </li>

							<li class="nav-item"> <a class="nav-link" href="agent-activities.html"><i class="bi bi-bell fa-fw me-1"></i>Activities</a> </li>
		
							<li class="nav-item"> <a class="nav-link" href="agent-earnings.html"><i class="bi bi-graph-up-arrow fa-fw me-1"></i>Earnings</a>	</li>

							<li class="nav-item"> <a class="nav-link" href="agent-reviews.html"><i class="bi bi-star fa-fw me-1"></i>Reviews</a></li>
							
							<li class="nav-item"> <a class="nav-link" href="agent-settings.html"><i class="bi bi-gear fa-fw me-1"></i>Settings</a></li>
							
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="dropdoanMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="bi bi-list-ul fa-fw me-1"></i>Dropdown
								</a>
								<ul class="dropdown-menu" aria-labelledby="dropdoanMenu">
									<!-- Dropdown menu -->
									<li> <a class="dropdown-item" href="#">Item 1</a></li>
									<li> <a class="dropdown-item" href="#">Item 2</a></li>
								</ul>
							</li>	
							<form method="POST" action="{{ route('logout') }}">
								@csrf
							<!-- Sidebar footer START -->
							<div class="d-flex align-items-center justify-content-between text-primary-hover mt-auto p-3">
							<button type="submit" class="h6 fw-light mb-0 text-body btn btn-link p-0"> 
								
								<a class="h6 fw-light mb-0 text-body"  data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Sign out">
									<i class="fa-solid fa-arrow-right-from-bracket"></i> Log out
								</a>
								 
							</button>	
							</div></form>
						</ul>
					</div>
				</div>
			</div>
			<!-- Nav links END -->
		</div>
	</div>

</section>
<x-app-layout>
  

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">

                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<footer class="bg-dark p-3 w-100" style="bottom:0px; position:fixed">
	<div class="container">
		<div class="row align-items-center">

			<!-- Widget -->
			<div class="col-md-4">
				<div class="text-center text-md-start mb-3 mb-md-0">
					<a href="index.html"> <img class="h-30px"  src="{{asset('layoutsCss/images/livreur.png')}}" alt="logo"> </a>
				</div> 
			</div>
			
			<!-- Widget -->
			<div class="col-md-4">
				<div class="text-body-secondary text-primary-hover"> Copyrights ©2023 Booking. Build by <a href="https://www.webestica.com/" class="text-body-secondary">Webestica</a>. </div>
			</div>

			<!-- Widget -->
			<div class="col-md-4">
				<ul class="list-inline mb-0 text-center text-md-end">
					<li class="list-inline-item ms-2"><a href="#"><i class="text-white fab fa-facebook"></i></a></li>
					<li class="list-inline-item ms-2"><a href="#"><i class="text-white fab fa-instagram"></i></a></li>
					<li class="list-inline-item ms-2"><a href="#"><i class="text-white fab fa-linkedin-in"></i></a></li>
					<li class="list-inline-item ms-2"><a href="#"><i class="text-white fab fa-twitter"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>
<!-- =======================
Footer END -->

<!-- Back to top -->
<div class="back-top"></div>

<!-- Bootstrap JS -->
<script src="{{asset('layoutsCss/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

<!-- Vendors -->
<script src="{{asset('layoutsCss/vendor/apexcharts/js/apexcharts.min.js')}}"></script>
<script src="{{asset('layoutsCss/vendor/choices/js/choices.min.js')}}"></script>

<!-- ThemeFunctions -->
<script src="{{asset('layoutsCss/js/functions.js')}}"></script>

</body>

<!-- Mirrored from booking.webestica.com/agent-listings.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Feb 2024 15:41:29 GMT -->
</html>