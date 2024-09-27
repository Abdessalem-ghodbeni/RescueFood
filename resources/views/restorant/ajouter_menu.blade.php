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
        <section class="pt-4 pt-sm-5">
            <div class="container">
                <div class="row g-4 g-md-5 justify-content-between">
        
                    <!-- Content START -->
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <!-- Title -->
                        <h1>Remplissez le formulaire ci-dessous</h1>
                        <p class="mb-5">Complétez le formulaire ci-dessous pour découvrir notre menu personnalisé selon vos goûts.

                        </p>
                     
                        <!-- List -->
                        <ul class="list-group list-group-borderless mt-3 mb-sm-5">
                            <li class="list-group-item h6 fw-light d-flex"><i class="fas fa-check-circle fa-fw text-success me-2"></i>Une sélection raffinée de plats signatures</li>
                            <li class="list-group-item h6 fw-light d-flex"><i class="fas fa-check-circle fa-fw text-success me-2"></i>Des options végétariennes et sans gluten</li>
                            <li class="list-group-item h6 fw-light d-flex"><i class="fas fa-check-circle fa-fw text-success me-2"></i>Des recettes préparées avec des ingrédients frais et locaux</li>
                            <li class="list-group-item h6 fw-light d-flex"><i class="fas fa-check-circle fa-fw text-success me-2"></i>Une présentation soignée et élégante</li>
                            <li class="list-group-item h6 fw-light d-flex"><i class="fas fa-check-circle fa-fw text-success me-2"></i>Des suggestions de vins et cocktails en accord avec vos choix</li>
                            <li class="list-group-item h6 fw-light d-flex"><i class="fas fa-check-circle fa-fw text-success me-2"></i>Un service attentionné pour une expérience gastronomique mémorable</li>
                        </ul>
        
                        <!-- Client slider START -->
                        <div class="row justify-content-center">
                            <!-- Sub tittle -->
                        
                            <div class="col-md-12">
                                <!-- Slider START -->
                                <div class="tiny-slider arrow-round">
                                    <div class="tiny-slider-inner" data-arrow="false" data-dots="false" data-gutter="80" data-items="3" data-items-sm="2" data-autoplay="2000">
                                        <!-- Slide item START -->
                                        <div class="item"> <img class="grayscale" src="assets/images/client/coca-cola.svg" alt=""> </div>
                                        <div class="item"> <img class="grayscale" src="assets/images/client/android.svg" alt=""> </div>
                                        <div class="item"> <img class="grayscale" src="assets/images/client/envato.svg" alt=""> </div>
                                        <div class="item"> <img class="grayscale" src="assets/images/client/microsoft.svg" alt=""> </div>
                                        <div class="item"> <img class="grayscale" src="assets/images/client/netflix.svg" alt=""> </div>
                                        <div class="item"> <img class="grayscale" src="assets/images/client/google.svg" alt=""> </div>
                                        <div class="item"> <img class="grayscale" src="assets/images/client/linkedin.svg" alt=""> </div>
                                        <!-- Slide item END -->
                                    </div>
                                </div>
                                <!-- Slider END -->
                            </div>
                        </div>
                        <!-- Client slider END -->
        
                    </div>
                    <!-- Content END -->
        
                    <div class="col-lg-6 mb-5">
                        <div class="bg-dark rounded-3 p-4 p-sm-5 position-relative">
        
                            <!-- SVG decoration -->
                            <figure class="position-absolute top-0 start-50 translate-middle w-100 mt-n1">
                                <svg enable-background="new 0 0 420.7 53.6" version="1.1" viewBox="0 0 420.7 53.6" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                    <path class="fill-dark" d="m325.3 53.6v-48.4h-14.5l0.5 4v3.1l-1.6 3.2 0.2 0.1c3.7 0 6.8 3 6.8 6.8 0 3.7-3 6.8-6.8 6.8-3.7 0-6.8-3-6.8-6.8 0-1.7 0.7-3.3 1.7-4.5h-0.2l0.3-0.1c0.5-0.6 1.1-1 1.8-1.4l-1.3-2.7-2.6-0.5v-6.4l-1.8-1.6h-9.5v4h-2.5v1.8l1.4 1.7-1.4 1.4 3.4 1.4-4 0.6c2.3 1.1 4 3.4 4 6.2 0 3.7-3 6.8-6.8 6.8-3.7 0-6.8-3-6.8-6.8 0-3.2 2.2-5.9 5.2-6.6l-1.8-2.9 1.9-4.3-0.1-3.3h-17.3v2.5l-6.6 2.2v3.2l2 2.4h-0.1c3.3 0.5 5.8 3.3 5.8 6.7 0 3.7-3 6.8-6.8 6.8-3.7 0-6.8-3-6.8-6.8 0-1.7 0.6-3.2 1.7-4.4l-0.2-3.1-2.3-0.6v-5.4h1.6v-3.5h-10.6l-3.7 3.8v7.2l-0.9 0.2c2.1 1.2 3.5 3.3 3.5 5.9 0 3.7-3 6.8-6.8 6.8s-6.8-3-6.8-6.8c0-1.7 0.7-3.3 1.8-4.5v-10l-1.2-2.5h-15.6v1.6l-2.7 1.3-1.3 3.2 4 3.6v1.1c2.5 1 4.2 3.4 4.2 6.3 0 3.7-3 6.8-6.8 6.8-3.7 0-6.8-3-6.8-6.8 0-2.5 1.4-4.7 3.5-5.9l-1.7-0.3 0.2-1.2h2.4v-2.3l-9.4-7.4h-11.8l-0.9 0.7 1.6 3.2v3.1l-1.6 2.2v1l0.2 0.1c3.7 0 6.8 3 6.8 6.8 0 3.7-3 6.8-6.8 6.8-3.7 0-6.8-3-6.8-6.8 0-1.7 0.7-3.3 1.7-4.5h-0.2l0.3-0.1c0.5-0.6 1.1-1 1.8-1.4l-1.3-2.7-2.6-0.5v-6.4l-1.7-1.6h-9.5v4h-2.7v1.8l1.4 1.7-0.4 2.6-1.6 0.9c2.3 1.1 4 3.4 4 6.2 0 3.7-3 6.8-6.8 6.8-3.7 0-6.8-3-6.8-6.8 0-3.2 2.2-5.9 5.2-6.6l-1.8-2.9 1.9-4.3-0.1-3.3h-25.3v2.6l2.9 2.6v3l1.9 2.5c1.8 0.7 3.3 2 4 3.8 0.4 0.8 0.6 1.7 0.6 2.7 0 3.7-3 6.8-6.8 6.8-2.8 0-5.3-1.8-6.3-4.2-0.4-0.8-0.6-1.7-0.6-2.7 0-2 0.9-3.7 2.2-5h-0.2l0.2-0.8-2.4-1.6v-3l0.8-1.6 0.5-5.2h-10.7l-3.9 4v7.2l-0.9 0.2c2.1 1.2 3.5 3.3 3.5 5.9 0 3.7-3 6.8-6.8 6.8s-6.8-3-6.8-6.8c0-1.7 0.7-3.3 1.8-4.5v-10l-1.3-2.7h-15.5v1.7l-2.7 1.3-1.3 3.2 4 3.6v1.1c2.5 1 4.2 3.4 4.2 6.3 0 3.7-3 6.8-6.8 6.8-3.7 0-6.8-3-6.8-6.8 0-2.5 1.4-4.7 3.5-5.9l-1.7-0.3 0.2-1.2h2.4v-2.3l-9.6-7.6h-11.3l-1.3 0.9 1.6 3.2v3.1l-1.6 2.2v1l0.2 0.1c3.7 0 6.8 3 6.8 6.8s-3 6.8-6.8 6.8c-3.7 0-6.8-3-6.8-6.8 0-1.7 0.7-3.3 1.7-4.5h-0.2l0.3-0.1c0.5-0.6 1.1-1 1.8-1.4l-1.3-2.7-2.6-0.5v-6.3l-2-1.7h-9.3v4.3h-2.7v1.8l1.4 1.7-2 3.4c2.3 1.1 4 3.4 4 6.2 0 3.7-3 6.8-6.8 6.8-3.7 0-6.8-3-6.8-6.8 0-3.2 2.2-5.9 5.2-6.6l-1.6-2.8 1.9-4.3-0.2-3.7h-21.5l-1.6 1.1 1.6 3.2v3.1l-1.6 2.2v1l0.2 0.1c3.7 0 6.8 3 6.8 6.8 0 3.7-3 6.8-6.8 6.8-3.7 0-6.8-3-6.8-6.8 0-1.7 0.7-3.3 1.7-4.5h-0.2l0.3-0.1c0.5-0.6 1.1-1 1.8-1.4l-1.3-2.7-2.6-0.5v-6.4l-2.1-2h-7.6v48.3h325.3z"/>
                                    <path class="fill-dark" d="m420.8 50.9c0.2-0.7 0.3-1.4 0.4-2.1-0.5-3.7-0.4-7.7-0.2-11.7-0.2-2.6-0.4-5.2-0.4-7.7 0-7.6 0.7-15.2 0.6-22.8 0-0.5 0.1-0.9 0.2-1.3h-6l-3.9 4v7.2l-0.9 0.2c2.1 1.2 3.5 3.3 3.5 5.9 0 3.7-3 6.8-6.8 6.8s-6.8-3-6.8-6.8c0-1.7 0.7-3.3 1.8-4.5v-10l-1.3-2.9h-15.5v1.8l-2.7 1.3-1.3 3.2 4 3.6v1.1c2.5 1 4.2 3.4 4.2 6.3 0 3.7-3 6.8-6.8 6.8s-6.8-3-6.8-6.8c0-2.5 1.4-4.7 3.5-5.9l-1.7-0.3 0.2-1.2h2.4v-2.3l-9.6-7.6h-11.3l-1.3 0.9 1.6 3.2v3.1l-1.6 2.2v1l0.2 0.1c3.7 0 6.8 3 6.8 6.8s-3 6.8-6.8 6.8c-3.7 0-6.8-3-6.8-6.8 0-1.7 0.7-3.3 1.7-4.5h-0.2l0.3-0.1c0.5-0.6 1.1-1 1.8-1.4l-1.3-2.7-2.6-0.5v-6.3l-2-1.7h-9.3v4.3h-2.7v1.8l1.4 1.7-2 3.4c2.3 1.1 4 3.4 4 6.2 0 3.7-3 6.8-6.8 6.8-3.7 0-6.8-3-6.8-6.8 0-3.2 2.2-5.9 5.2-6.6l-1.8-2.9 1.9-4.3-0.2-3.7h-21.3l-1.6 1.1 1.6 3.2v3.1l-1.6 2.2v1l0.2 0.1c3.7 0 6.8 3 6.8 6.8 0 3.7-3 6.8-6.8 6.8-3.7 0-6.8-3-6.8-6.8 0-1.7 0.7-3.3 1.7-4.5h-0.2l0.3-0.1c0.5-0.6 1.1-1 1.8-1.4l-1.3-2.7-2.6-0.5v-6.3l-2.2-1.9h-7.6v48.3h128.2c-0.2-0.8-0.3-1.7-0.1-2.7z"/>
                                </svg>
                            </figure>
        
                            <!-- SVG decoration -->
                            <figure class="w-100 position-absolute top-100 start-50 translate-middle">
                                <svg enable-background="new 0 0 607.7 74.6" version="1.1" viewBox="0 0 607.7 74.6" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                        <path class="fill-dark" d="m594.7-522.8c-3.3-1.3-4.9 1.8-5.3 3.2 0-0.2 0.1-0.5 0.1-0.8-3.9 2.7-9.3-5.1-11.1 0.3 5.2-1.3-8.7 3.6-9.8-0.9-3.6-7.5-7.8-8.8-13.5-2.5-2.4-4.6-13.7-0.7-13-5.1-3.7 0.9-10.7-0.3-22.2-0.2-9.1 2.6-14.4 0-21.9 0-4.2 0.3-8.3-5.9-12.5 0.1-4.2-2.2-8.6 3.5-11.5-3-1.1 1.3-0.8-3-2.1-3.9-3.2 1.1-12.3-0.1-16.1-1.2-9-2.7-17.9-0.7-26.9 0-4.4 3.3-8.9 3.2-13.3 0-5.9-1.5-11.6-6.3-17.5-1.4-5.4-6-9.7 4.5-14.1 1.4-2.4 2.6-5.4-4.8-8 2.8-5.5-2.2-8.9-2.6-13.7 1.9-3 3.1-3.8 7.3-8 3.2-3.6-4.3-5.4-5.3-8.3 2.8-1.5 2.3-2.5 4.5-4.2 2.7-4.2-0.6-12.7-0.3-17 0-7.2-8-14.3-1.1-21.5 0-5.5-10.9-11-3.5-16.5 0-2.7-2.8-7 2.7-9.6 0.2-3-6.9-1.6-6-4.1-2.6-3.9-3.4-7.7-0.3-12.5-6.5-4.3-2.4-7.5-2.8-12-1.7-5.8-0.1-10.5-0.1-16.1-2.7-4.7-6.2-8 2.4-11.5-2.8-1.7 2.8-3 0.7-4.7-3.7-5.1-9.4-10.8-1.2-17.6-6.9-9.8-5.8-19.1 6.1-28.7 1.5-4 3.3-9.6 2.2-13.1 0.6-4.6-3.8-8.2 5.9-12.4 8.7-4.5-4.8-8.5-0.1-13.5 2.9-5.6 3.4-6.9 8.5-10.7 7.2-4.5 9-13.2 2.7-19.4 2.1-9.2-3-17.3 8.2-26.1-1.3-5.2-0.3-7.1 6.9-11.7-1.9-5.1 0.7-9.3-3.4-13.2-1-6.6 2.5-5.1-0.2-8.4 1.3-3.1 1.6-7.6 6.3-10.8 1.4-6.1 4-16.9 7.2-16.4 5.8-5.7 1.9-8.7-4.4-11.2-6.5 0-3-1-4-2.8-4.1-0.3 328.4-0.3 209.6-0.3 595.9 0.6 6.6 9.4-1.2 9.5 1.4 1.8 0 4.7 10.9 6.7 3.2 6.2 5.1 10.5 1.6 14.9 1.2 6.1 11.7 7.8 4.5 15 0.3 5-12.8 9.3-3.4 12.7-1.7 2-1.2 3.6 0.4 3.8-1.5 1 6 4 14.8 4.4-5.1-0.4-2.6-0.7-4.3-1-5.3 0.5 0.9 1.3 1.9 2.6 2.9 1 2.6 5.9 3.3 6.4-1.1 5.8-0.8 8.5-6.1 11.2-6.5 2.5-9.2 3.8 4 7.7-4.5 3.4-3.9 5.2-4.2 8.3-2.7 1.9-0.4 3.7-3.6 5.6-1.1 2.3-0.4 3.3-6.5 5.9-3.8 2.8 7.6 4.2-3.8 6.6 1.3 2.5 6.1 5.1 3.5 7.7 0.7 2.7 5.4 5-7.9 7.7 1.1 2.4-2.8 4.1-6.4 6.2 2.8 4.7-1.2 10 0.5 15.5 7.9 4.8 0.7 9.8 9.6 14.8 0.3 5 5.7 10-5 14.9-0.4 5.4-5.3 10.9 0.3 16.3 0 6 8.7 9.7 15.5 14.7 5.2 3.7 4.8 6.9 13.2 11.6 3.9 2 7.5 4.5 2.5 6.5 0.2 3.6-1.6 6.3-6.2 10-3.2 7.1 10.8 14.4-4.4 21.5 0.1 1.7 2.5 3.5-3.8 5.2 0.1 3.7 1.3 6.8 3.9 10.3-3 2.5-0.8 5.3-0.3 7.8 0 4.4-1.7 8.5-1.9 12.8-1.6 6 2.7 10.6-6.1 16.1 3.5 4.1 3.5 8.4 9.1 13 5.7 3.1 0.7 5.7-0.4 8.8 0.6 5.2 3.5 9 7.9 14.3 2.3 4.8-0.3 8.9-7 13.5 1.2 7.3 0.6 14.4 9.7 22 1.8 5.3 0.2 10.5-14.1 15.8 0.1 6.7 0.5 12.4 0.2 18.7-7.7 2.7 3.4 5.3 3.4 8-1.4 3.2 6.5 4.5-3 7.4-4.3 1.1-4.5 3.1 3.8 4.3-0.6 2.5 3 4.8-7.8 7.3-2.4 3.7 0.2 7.9-1.4 11.7-0.3 5.8-4.3 11.6 8.3 17.4 0 6.3-1.1 12 1.5 18.3-1.5 1.9-5.7 4.3-3.2 5.9-0.6 1.8-0.8 1-4.5 3.3-4 2.8-0.6 7.8-1.7 10.5 0.1 3.2-0.2 6.5 1.6 9.7 0 3.2 6.3 5.3 4.3 10.6 0.1 1.9 2.3 6.1-1.2 6.4-1.6 2.5 0.8 6.4 4.6 6.6 0.3 0.3-2.4 4.3 8.9 7 6.8 3.4 6.1 4.7-1 6.9 1.7 0 0.7 0.9 6.2 3.3 0.7-1.1 9.3 1-4.3 1.3 1.8 6.1 12.4 7.9 18.4 14.7 11.7 4.2 4.4 5-4.7 8.4 3.5 4.7-4.1 7.6-1 11.8 1.8l0.9 0.9v-597.7c-9.4-3.4-13.5-4.1-13 1.1z"/>
                                </svg>
                            </figure>
        
                            <!-- SVG decoration -->
                            <figure class="position-absolute top-0 end-0 mt-5 me-5">
                                <svg width="38.4px" height="42.4px">
                                    <path class="fill-info" d="M23.5,32.8c2.7-1.6,5.1-3.1,7.4-4.5c0.6-0.4,1.2-0.3,1.5,0.3c1.8,4.1,3.7,8.1,4.7,12.5c0,0.1,0,0.1,0,0.2 c-0.6,0.8-1.4,0.7-2.1,0.2c-2.8-1.8-5.5-3.8-8.4-5.4c-4-2.3-6.6-6-9.5-9.4c-2.7-3.2-5.4-6.6-8-9.9c-0.8-1-1.5-1.9-1.7-3.2 C12.7,20,17.9,26.6,23.5,32.8z M30.9,29.3c-2.3,1.3-4.5,2.4-6.4,4.3c2.3,1.5,4.4,2.9,6.5,4.3c0.9-0.9,1.7-1.7,2.6-2.4 C32.7,33.4,31.9,31.5,30.9,29.3z M35,40.5c0-1.6-0.5-2.8-1.2-4.1c-0.7,0.8-1.2,1.4-1.9,2.2C33,39.3,33.9,39.8,35,40.5z"></path>
                                    <path class="fill-info" d="M8,13c1.6-2,4.1-3,6-5c-0.4-0.4-0.8-0.8-1.1-1.1C11,8.3,9.3,9.4,7.6,10.7c-0.9,0.7-1.8,1.4-1.4,3.1 c-2.6-2.1-4.8-4-5.1-7.2C0.9,4.7,1.7,3.1,3.3,2c1.6-1.2,3.4-1.4,5.2-0.5c2.1,1.1,3.7,2.9,5.2,4.6c0.5,0.6,0.8,1.4,1.8,1.4 c0.2,0,0.4,0.3,0.5,0.4c4.8,6,9.7,12,13.6,18.6c0.2,0.3,0.3,0.7,0.5,1c-0.1,0.1-0.2,0.1-0.3,0.2c-0.4-0.5-0.9-0.9-1.2-1.4 c-1.9-2.6-3.6-5.4-5.5-7.9c-2.3-3-4.6-5.9-7-8.8c-1-1.2-1.1-1.2-2.4-0.1c-1.5,1.2-3.1,2.4-4.7,3.6c-0.2,0.2-0.5,0.2-0.8,0.3 C8.1,13.2,8,13.1,8,13z M12.1,5.8C10.7,4,9.5,3.1,8.2,2.4C6.5,1.6,4.9,1.7,3.4,3.1C2.2,4.2,1.7,5.6,2.2,7.3c0.5,1.8,1.5,3.2,3.1,4.3 C7.3,9.4,10.2,8.3,12.1,5.8z"></path>
                                </svg>
                            </figure>
        
                            <!-- SVG decoration -->
                            <div class="position-absolute bottom-0 end-0 mb-n5 w-100">
                                <svg enable-background="new 0 0 223 134"  xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                    <path class="fill-white" d="m216.6 78.7c-1.8-0.3-4.1 0.1-5.9 0.3-2.4 0.2-4.8 0.7-7.1 0.9-1.6 0.1-3.1 0.2-4.6 0.3-1.8 0.1-3.7 0.1-5.6 0.1-1.3-0.1-2.6-0.1-3.9-0.1-2.5 0-4.9-0.3-7.3-0.4-2.3-0.1-4.5 0.5-6.8 0.5-4 0.1-8.6-0.3-12.2 1.6-0.2 0.1-0.2 0.5-0.1 0.6 0.6 1.1 2.6 1.6 3.7 2 0.3 0.1 0.7 0.3 1 0.3 0.9 0.6 1.8 1.2 2.8 1.8 0.7 0.5 1.5 0.8 2.2 1.2 0.1 0.1 0.3 0.2 0.4 0.3 0.3 0.2 1 0.4 1.2 0.7 0.3 0.5 0 1.6-0.1 2.1-0.3 1.3-0.6 2.5-0.8 3.8-0.3 2.1-1 4.1-1.5 6-0.1 0.1-0.3 0.3-0.4 0.5-0.3 0.4 0.1 0.8 0.5 0.7v0.2c0 0.2 0.4 0.1 0.5 0 0.2-0.1 0.3-0.3 0.5-0.4s0.3-0.2 0.5-0.3c2-0.8 4-1.5 5.8-2.6 0.7 1.4 1.4 2.9 2 4.3 0.5 1.1 1.4 3.1 2.9 3.2 1.8 0.1 3.8-2.6 5.1-3.7 2.1-1.6 4.4-3.1 6.5-4.7 3.9-2.8 7.7-5.7 11.4-8.8 0.9-0.8 1.4-1.8 2.3-2.6 1-1 2.2-1.6 3.3-2.4 0.9-0.7 1.5-1.5 2.2-2.3 0.7-0.7 1.6-1.5 2.1-2.5-0.2-0.3-0.3-0.6-0.6-0.6zm-46.5 7 0.6 0.3 0.9 0.6c-0.6-0.3-1.1-0.6-1.5-0.9zm2.4 0.6c-0.7-0.7-1.2-1-2.1-1.4-1.2-0.5-2.6-1-3.8-1.4h-0.1c-0.3-0.2-0.7-0.4-1-0.5-0.5-0.3-1.5-0.4-0.9-0.9 0.2-0.1 0.7-0.1 0.9-0.2 1.2-0.3 2.4-0.5 3.7-0.7 2.6-0.1 5.2 0.1 7.5-0.1 1.2-0.1 2.3-0.2 3.5-0.3h1.9 0.1c0.7 0 1.4 0.1 2.2 0.1 1.9 0.2 3.8 0.1 5.7 0.2 4.3 0.1 8.4 0.1 12.7-0.3 2.1-0.2 4.2-0.5 6.3-0.7 1.2-0.1 2.3-0.2 3.5-0.2-0.5 0.1-1 0.3-1.5 0.3-1.8 0.3-3.5 0.6-5.2 0.9-3.4 0.4-6.8 0.9-10.1 1.6-3.4 0.7-6.8 1.5-10.3 2.2-3.7 0.7-7 2.4-10.7 3.3-0.1-0.1-0.2-0.1-0.3-0.1-0.6-0.9-1.2-1.1-2-1.8zm1.5 9.8c0.1-0.5 0.3-0.9 0.4-1.3 0.3-1.1 0.4-2.3 0.6-3.5 0.1-0.8 0.4-1.6 0.4-2.5 0 0 0-0.1 0.1-0.1 0.3-0.2 1.8-0.3 2-0.3 1.4-0.4 2.9-1 4.3-1.5 1.2-0.5 2.5-0.9 3.8-1.2 3.3-0.7 6.5-1.3 9.8-2.2 3.5-0.9 7.1-1.2 10.7-1.7 1.6-0.2 3.3-0.5 4.9-0.8 1-0.2 2-0.5 3.1-0.7-0.6 0.3-1.2 0.7-1.9 1-1.2 0.5-2.4 0.8-3.6 1.2-2.5 1.1-4.8 2.5-7.1 3.8-1 0.4-2 0.8-3.1 1.2-2.2 0.9-4.3 1.8-6.4 2.7-1.5 0.6-3.1 1.1-4.6 1.8-1.1 0.5-2.2 1-3.3 1.5-0.2 0.1-0.5 0.2-0.7 0.3-0.5 0.2-1 0.4-1.4 0.5-1.1 0.3-2.4 0.6-3.3 1.1-0.1-0.1-0.3-0.1-0.4 0.1-1.3 0.9-2.6 2-3.8 2.9-0.3 0.3-0.7 0.5-1 0.8 0.1-0.8 0.3-1.9 0.5-3.1zm4.7 1.9c-1.4 0.8-3.1 1.4-4.6 2 0.1-0.2 0.3-0.3 0.3-0.4 0.3-0.2 0.5-0.3 0.7-0.5 1-0.9 2.1-1.8 3.2-2.6 0.2 0.5 0.4 0.9 0.6 1.4-0.1 0.1-0.2 0.1-0.2 0.1zm34.9-16.3c-0.5 0.4-0.9 0.9-1.3 1.2l-0.4 0.4c-0.2 0.1-0.3 0.3-0.5 0.4-1 0.7-2 1.4-2.9 2.2-0.5 0.5-0.9 1-1.2 1.5-1 0.9-1.9 1.8-2.9 2.6-0.8 0.6-1.6 1.2-2.3 1.8-1.6 1.4-3.4 2.7-5.2 4-3.3 2.4-6.7 4.6-9.8 7.3-0.7 0.5-1.2 1-1.9 1.6-0.7 0.4-1.3 0.5-2-0.1-0.2-0.3-0.3-0.7-0.4-0.9-0.5-1-1-2-1.4-3-0.7-1.6-1.2-3.3-2.3-4.6 1.4-0.8 3.4-1 4.8-1.6s2.8-1.5 4.3-2l9.6-3.6c2.9-1.2 5.4-2.7 8.2-4.1 0.1-0.1 0.3-0.1 0.4-0.1 1.7-0.7 3.3-1.6 5-2.3 0.7-0.3 1.4-0.5 2.1-0.8 0.1-0.1 0.3-0.2 0.5-0.3l-0.4 0.4z"/>
                                    <path class="fill-white" d="m89.1 0c-0.5 0-1 0.1-1.4 0.3-0.3 0.1-0.5 0.3-0.8 0.3-0.3 0.1-0.6 0-0.9 0.1-0.1 0-0.3 0.2-0.3 0.3v0.2c-0.1 0.5 0.7 0.8 0.9 0.3 0.4-0.1 0.7 0 1.1-0.2 0.5-0.3 0.9-0.4 1.4-0.4 0.6 0 0.6-0.9 0-0.9z"/>
                                    <path class="fill-white" d="m77.1 0.9c-0.7 0-1.4-0.1-2.2-0.1-0.6 0-1.4 0-1.8 0.5s0.3 1.1 0.7 0.7c0.3-0.3 1.2-0.2 1.6-0.2 0.5 0 1.1 0.1 1.6 0.1 0.7-0.1 0.7-1 0.1-1z"/>
                                    <path class="fill-white" d="m65.5 1.5h-2.9c-0.6 0-0.6 0.9 0 0.9h2.9c0.6 0 0.6-0.9 0-0.9z"/>
                                    <path class="fill-white" d="m55.7 2.1c-0.9-0.3-2.7-0.7-3.1 0.5-0.1 0.6 0.7 0.8 0.9 0.3 0.1-0.4 1.7 0 2 0.1 0.5 0.2 0.7-0.6 0.2-0.9z"/>
                                    <path class="fill-white" d="m46.1 2.7c-0.7 0-1.3-0.1-2 0s-1.2 0.4-1.8 0.4-0.6 0.9 0 0.9 1.1-0.2 1.6-0.3c0.7-0.2 1.4-0.1 2.2-0.1 0.6 0.1 0.6-0.9 0-0.9z"/>
                                    <path class="fill-white" d="m35 4.5c-1 0.4-2.3 0.6-3.1 1.4-0.5 0.4 0.2 1 0.7 0.7 0.7-0.7 1.8-0.9 2.7-1.2 0.5-0.3 0.3-1.1-0.3-0.9z"/>
                                    <path class="fill-white" d="m24 9c-0.6 0.5-1.6 0.6-1.8 1.4-0.1 0.6 0.7 0.8 0.9 0.3 0.1-0.3 0.5-0.4 0.7-0.5 0.3-0.2 0.7-0.3 0.9-0.5 0.4-0.4-0.3-1.1-0.7-0.7z"/>
                                    <path class="fill-white" d="m15.7 15c-0.3 0.5-0.5 0.9-0.7 1.4-0.2 0.6-0.5 1.1-0.7 1.7-0.1 0.6 0.8 0.9 0.9 0.3 0.1-0.5 0.4-1 0.6-1.5s0.3-0.9 0.7-1.4-0.4-1-0.8-0.5z"/>
                                    <path class="fill-white" d="m10.6 23.6c-0.3-0.1-0.5 0.1-0.6 0.3-0.3 0.7-0.5 1.3-0.5 2 0 0.6 0.9 0.6 0.9 0 0-0.7 0.1-1.2 0.4-1.8 0.2-0.1 0-0.4-0.2-0.5z"/>
                                    <path class="fill-white" d="m6.4 36.1v2.6c0 0.6 0.9 0.6 0.9 0v-2.6c0-0.6-0.9-0.6-0.9 0z"/>
                                    <path class="fill-white" d="m7.1 45.8c-0.1-0.3 0-0.7 0-1 0-0.6-0.9-0.6-0.9 0 0 0.3-0.1 0.7 0 1 0.1 0.4 0.3 0.7 0.2 1-0.1 0.6 0.9 0.6 0.9 0 0.1-0.3-0.1-0.6-0.2-1z"/>
                                    <path class="fill-white" d="m8.7 57.4c-0.4-0.7-0.6-1.6-1.1-2.2-0.4-0.5-1 0.2-0.7 0.7 0.5 0.6 0.7 1.4 1 2 0.2 0.5 1.1 0 0.8-0.5z"/>
                                    <path class="fill-white" d="m13.3 63.9c-0.8-0.8-1.4-1.6-2.4-2.2-0.5-0.3-1 0.5-0.5 0.8 0.9 0.5 1.5 1.3 2.2 2 0.5 0.4 1.1-0.2 0.7-0.6z"/>
                                    <path class="fill-white" d="m20.9 69.2c-0.5-0.1-1-0.4-1.5-0.7-0.5-0.2-0.9-0.5-1.2-0.9-0.4-0.4-1 0.3-0.7 0.7 0.4 0.4 0.9 0.8 1.4 1 0.6 0.3 1.1 0.7 1.8 0.7 0.5 0.2 0.7-0.7 0.2-0.8z"/>
                                    <path class="fill-white" d="m31.1 72c-0.2 0-0.3-0.1-0.5-0.1-0.2-0.1-0.4 0-0.6-0.1-0.5-0.1-1-0.3-1.3-0.5-0.5-0.4-1.1 0.3-0.7 0.7 0.5 0.4 1 0.6 1.5 0.7 0.3 0.1 0.5 0 0.8 0.1s0.5 0.2 0.8 0.2c0.6-0.2 0.6-1.1 0-1z"/>
                                    <path class="fill-white" d="m36.2 74.5c-0.1 0-0.3-0.2-0.3-0.3-0.1-0.1-0.3-0.3-0.4-0.5-0.4-0.4-1 0.2-0.7 0.7 0.4 0.4 0.7 0.9 1.4 1 0.3 0 0.5-0.2 0.5-0.5-0.1-0.2-0.3-0.4-0.5-0.4z"/>
                                    <path class="fill-white" d="m46.7 80.6c-0.3 0-0.7-0.5-0.9-0.7-0.4-0.3-0.9-0.4-1.3-0.7-0.5-0.4-1.1 0.3-0.7 0.7 0.5 0.4 1.1 0.5 1.6 0.9 0.4 0.3 0.7 0.7 1.2 0.7 0.7 0.1 0.7-0.8 0.1-0.9z"/>
                                    <path class="fill-white" d="m54.3 86.1c-0.4-0.4-0.7-0.8-1-1.2-0.3-0.5-1.2 0-0.8 0.5 0.3 0.4 0.5 0.8 0.9 1.1 0.2 0.2 0.7 0.5 0.7 0.7 0.1 0.6 1 0.6 0.9 0-0.1-0.5-0.3-0.8-0.7-1.1z"/>
                                    <path class="fill-white" d="m60.3 93.1c0.1 0 0-0.1-0.1-0.1-0.1-0.1-0.1-0.1-0.1-0.2-0.1-0.2-0.3-0.3-0.5-0.5-0.3-0.3-0.7-0.7-0.7-1.2-0.1-0.6-1-0.3-0.9 0.3s0.5 1.1 0.9 1.5c0.2 0.2 0.4 0.4 0.5 0.7s0.3 0.4 0.6 0.5c0.6 0 0.9-0.8 0.3-1z"/>
                                    <path class="fill-white" d="m64.9 100.9v-0.9c0-0.6-0.9-0.6-0.9 0 0 0.5-0.1 0.9 0.1 1.4 0.1 0.1 0.1 0.3 0.3 0.3h0.2c0.3 0.1 0.5-0.1 0.6-0.3 0-0.2-0.2-0.4-0.3-0.5z"/>
                                    <path class="fill-white" d="m66.5 110.5c-0.5-0.4 0.1-1.7 0.1-2.2 0.1-0.6-0.9-0.6-0.9 0-0.1 0.9-0.7 2.2 0.1 2.9 0.5 0.3 1.1-0.3 0.7-0.7z"/>
                                    <path class="fill-white" d="m64.2 116.7c-0.4 0.7-0.8 1.2-0.9 2-0.1 0.6 0.8 0.9 0.9 0.3 0.1-0.7 0.5-1.2 0.8-1.8 0.3-0.5-0.4-1-0.8-0.5z"/>
                                    <path class="fill-white" d="m59.6 126.6c-0.1-0.3-0.4-0.3-0.7-0.2s-0.6 0.3-0.9 0.4-0.4 0.3-0.3 0.6 0.3 0.3 0.6 0.3c0.4-0.1 0.8-0.3 1.2-0.5 0.2 0 0.2-0.4 0.1-0.6z"/>
                                    <path class="fill-white" d="m48.5 127.2c-0.8 0.1-1.6 0.2-2.3 0.2-0.6 0-0.6 0.9 0 0.9 0.8 0 1.6-0.1 2.3-0.2 0.6-0.1 0.6-1 0-0.9z"/>
                                    <path class="fill-white" d="m40.9 126.6c-0.3-0.3-0.5-0.5-0.8-0.7-0.1-0.1-0.3-0.1-0.5-0.2s-0.3-0.1-0.4-0.1c-0.4-0.5-1 0.2-0.7 0.7 0.3 0.3 0.6 0.3 0.9 0.4s0.6 0.4 0.8 0.7c0.4 0.3 1.1-0.3 0.7-0.8z"/>
                                    <path class="fill-white" d="m38.9 127.3c-0.3-0.5-0.7-0.9-1.1-1.4-0.4-0.4-1 0.2-0.7 0.7 0.4 0.4 0.7 0.7 1 1.2s1.1 0 0.8-0.5z"/>
                                    <path class="fill-white" d="m33.7 119.8c-0.1-0.1-0.3-0.3-0.3-0.5 0-0.6-0.9-0.6-0.9 0 0 0.5 0.3 0.9 0.6 1.2 0.4 0.3 1.1-0.3 0.6-0.7z"/>
                                    <path class="fill-white" d="m34.2 110c0 0.1-0.3 0.3-0.3 0.3-0.1 0.1-0.3 0.3-0.4 0.5-0.2 0.4-0.3 0.8-0.3 1.2-0.1 0.6 0.9 0.6 0.9 0 0.1-0.5 0.2-0.9 0.5-1.2s0.5-0.5 0.5-1c0.1-0.4-0.8-0.4-0.9 0.2z"/>
                                    <path class="fill-white" d="m40.8 103.2c-0.5 0.1-0.9 0.5-1.3 0.7-0.5 0.3-0.8 0.7-1 1.2-0.3 0.5 0.5 1 0.8 0.5 0.2-0.4 0.5-0.7 0.8-0.9 0.4-0.3 0.8-0.6 1.2-0.7 0.1 0 0.3-0.2 0.3-0.3s0-0.1 0.1-0.2c0.1-0.5-0.7-0.8-0.9-0.3z"/>
                                    <path class="fill-white" d="m49.4 100.3c-0.7-0.1-1.4 0.1-2 0.3-0.6 0.1-1 0.3-1.4 0.7-0.4 0.5 0.3 1.1 0.7 0.7s0.8-0.5 1.3-0.5c0.5-0.1 1-0.2 1.6-0.2 0.4-0.1 0.4-1-0.2-1z"/>
                                    <path class="fill-white" d="m57 100.4c-0.8-0.6-1.7-0.7-2.6-0.8-0.6 0-0.6 0.9 0 0.9 0.7 0 1.4 0.1 2 0.5 0.4 0.4 1-0.3 0.6-0.6z"/>
                                    <path class="fill-white" d="m66.5 103.9c-1.1-0.3-2.1-0.9-3.3-0.9-0.6 0.1-0.6 1 0 0.9 1.1-0.1 2 0.6 3 0.9 0.6 0 0.8-0.8 0.3-0.9z"/>
                                    <path class="fill-white" d="m79.7 109.4c-0.6-0.7-1.1-1.4-1.8-2-0.8-0.6-1.6-0.9-2.5-1.3-0.5-0.3-1 0.5-0.5 0.8 0.8 0.4 1.6 0.7 2.3 1.1 0.7 0.5 1.2 1.3 1.8 2 0.5 0.5 1.1-0.1 0.7-0.6z"/>
                                    <path class="fill-white" d="m87 114.4c-0.6-0.1-1.2-0.7-1.6-1.1s-1 0.2-0.7 0.7c0.6 0.6 1.3 1.3 2.2 1.4 0.7 0 0.7-1 0.1-1z"/>
                                    <path class="fill-white" d="m97.7 120.6c-0.8-0.8-1.6-1.4-2.6-1.8-0.9-0.4-1.6-0.9-2.6-0.9-0.6 0-0.6 0.9 0 0.9 1.6 0 3.5 1.4 4.5 2.4 0.5 0.5 1.1-0.1 0.7-0.6z"/>
                                    <path class="fill-white" d="m108.9 123.7c-0.5 0-1-0.3-1.5-0.4-0.4-0.1-1 0.1-1.4-0.1-0.5-0.4-1 0.3-0.7 0.7 0.5 0.5 1 0.4 1.6 0.4 0.7 0 1.2 0.5 1.9 0.4 0.7-0.2 0.8-1.1 0.1-1z"/>
                                    <path class="fill-white" d="m118.2 126c-0.5 0-1 0.1-1.5 0s-0.9-0.3-1.3-0.4c-0.5-0.2-0.8 0.7-0.3 0.9 1 0.4 2 0.5 3.1 0.5 0.6-0.1 0.6-1 0-1z"/>
                                    <path class="fill-white" d="m125.5 124c-0.5 0.5-1 0.8-1.7 0.9-0.6 0.1-0.3 1 0.3 0.9 0.8-0.2 1.5-0.6 2.1-1.2 0.4-0.4-0.3-1-0.7-0.6z"/>
                                    <path class="fill-white" d="m128.7 117c-0.5 0.5-0.4 1.2-0.4 1.8-0.1 0.8-0.6 1.4-0.6 2.3 0 0.6 0.9 0.6 0.9 0 0-0.7 0.4-1.2 0.5-1.8 0.1-0.5-0.1-1.3 0.2-1.6 0.4-0.4-0.2-1.1-0.6-0.7z"/>
                                    <path class="fill-white" d="m130.1 112c-0.3-0.5-0.1-1.2-0.3-1.8-0.1-0.3-0.1-0.7-0.3-0.9-0.1-0.3-0.3-0.6-0.4-1-0.1-0.6-1-0.3-0.9 0.3 0.1 0.3 0.3 0.6 0.4 0.9 0.1 0.4 0.3 0.8 0.3 1.2 0.2 0.7 0.1 1.2 0.4 1.8 0.2 0.6 1 0.1 0.8-0.5z"/>
                                    <path class="fill-white" d="m127.7 104.9c-0.2-0.5-0.4-1.1-0.3-1.6 0.1-0.6-0.9-0.6-0.9 0-0.1 0.7 0.2 1.5 0.5 2.2 0.2 0.4 1-0.1 0.7-0.6z"/>
                                    <path class="fill-white" d="m131 96.8c-0.3 0.3-0.7 0.3-0.9 0.5-0.4 0.2-0.7 0.5-1 0.9-0.4 0.4 0.3 1 0.7 0.7 0.3-0.3 0.6-0.6 0.9-0.8 0.3-0.1 0.7-0.3 1-0.5 0.4-0.5-0.3-1.2-0.7-0.8z"/>
                                    <path class="fill-white" d="m136.4 96c-0.6 0-0.6 0.9 0 0.9 0.5 0 0.9-0.1 1.4-0.1 0.3 0 0.6 0 0.9 0.1 0.1 0 0.2 0.1 0.3 0.1h0.1c0.1 0.5 0.9 0.5 0.9-0.1-0.1-1.4-2.9-0.9-3.6-0.9z"/>
                                    <path class="fill-white" d="m144.9 99.2c-0.5-0.3-1 0.5-0.5 0.8 0.7 0.5 2.5 1.1 2.3 2.2-0.1 0.6 0.8 0.9 0.9 0.3 0.3-1.7-1.6-2.5-2.7-3.3z"/>
                                    <path class="fill-white" d="m156.6 106c-1.5-0.1-2.9-0.5-4.3-1-0.5-0.2-0.8 0.7-0.3 0.9 1.4 0.5 2.9 1 4.6 1 0.6 0 0.6-0.9 0-0.9z"/>
                                    <path class="fill-white" d="m163 104.9c-0.4 0-0.7-0.1-1.1 0-0.3 0.1-0.7 0.3-1 0.2-0.6-0.1-0.6 0.9 0 0.9 0.3 0 0.7-0.1 1-0.2 0.4-0.1 0.8 0 1.1 0 0.6 0 0.6-0.9 0-0.9z"/>
                                    <path class="fill-white" d="m168.1 103.9c0.5-0.1 0.5-0.9-0.1-0.9-0.5 0-0.9 0.4-1.2 0.7-0.1 0.2-0.3 0.4-0.3 0.7s0.3 0.5 0.5 0.6c0.3 0.1 0.5-0.1 0.6-0.3 0-0.1 0-0.3-0.1-0.4l0.2-0.2c0.1-0.1 0.1-0.1 0.2-0.1 0.1-0.1 0.1-0.1 0.2-0.1z"/>
                                </svg>
                            </div>
        
                            <!-- Title -->
                            <h3 class="mb-3 text-white">Profitez et ajouter des menu personnalisés</h3>
                            
                            <!-- Form START -->
                            <form class="row g-3 position-relative" action="{{ route('menus.store') }}" method="POST">
                                @csrf
                                <div class="col-12 mb-3 bg-dark-input"> 
                                    <label for="restaurant_id" class="form-label">Sélectionner le Restaurant</label>
            <select class="form-select" id="restaurant_id" name="restaurant_id" required>
                <option value="">Choisissez un restaurant</option>
                @foreach($restaurants as $restaurant)
                    <option    value="{{ $restaurant->id }}">{{ $restaurant->Restorant }}</option>
                @endforeach
            </select>
                                </div>
        
                               
                             <div class="row">
                                <div class="col-md-6 bg-dark-input"> 
                                    <label class="form-label text-white text-opacity-50" for="nom_plat">Nom du Plat <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control"   id="nom_plat" name="nom_plat" required>
                                </div>
         
                                <div class="col-md-6 bg-dark-input"> 
                                    <label class="form-label text-white text-opacity-50">Prix <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control"  id="prix" name="prix" step="0.01" required>
                                </div>
                             </div>
        
                              
                                <div class="col-12 bg-dark-input"> 
                                    <label class="form-label text-white text-opacity-50">Description <span class="text-danger">*</span></label>
                                    <textarea type="text" class="form-control" id="description" name="description"></textarea>
                                </div>
        
                                
                                <!-- Button -->
                                <div class="col-12 bg-dark-input">
                                    <div class="d-grid">
                                        <button class="btn btn-lg btn-primary" type="submit">Ajouter Menu</button>
                                    </div>
                                  
                                </div>
                            </form>
                            <!-- Form END -->
                        </div>
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