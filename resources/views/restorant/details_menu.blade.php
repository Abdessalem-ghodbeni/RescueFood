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
<!-- Menu item 1 -->
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
			
			<!-- Sidebar footer END -->
			
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
        <section class="bg-primary bg-opacity-10">
            <div class="container">
                <div class="row">
                    <!-- Content START -->
                    <div class="col-lg-8 mx-auto text-center">
                        
        <p class="text-center mt-3"><strong>Vous trouverez ici toutes les informations pertinentes sur les plats et les options disponibles.</strong></p>
                        <!-- Popular questions START -->
                        <div class="row mt-4 align-items-center">
                            <div class="col-12">
                                <h5 class="mb-3">Menu numéro <strong>{{ $menu->id }}</strong></h5>
                                <!-- Questions List START -->
                                <div class="list-group list-group-horizontal gap-2 justify-content-center flex-wrap mb-0 border-0">
                                    <a class="btn btn-white btn-sm fw-light" href="help-center-detail.html"> <strong>Description:{{ $menu->description }} </strong> </a>
                                    <a class="btn btn-white btn-sm fw-light" href="help-center-detail.html"> <strong>Prix:{{ $menu->prix }} €</strong> </a>
                                    <a class="btn btn-white btn-sm fw-light" href="help-center-detail.html"><strong>Restaurant: {{ $menu->restaurant->name }} </strong></a>
                                    <a class="btn btn-white btn-sm fw-light" href="help-center-detail.html"> <strong>Date d'ajout:{{ $menu->created_at->format('d-m-Y H:i') }} </strong> </a>
                                    <a href="{{ route('menus.user') }}" class="btn btn-primary-soft">Retour à la liste des menus</a>
                                 
                                </div>
                                <!-- Questions list END -->
                            </div>
                        </div>
                        <!-- Popular questions END -->
                    </div>
              <!-- Content END -->
        
                    <!-- Image -->
                    <div class="col-12 mt-6">
                        <img src="{{asset('restorantCss/images/element/help-center.svg')}}" class="w-100" alt="">
                    </div>
                </div>
            </div>
        </section>
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