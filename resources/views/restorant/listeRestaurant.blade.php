<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from eduport.webestica.com/admin-instructor-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Nov 2023 13:17:02 GMT -->
<head>
	@include('restorant.header')

</head>

<body>


<!-- **************** MAIN CONTENT START **************** -->
<main>
	
<!-- Sidebar START -->
<nav class="navbar sidebar navbar-expand-xl navbar-dark bg-dark">

	<!-- Navbar brand for xl START -->
	<div class="d-flex align-items-center">
		<a class="navbar-brand" href="index.html">
			<img class="navbar-brand-item" src="assets/images/logo-light.svg" alt="">
		</a>
	</div>
	<!-- Navbar brand for xl END -->
	
	<div class="offcanvas offcanvas-start flex-row custom-scrollbar h-100" data-bs-backdrop="true" tabindex="-1" id="offcanvasSidebar">
		<div class="offcanvas-body sidebar-content d-flex flex-column bg-dark">

			<!-- Sidebar menu START -->
			<ul class="navbar-nav flex-column mt-5" id="navbar-sidebar">
				
				<!-- Menu item 1 -->
				<li class="nav-item"><a href="{{url('/restorant/create')}}" class="nav-link"><i class="bi bi-plus mx-2"></i>Ajouter Restaurant</a></li>
				 

			 

				<!-- Menu item 3 -->
				<li class="nav-item"> <a class="nav-link" href="{{url('/restorant/liste')}}"><i class="bi bi-list mx-2"></i>Liste des resaurants</a></li>
				<li class="nav-item"><a href="{{url('/menus/create')}}" class="nav-link"><i class="bi bi-plus mx-2"></i>Ajouter Menu</a></li>
				 				 
<li class="nav-item"> <a class="nav-link" href="{{url('/menus/user')}}"><i class="bi bi-list mx-2"></i>Liste des Menus</a></li>
<!-- Menu item 1 -->

			</ul>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
            <!-- Sidebar footer START -->
           


            <div class="px-3 mt-auto pt-3">
				<div class="d-flex align-items-center justify-content-between text-primary-hover">
                    <button type="submit" class="h6 fw-light mb-0 text-body btn btn-link p-0"> 
						<a class="h5 mb-0 text-body" href="sign-in.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Sign out">
							<i class="bi bi-power"></i>
						</a> Logout</button>
				</div>
			</div>
            </div></form>
			
		 
			
		</div>
	</div>
</nav>
<!-- Sidebar END -->

<!-- Page content START -->
<div class="page-content">
	
	<!-- Top bar START -->
	<nav class="navbar top-bar navbar-light border-bottom py-0 py-xl-3">
		<div class="container-fluid p-0">
			<div class="d-flex align-items-center w-100">

				<!-- Logo START -->
				<div class="d-flex align-items-center d-xl-none">
					<a class="navbar-brand" href="index.html">
						<img class="light-mode-item navbar-brand-item h-30px" src="assets/images/logo-mobile.svg" alt="">
						<img class="dark-mode-item navbar-brand-item h-30px" src="assets/images/logo-mobile-light.svg" alt="">
					</a>
				</div>
				<!-- Logo END -->

				<!-- Toggler for sidebar START -->
				<div class="navbar-expand-xl sidebar-offcanvas-menu">
					<button class="navbar-toggler me-auto" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar" aria-expanded="false" aria-label="Toggle navigation" data-bs-auto-close="outside">
						<i class="bi bi-text-right fa-fw h2 lh-0 mb-0 rtl-flip" data-bs-target="#offcanvasMenu"> </i>
					</button>
				</div>
				<!-- Toggler for sidebar END -->
				
				<!-- Top bar left -->
				<div class="navbar-expand-lg ms-auto ms-xl-0">
					
					<!-- Toggler for menubar START -->
					<button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTopContent" aria-controls="navbarTopContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-animation">
							<span></span>
							<span></span>
							<span></span>
						</span>
					</button>
					<!-- Toggler for menubar END -->

					<!-- Topbar menu START -->
					<div class="collapse navbar-collapse w-100" id="navbarTopContent">
						<!-- Top search START -->
						<div class="nav my-3 my-xl-0 flex-nowrap align-items-center">
							<div class="nav-item w-100">
								<form class="position-relative">
									<input class="form-control pe-5 bg-secondary bg-opacity-10 border-0" type="search" placeholder="Search" aria-label="Search">
									<button class="bg-transparent px-2 py-0 border-0 position-absolute top-50 end-0 translate-middle-y" type="submit"><i class="fas fa-search fs-6 text-primary"></i></button>
								</form>
							</div>
						</div>
						<!-- Top search END -->
					</div>
					<!-- Topbar menu END -->
				</div>
				<!-- Top bar left END -->
				
				<!-- Top bar right START -->
				<div class="ms-xl-auto">
					<ul class="navbar-nav flex-row align-items-center">

						<!-- Notification dropdown START -->
						<li class="nav-item ms-2 ms-md-3 dropdown">
							<!-- Notification button -->
							<a class="btn btn-light btn-round mb-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
								<i class="bi bi-bell fa-fw"></i>
							</a>
							<!-- Notification dote -->
							<span class="notif-badge animation-blink"></span>

							<!-- Notification dropdown menu START -->
							<div class="dropdown-menu dropdown-animation dropdown-menu-end dropdown-menu-size-md p-0 shadow-lg border-0">
								<div class="card bg-transparent">
									<div class="card-header bg-transparent border-bottom py-4 d-flex justify-content-between align-items-center">
										<h6 class="m-0">Notifications <span class="badge bg-danger bg-opacity-10 text-danger ms-2">2 new</span></h6>
										<a class="small" href="#">Clear all</a>
									</div>
									<div class="card-body p-0">
										<ul class="list-group list-unstyled list-group-flush">
											<!-- Notif item -->
											<li>
												<a href="#" class="list-group-item-action border-0 border-bottom d-flex p-3">
													<div class="me-3">
														<div class="avatar avatar-md">
															<img class="avatar-img rounded-circle" src="assets/images/avatar/08.jpg" alt="avatar">
														</div>
													</div>
													<div>
														<p class="text-body small m-0">Congratulate <b>Joan Wallace</b> for graduating from <b>Microverse university</b></p>
														<u class="small">Say congrats</u>
													</div>
												</a>
											</li>

											<!-- Notif item -->
											<li>
												<a href="#" class="list-group-item-action border-0 border-bottom d-flex p-3">
													<div class="me-3">
														<div class="avatar avatar-md">
															<img class="avatar-img rounded-circle" src="assets/images/avatar/02.jpg" alt="avatar">
														</div>
													</div>
													<div>
														<h6 class="mb-1">Larry Lawson Added a new course</h6>
														<p class="small text-body m-0">What's new! Find out about new features</p>
														<u class="small">View detail</u>
													</div>
												</a>
											</li>

											<!-- Notif item -->
											<li>
												<a href="#" class="list-group-item-action border-0 border-bottom d-flex p-3">
													<div class="me-3">
														<div class="avatar avatar-md">
															<img class="avatar-img rounded-circle" src="assets/images/avatar/05.jpg" alt="avatar">
														</div>
													</div>
													<div>
														<h6 class="mb-1">New request to apply for Instructor</h6>
														<u class="small">View detail</u>
													</div>
												</a>
											</li>

											<!-- Notif item -->
											<li>
												<a href="#" class="list-group-item-action border-0 border-bottom d-flex p-3">
													<div class="me-3">
														<div class="avatar avatar-md">
															<img class="avatar-img rounded-circle" src="assets/images/avatar/03.jpg" alt="avatar">
														</div>
													</div>
													<div>
														<h6 class="mb-1">Update v2.3 completed successfully</h6>
														<p class="small text-body m-0">What's new! Find out about new features</p>
														<small class="text-body">5 min ago</small>
													</div>
												</a>
											</li>
										</ul>
									</div>
									<!-- Button -->
									<div class="card-footer bg-transparent border-0 py-3 text-center position-relative">
										<a href="#" class="stretched-link">See all incoming activity</a>
									</div>
								</div>
							</div>
							<!-- Notification dropdown menu END -->
						</li>
						<!-- Notification dropdown END -->

						<!-- Profile dropdown START -->
						<li class="nav-item ms-2 ms-md-3 dropdown">
							<!-- Avatar -->
							<a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
								<img class="avatar-img rounded-circle" src="{{asset('layoutsCss/images/restorant.jpeg')}}" alt="avatar">
							</a>

							<!-- Profile dropdown START -->
							<ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3" aria-labelledby="profileDropdown">
								<!-- Profile info -->
								<li class="px-3">
									<div class="d-flex align-items-center">
										<!-- Avatar -->
										<div class="avatar me-3 mb-3">
											<img class="avatar-img rounded-circle shadow" src="{{asset('layoutsCss/images/restorant.jpeg')}}" alt="avatar">
										</div>
										<div>
											<a class="h6 mt-2 mt-sm-0" >{{ Auth::user()->name }}</a>
											<p class="small m-0">{{ Auth::user()->email }}</p>
											<a class="nav-link" href="{{url('/profile')}}">Edit Profile</a>
										</div>
									</div>
								</li>
               
							 
								{{-- <li><a class="dropdown-item bg-danger-soft-hover" href="#"><i class="bi bi-power fa-fw me-2"></i>Sign Out</a></li> --}}
						 

								<!-- Dark mode options START -->
								<li>
									<div class="bg-light dark-mode-switch theme-icon-active d-flex align-items-center p-1 rounded mt-2">
										<!-- <span>Mode:</span> -->
										<button type="button" class="btn btn-sm mb-0" data-bs-theme-value="light">
											<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sun fa-fw mode-switch" viewBox="0 0 16 16">
												<path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
												<use href="#"></use>
											</svg> Light
										</button>
										<button type="button" class="btn btn-sm mb-0" data-bs-theme-value="dark">
											<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-stars fa-fw mode-switch" viewBox="0 0 16 16">
												<path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z"/>
												<path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
												<use href="#"></use>
											</svg> Dark
										</button>
										<button type="button" class="btn btn-sm mb-0 active" data-bs-theme-value="auto">
											<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-half fa-fw mode-switch" viewBox="0 0 16 16">
												<path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
												<use href="#"></use>
											</svg> Auto
										</button>
									</div>
								</li> 
								<!-- Dark mode options END-->
							</ul>
							<!-- Profile dropdown END -->
						</li>
						<!-- Profile dropdown END -->
					</ul>
				</div>
				<!-- Top bar right END -->
			</div>
		</div>
	</nav>
	<div class="page-content-wrapper border">

		<!-- Title -->
		<div class="row mb-3">
			<div class="col-12 d-sm-flex justify-content-between align-items-center">
				<h1 class="h3 mt-3 mb-5 mb-sm-0">Liste Des restaurants crées par Mr/Mme {{ Auth::user()->name }}</h1>
				<a href="/restorant/create" class="btn btn-sm btn-primary mb-0">créer un restaurant</a>
			</div>
		</div>

		<!-- Course boxes START -->
		<div class="row g-4 mb-4">
			<!-- Course item -->
			<div class="col-12 ">
				<div class="text-center p-4 bg-primary bg-opacity-10 border border-primary rounded-3">
					<h6>Le nombre totale de vos restaurants :</h6>
					<h2 class="mb-0 fs-1 text-primary">{{ $totalRestaurants }}</h2>
				</div>
			</div>

		 

			 
		</div>
		<!-- Course boxes END -->

		<!-- Card START -->
		<div class="card bg-transparent border">

			<!-- Card header START -->
			<div class="card-header bg-light border-bottom">
				<!-- Search and select START -->
				<div class="row g-3 align-items-center justify-content-between">
						<!-- Select option -->
						 
					<div class="col-md-12 text-center">
						<form action="{{ route('restorant.search') }}" method="GET" class="rounded position-relative">
							<input class="form-control bg-body" type="search" name="query" placeholder="Rechercher" aria-label="Search" value="{{ request()->input('query') }}">
							<button class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset" type="submit">
								<i class="fas fa-search fs-6"></i>
							</button>
						</form>
						
					</div>

				
				</div>
				<!-- Search and select END -->
			</div>
			<!-- Card header END -->

			<!-- Card body START -->
			<div class="card-body">
				



				<table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
					<!-- Table head -->
					<thead>
						<tr>
							<th scope="col" class="border-0 rounded-start">Nom du restaurant</th>
							<th scope="col" class="border-0">Spécialité du restaurant</th>
							<th scope="col" class="border-0">Localisation </th>
							<th scope="col" class="border-0">Numéro fix </th>
							<th scope="col" class="border-0">Date de création </th>
							 
							<th scope="col" class="border-0 rounded-end">Action</th>
						</tr>
					</thead>
					
					<!-- Table body START -->
					<tbody>
						
						@foreach($restaurants as $restaurant)
						<tr>
							<!-- Table data -->
							<td>
								<div class="d-flex align-items-center position-relative">
								 
									<h6 class="table-responsive-title mb-0 ms-2">	
										<a class="stretched-link">{{ $restaurant->Restorant }}</a>
									</h6>
								</div>
							</td>

							<!-- Table data -->
							<td>
								<div class="d-flex align-items-center mb-3">
								 
									<div class="ms-2">
										<h6 class="mb-0 fw-light">{{ $restaurant->specialite }}</h6>
									</div>
								</div>
							</td>

						 
							<td> <span class="badge text-bg-primary">{{ $restaurant->localisation }}</span> </td>

							<!-- Table data -->
							 
						 
							<td> <span class="badge bg-warning bg-opacity-15 text-warning">{{ $restaurant->numero_fix }}</span> </td>
<td>{{ \Carbon\Carbon::parse($restaurant->created_at)->format('d/m/Y') }}</td>
							 
							<td class="d-flex  ">
								<a href="{{url('Myrestorantt',$restaurant->id)}}">
								<button class="btn btn-info-soft"><i class="bi bi-info-circle"></i></button>
								</a>
								{{-- <a href="{{ url('rrestorant/edit', $restaurant->id) }}">
									<button class="btn btn-warning-soft  mx-2">Modifier</button>
								</a>
							     --}}
								 <a href="{{ route('restorant.edit', $restaurant->id) }}">
									<button class="btn btn-warning-soft mx-2"> <i class="bi bi-pen"></i></button>
								</a>
								
								<form action="{{ route('restorant.destroy', $restaurant->id) }}" method="POST">
								@csrf
								@method('DELETE')
									{{-- <input type="submit" class="btn btn-danger-soft"  value="Supprimer" /> --}}
									<button class="btn btn-danger-soft" type="submit"><i class="bi bi-trash"></i></button>
							</form>
							</td>
						</tr>

 
				 

						@endforeach
					</tbody>
				 
				</table>











		 
			 

			 
			<div class="card-footer bg-transparent pt-0">
				<!-- Pagination START -->
				<div class="d-sm-flex justify-content-sm-between align-items-sm-center">
					<!-- Content -->
					<p class="mb-0 text-center text-sm-start">plus...</p>
					<!-- Pagination -->
					<nav class="d-flex justify-content-center mb-0" aria-label="navigation">
						<ul class="pagination pagination-sm pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
							<li class="page-item mb-0"><a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-left"></i></a></li>
							<li class="page-item mb-0"><a class="page-link" href="#">1</a></li>
							<li class="page-item mb-0 active"><a class="page-link" href="#">2</a></li>
							<li class="page-item mb-0"><a class="page-link" href="#">3</a></li>
							<li class="page-item mb-0"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
						</ul>
					</nav>
				</div>
				<!-- Pagination END -->
			</div>
			<!-- Card footer END -->
		</div>
		<!-- Card END -->
	</div>

</div>
<!-- Page content END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

<!-- Bootstrap JS -->
<script src="{{asset('restorantCss/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('restorantCss/vendor/overlay-scrollbar/js/overlayscrollbars.min.js')}}"></script>

<!-- Template Functions -->
<script src="{{asset('restorantCss/js/functions.js')}}"></script>

</body>

<!-- Mirrored from eduport.webestica.com/admin-instructor-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Nov 2023 13:17:02 GMT -->
</html>