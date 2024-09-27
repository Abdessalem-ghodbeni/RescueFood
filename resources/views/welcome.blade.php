<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from eduport.webestica.com/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Nov 2023 13:10:27 GMT -->
<head>
	<title>RescueFood</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Webestica.com">
	<meta name="description" content="Eduport- LMS, Education and Course Theme">

	<!-- Dark mode -->
	<script>
		const storedTheme = localStorage.getItem('theme')
 
		const getPreferredTheme = () => {
			if (storedTheme) {
				return storedTheme
			}
			return window.matchMedia('(prefers-color-scheme: light)').matches ? 'light' : 'light'
		}

		const setTheme = function (theme) {
			if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
				document.documentElement.setAttribute('data-bs-theme', 'dark')
			} else {
				document.documentElement.setAttribute('data-bs-theme', theme)
			}
		}

		setTheme(getPreferredTheme())

		window.addEventListener('DOMContentLoaded', () => {
		    var el = document.querySelector('.theme-icon-active');
			if(el != 'undefined' && el != null) {
				const showActiveTheme = theme => {
				const activeThemeIcon = document.querySelector('.theme-icon-active use')
				const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
				const svgOfActiveBtn = btnToActive.querySelector('.mode-switch use').getAttribute('href')

				document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
					element.classList.remove('active')
				})

				btnToActive.classList.add('active')
				activeThemeIcon.setAttribute('href', svgOfActiveBtn)
			}

			window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
				if (storedTheme !== 'light' || storedTheme !== 'dark') {
					setTheme(getPreferredTheme())
				}
			})

			showActiveTheme(getPreferredTheme())

			document.querySelectorAll('[data-bs-theme-value]')
				.forEach(toggle => {
					toggle.addEventListener('click', () => {
						const theme = toggle.getAttribute('data-bs-theme-value')
						localStorage.setItem('theme', theme)
						setTheme(theme)
						showActiveTheme(theme)
					})
				})

			}
		})
		
	</script> 

	<!-- Favicon -->
	<link rel="shortcut icon" href="{{asset('layoutsCss/images/az.png')}}">

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&amp;family=Roboto:wght@400;500;700&amp;display=swap">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('restorantCss/vendor/font-awesome/css/all.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('restorantCss/vendor/bootstrap-icons/bootstrap-icons.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('restorantCss/vendor/tiny-slider/tiny-slider.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('restorantCss/vendor/glightbox/css/glightbox.css')}}">

	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('restorantCss/css/style.css')}}">

</head>

<body>

<!-- Top header START -->
<div
class="alert alert-warning py-2 m-0 bg-primary border-0 rounded-0 alert-dismissible fade show text-center overflow-hidden"
role="alert"
>
<p class="text-white m-0">
  NOW AND ALWAYS, WE STAND WITH THE PEOPLE OF PALESTINE! 
  <img
	src="{{asset('layoutsCss/images/palastine.jpeg')}}" style="width: 35px; height:auto"
	 
  />
  <img
  src="{{asset('layoutsCss/images/palastine.jpeg')}}" style="width: 35px; height:auto"
   
/>
<img
src="{{asset('layoutsCss/images/palastine.jpeg')}}" style="width: 35px; height:auto"
 
/>
</p>
<button
  type="button"
  className="btn-close btn-close-white opacity-9 p-3"
  data-bs-dismiss="alert"
  aria-label="Close"/>
</div>

<header class="navbar-light header-static navbar-sticky">
	<!-- Logo Nav START -->
	<nav class="navbar navbar-expand-xl  d-flex justify-content-end me-5 my-2">
        <div class="">
            <!-- Ajouter d'autres éléments de navigation ici si nécessaire -->
            <div class=" d-flex justify-content-end">
               <div> <a href="{{ route('login') }}" class="btn btn-outline-primary mx-2">Login</a> </div>
              <div> <a href="{{ route('register') }}" class="btn btn-outline-primary mx-2">Register</a></div> 
            </div>
        </div>
    </nav>
    
</header>

<main>

<!-- =======================
Main Banner START -->
<section class="pt-0 position-relative overflow-hidden h-700px h-sm-600px h-lg-700px rounded-top-4 mx-2 mx-md-4" style="background-image:url(layoutsCss/images/RescueFood.webp); background-position: center; background-size: cover;">
	<div class="bg-overlay bg-dark opacity-5"></div>
	<!-- SVG decoration for curve -->
	<figure class="position-absolute bottom-0 left-0 w-100 d-md-block mb-n3 z-index-9">
		<svg class="fill-body" width="100%" height="150" viewBox="0 0 500 150" preserveAspectRatio="none">
			<path d="M0,150 L0,40 Q250,150 500,40 L580,150 Z"></path>
		</svg>
	</figure>
	<!-- SVG decoration -->
	<figure class="position-absolute top-0 start-50 translate-middle-x z-index-9 mt-5">
		<svg  width="29px" height="29px">
			<path class="fill-orange" d="M29.004,14.502 C29.004,22.512 22.511,29.004 14.502,29.004 C6.492,29.004 -0.001,22.512 -0.001,14.502 C-0.001,6.492 6.492,-0.001 14.502,-0.001 C22.511,-0.001 29.004,6.492 29.004,14.502 Z"></path>
		</svg>
	</figure>
		
	<div class="container z-index-9 position-relative">
		<!-- SVG decoration -->
		<figure class="position-absolute bottom-0 end-0 z-index-9 ms-5 mb-5">
			<svg width="23px" height="23px">
			<path class="fill-primary" d="M23.003,11.501 C23.003,17.854 17.853,23.003 11.501,23.003 C5.149,23.003 -0.001,17.854 -0.001,11.501 C-0.001,5.149 5.149,-0.000 11.501,-0.000 C17.853,-0.000 23.003,5.149 23.003,11.501 Z"></path>
			</svg>
		</figure>

		<div class="row py-0 py-md-5 align-items-center text-center text-sm-start">
			<div class="col-sm-10 col-lg-10 col-xl-6 all-text-white my-5 mt-md-0">
				<div class="py-0 py-md-5 my-5">
					
					<!-- Badge with content -->
					<div class="d-inline-block bg-white px-3 py-2 rounded-pill mb-3">
						<p class="mb-0 text-dark"><span class="badge text-bg-success rounded-pill me-1">New</span>	 RescueFood, </p>
					</div>
					
					<!-- Title -->
					<h1 class="text-white display-5">Optimisez <span class="text-warning">la distribution</span></h1>
					<p class="text-white">Explorez des solutions innovantes pour éviter le gaspillage alimentaire. Nos outils vous permettent de connecter les donateurs et les bénéficiaires de manière rapide et efficace.</p>
					
					<div class="d-sm-flex align-items-center mt-4">
						<!-- Button -->
						<a href="#" class="btn btn-primary me-2 mb-4 mb-sm-0">Commencer</a>
						<!-- Video button -->
						<div class="d-flex align-items-center justify-content-center py-2 ms-0 ms-sm-4">
							<a data-glightbox data-gallery="office-tour" href="https://youtu.be/qVv_Et15tZg?si=FnjqKWr9r5bg51_h" class="btn btn-round btn-white-shadow text-danger me-7 mb-0 overflow-visible"> 
								<i class="fas fa-play"></i>
								<h6 class="mb-0 ms-3 text-white fw-normal position-absolute start-100 top-50 translate-middle-y">Regarder video</h6>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Main Banner END -->

<!-- =======================
Client START -->
<section class="pb-0 pb-md-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<!-- Slider START -->
				<div class="tiny-slider">
					<div class="tiny-slider-inner" data-arrow="false" data-dots="false" data-gutter="80" data-items-xl="6" data-items-lg="5" data-items-md="4" data-items-sm="3" data-items-xs="2" data-autoplay="2000">
						<!-- Slide item START -->
						<div class="item"> <img class="grayscale" src="{{asset('layoutsCss/images/rs1.jpeg')}}" alt="client-logo"> </div>
						<div class="item"> <img class="grayscale" src="{{asset('layoutsCss/images/rs2.jpeg')}}" alt="client-logo"> </div>
						<div class="item"> <img class="grayscale" src="{{asset('layoutsCss/images/rs3.jpeg')}}" alt="client-logo"> </div>
						<div class="item"> <img class="grayscale" src="{{asset('layoutsCss/images/rs4.jpeg')}}" alt="client-logo"> </div>
						<div class="item"> <img class="grayscale" src="{{asset('layoutsCss/images/rs5.jpeg')}}" alt="client-logo"> </div>
						<div class="item"> <img class="grayscale" src="{{asset('layoutsCss/images/rs6.jpeg')}}" alt="client-logo"> </div>
					 
						<!-- Slide item END --6
					</div6
				</div6
				<!-- 6lider END -->
			</div>
		</div>
	</div>
</section>
<!-- =======================
Client END -->

<!-- =======================
About START -->
<section>
	<div class="container">
		<div class="row g-4 align-items-center">
			<div class="col-lg-5">
				<!-- Title -->
				<h2>En savoir plus sur nous, les coulisses de  <span class="text-warning">RescueFood</span> </h2>
				<!-- Image -->
				<img src="assets/images/about/03.jpg" class="rounded-2" alt="">
			</div>
			<div class="col-lg-7">
				<div class="row g-4">
					<!-- Item -->
					<div class="col-sm-6">
						<div class="icon-lg bg-orange bg-opacity-10 text-orange rounded-2"><i class="fas fa-user-tie fs-5"></i></div>
						<h5 class="mt-2"> Apprenez avec des Experts</h5>
						<p class="mb-0">Profitez de l'expertise de professionnels dans la lutte contre le gaspillage alimentaire. Nos formateurs vous guident à travers des stratégies efficaces pour optimiser la distribution des surplus alimentaires et aider les plus démunis</p>
					</div>
					<!-- Item -->
					<div class="col-sm-6">
						<div class="icon-lg bg-info bg-opacity-10 text-info rounded-2"><i class="fas fa-book fs-5"></i></div>
						<h5 class="mt-2">  à Tout Moment</h5>
						<p class="mb-0">Avec RescueFood, accédez à des ressources d'apprentissage à tout moment. Que vous soyez bénévole ou gestionnaire, nos outils vous permettent d'acquérir les compétences nécessaires pour maximiser votre impact dans la réduction du gaspillage alimentaire</p>
					</div>
					<!-- Item -->
					<div class="col-sm-12">
						<div class="icon-lg bg-success bg-opacity-10 text-success rounded-2"><i class="bi bi-alarm-fill fs-5"></i></div>
						<h5 class="mt-2">Normes Industrielles</h5>
						<p class="mb-0">Nous respectons les normes les plus strictes en matière de gestion des ressources alimentaires. Grâce à RescueFood, soyez sûr d'appliquer les meilleures pratiques reconnues dans le secteur pour assurer une redistribution efficace et responsable.</p>
					</div>
					<!-- Item -->
				 
				</div>
			</div>
		</div>
	</div>
</section>
 
<section class="bg-light position-relative">
	<!-- SVG decoration -->
	<figure class="position-absolute bottom-0 start-0 d-none d-lg-block">
		<svg width="822.2px" height="301.9px" viewBox="0 0 822.2 301.9"	>
			<path class="fill-warning" d="M752.5,51.9c-4.5,3.9-8.9,7.8-13.4,11.8c-51.5,45.3-104.8,92.2-171.7,101.4c-39.9,5.5-80.2-3.4-119.2-12.1 c-32.3-7.2-65.6-14.6-98.9-13.9c-66.5,1.3-128.9,35.2-175.7,64.6c-11.9,7.5-23.9,15.3-35.5,22.8c-40.5,26.4-82.5,53.8-128.4,70.7 c-2.1,0.8-4.2,1.5-6.2,2.2L0,301.9c3.3-1.1,6.7-2.3,10.2-3.5c46.1-17,88.1-44.4,128.7-70.9c11.6-7.6,23.6-15.4,35.4-22.8 c46.7-29.3,108.9-63.1,175.1-64.4c33.1-0.6,66.4,6.8,98.6,13.9c39.1,8.7,79.6,17.7,119.7,12.1C634.8,157,688.3,110,740,64.6 c4.5-3.9,9-7.9,13.4-11.8C773.8,35,797,16.4,822.2,1l-0.7-1C796.2,15.4,773,34,752.5,51.9z"/>
		</svg>
	</figure>

	<!-- SVG decoration -->
	<figure class="position-absolute top-0 end-0">
		<svg width="822.2px" height="301.9px" viewBox="0 0 822.2 301.9"	>
			<path class="fill-primary" d="M752.5,51.9c-4.5,3.9-8.9,7.8-13.4,11.8c-51.5,45.3-104.8,92.2-171.7,101.4c-39.9,5.5-80.2-3.4-119.2-12.1 c-32.3-7.2-65.6-14.6-98.9-13.9c-66.5,1.3-128.9,35.2-175.7,64.6c-11.9,7.5-23.9,15.3-35.5,22.8c-40.5,26.4-82.5,53.8-128.4,70.7 c-2.1,0.8-4.2,1.5-6.2,2.2L0,301.9c3.3-1.1,6.7-2.3,10.2-3.5c46.1-17,88.1-44.4,128.7-70.9c11.6-7.6,23.6-15.4,35.4-22.8 c46.7-29.3,108.9-63.1,175.1-64.4c33.1-0.6,66.4,6.8,98.6,13.9c39.1,8.7,79.6,17.7,119.7,12.1C634.8,157,688.3,110,740,64.6 c4.5-3.9,9-7.9,13.4-11.8C773.8,35,797,16.4,822.2,1l-0.7-1C796.2,15.4,773,34,752.5,51.9z"/>
		</svg>
	</figure>
	
	<!-- SVG decoration -->
	<figure class="position-absolute bottom-0 start-50 translate-middle-x ms-n9 mb-5">
		<svg width="23px" height="23px">
			<path class="fill-primary" d="M23.003,11.501 C23.003,17.854 17.853,23.003 11.501,23.003 C5.149,23.003 -0.001,17.854 -0.001,11.501 C-0.001,5.149 5.149,-0.000 11.501,-0.000 C17.853,-0.000 23.003,5.149 23.003,11.501 Z"></path>
		</svg>
	</figure>

	<!-- SVG decoration -->
	<figure class="position-absolute bottom-0 end-0 me-5 mb-5">
		<svg width="22px" height="22px">
			<path class="fill-warning" d="M22.003,11.001 C22.003,17.078 17.077,22.003 11.001,22.003 C4.925,22.003 -0.001,17.078 -0.001,11.001 C-0.001,4.925 4.925,-0.000 11.001,-0.000 C17.077,-0.000 22.003,4.925 22.003,11.001 Z"></path>
		</svg>
	</figure>

	<div class="container position-relative">
		<div class="row justify-content-between align-items-center my-5">

			<div class="col-lg-5 position-relative">
				<!-- SVG decoration -->
				<figure class="position-absolute top-0 start-0 translate-middle mt-n5">
					<svg width="29px" height="29px">
						<path class="fill-orange" d="M29.004,14.502 C29.004,22.512 22.511,29.004 14.502,29.004 C6.492,29.004 -0.001,22.512 -0.001,14.502 C-0.001,6.492 6.492,-0.001 14.502,-0.001 C22.511,-0.001 29.004,6.492 29.004,14.502 Z"></path>
						</svg>
				</figure>

				<!-- Title -->
				<h2 class="h1">RescueFood : Ensemble contre le Gaspillage Alimentaire</h2>
			</div>

			<div class="col-lg-5 position-relative mt-4 mt-lg-0">
				<!-- Image -->
				<img src="{{asset('layoutsCss/images/az.png')}}" class="border w-100 border-5 border-white rounded-2" alt="">
				<div class="position-absolute top-50 start-50 translate-middle">
					<!-- Video link -->
					<a href="https://youtu.be/WFzmF7hYucc?si=FSmqW5M59AHrwTxp" class="btn text-danger btn-round btn-white-shadow btn-lg mb-0" data-glightbox data-gallery="video-tour">
						<i class="fas fa-play"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Video divider END -->
<section class="pb-0 pb-md-5">
	<div class="container">
		<!-- Title -->
		<div class="row mb-4">
			<h2 class="mb-0">Top  <span class="text-warning">Donors</span> Associations & Restaurants</h2>
		</div>
		<div class="row">
			<!-- Slider START -->
			<div class="tiny-slider arrow-round arrow-creative arrow-blur arrow-hover">
				<div class="tiny-slider-inner" data-autoplay="false" data-arrow="true" data-dots="false" data-items-xl="3" data-items-md="2" data-items-xs="1">
					
					<!-- Card item START -->
					@if(isset($classement) && $classement->isNotEmpty())
                     @foreach($classement as $key => $don)
					<div class="card bg-transparent">
						<div class="position-relative">
							<!-- Image -->
							<img src="assets/images/courses/4by3/21.jpg" class="card-img" alt="course image">
							<!-- Overlay -->
							<div class="card-img-overlay d-flex align-items-start flex-column p-3">
								<div class="w-100 mt-auto">
									<!-- Category -->
									<a href="#" class="badge text-bg-white fs-6 rounded-1"><i class="fa fa-trophy text-orange me-2"></i>{{$key + 1}} - Total Donations :  {{ $don->total_dons }}</a>
								</div>
							</div>
						</div>

						<!-- Card body -->
						<div class="card-body px-2">
							<!-- Title -->
							<h5 class="card-title"><a href="#">{{ $don->restaurant->Restorant }}</a></h5>
							<!-- Address and button -->
							<div class="d-flex justify-content-between align-items-center">
								<Address class="mb-0"><i class="fas fa-map-marker-alt me-2"></i>{{ $don->restaurant->localisation }} | Specialite : {{ $don->restaurant->specialite }}  </Address>
								<a href="#" class="btn btn-sm btn-primary-soft mb-0">See More</a>
							</div>
						</div>
					</div>
					@endforeach
            @else
                <p>No donations found.</p>
            @endif

			
					<!-- Card item END -->

					

						

				</div>
			</div>
			<!-- Slider END -->
		</div>
	</div>
</section>
 
<section class="mb-n9 position-relative z-index-9">
	<div class="container">
		<div class="row">
			<div class="col-11 col-md-10 mx-auto">
				<div class="bg-warning rounded-3 shadow p-3 p-sm-4 position-relative overflow-hidden">
					<!-- SVG decoration -->
					<figure class="position-absolute top-100 start-100 translate-middle mt-n6 ms-n5">
						<svg width="211px" height="211px">
							<path class="fill-white opacity-4" d="M210.030,105.011 C210.030,163.014 163.010,210.029 105.012,210.029 C47.013,210.029 -0.005,163.014 -0.005,105.011 C-0.005,47.015 47.013,-0.004 105.012,-0.004 C163.010,-0.004 210.030,47.015 210.030,105.011 Z"></path>
						</svg>
					</figure>
					<!-- SVG decoration -->
					<figure class="position-absolute top-100 start-0 translate-middle mt-n6 ms-5">
						<svg width="141px" height="141px">
							<path class="fill-white opacity-4" d="M140.520,70.258 C140.520,109.064 109.062,140.519 70.258,140.519 C31.454,140.519 -0.004,109.064 -0.004,70.258 C-0.004,31.455 31.454,-0.003 70.258,-0.003 C109.062,-0.003 140.520,31.455 140.520,70.258 Z"></path>
						</svg>
					</figure>
					<!-- SVG decoration -->
					<figure class="position-absolute top-0 start-50 mt-4 ms-n9">
						<svg width="41px" height="41px">
							<path class="fill-white opacity-4" d="M40.531,20.265 C40.531,31.458 31.457,40.531 20.265,40.531 C9.072,40.531 -0.001,31.458 -0.001,20.265 C-0.001,9.073 9.072,-0.001 20.265,-0.001 C31.457,-0.001 40.531,9.073 40.531,20.265 Z"></path>
						</svg>
					</figure>

					<!-- Icon logos START -->
					<div class="p-2 bg-white shadow rounded-3 rotate-74 position-absolute top-0 start-0 ms-3 mt-5 d-none d-sm-block">
						<img  src="{{asset('layoutsCss/images/rs1.jpeg')}}" class="h-40px" alt="Icon">
					</div>
					<div class="p-1 bg-white shadow rounded-3 rotate-74 position-absolute top-0 end-0 mt-5 me-5 d-none d-sm-block">
						<img   src="{{asset('layoutsCss/images/rs2.jpeg')}}" class="h-30px" alt="Icon">
					</div>
					<div 	class="p-2 bg-white shadow rounded-3 rotate-130 position-absolute bottom-0 start-50 ms-5 mb-2 d-none d-lg-block">
						<img  src="{{asset('layoutsCss/images/rs3.jpeg')}}" class="h-20px" alt="Icon">
					</div>
					<!-- Icon logos END -->

					<div class="row">
						<div class="col-md-8 mx-auto text-center py-5 position-relative">
							<!-- Title -->
							<h2>Abonnez-vous à notre Newsletter pour les Dernières Mises à Jour</h2>
							<!-- Form -->
							<form class="row align-items-center justify-content-center mt-3">
								<div class="col-lg-8">
									<div class="bg-body shadow rounded-pill p-2">
										<div class="input-group">
											<input class="form-control border-0 me-1" type="email" placeholder="Enter your email">
											<button type="button" class="btn btn-blue mb-0 rounded-pill">Abonnez-vous!</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div> <!-- Row END -->
				</div>
			</div>
		</div> <!-- Row END -->
	</div>
</section>
<!-- =======================
Newsletter END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- =======================
Footer START -->
<footer class="pt-0 bg-blue rounded-4 position-relative mx-2 mx-md-4 mb-3">
	<!-- SVG decoration for curve -->
	<figure class="mb-0">
		<svg class="fill-body rotate-180" width="100%" height="150" viewBox="0 0 500 150" preserveAspectRatio="none">
			<path d="M0,150 L0,40 Q250,150 500,40 L580,150 Z"></path>
		</svg>
	</figure>

	<div class="container">
		<div class="row mx-auto">
			<div class="col-lg-6 mx-auto text-center my-5">
				<!-- Logo -->
				<img class="mx-auto h-40px"  src="{{asset('layoutsCss/images/RescueFood.webp')}}" alt="logo">
				<p class="mt-3 text-white">RescueFood</p>
				<!-- Links -->
				<ul class="nav justify-content-center text-primary-hover mt-3 mt-md-0">
					<li class="nav-item"><a class="nav-link text-white" href="#">About</a></li>
					<li class="nav-item"><a class="nav-link text-white" href="#">Terms</a></li>
					<li class="nav-item"><a class="nav-link text-white" href="#">Privacy</a></li>
					<li class="nav-item"><a class="nav-link text-white" href="#">Career</a></li>
					<li class="nav-item"><a class="nav-link text-white" href="#">Contact us</a></li>
					<li class="nav-item"><a class="nav-link text-white pe-0" href="#">Cookies</a></li>
				</ul>
				<!-- Social media button -->
				<ul class="list-inline mt-3 mb-0">
					<li class="list-inline-item"> 
						<a class="btn btn-white btn-sm shadow px-2 text-facebook" href="#">
							<i class="fab fa-fw fa-facebook-f"></i>
						</a> 
					</li>
					<li class="list-inline-item"> 
						<a class="btn btn-white btn-sm shadow px-2 text-instagram" href="#">
							<i class="fab fa-fw fa-instagram"></i>
						</a> 
					</li>
					<li class="list-inline-item"> 
						<a class="btn btn-white btn-sm shadow px-2 text-twitter" href="#">
							<i class="fab fa-fw fa-twitter"></i>
						</a> 
					</li>
					<li class="list-inline-item"> 
						<a class="btn btn-white btn-sm shadow px-2 text-linkedin" href="#">
							<i class="fab fa-fw fa-linkedin-in"></i>
						</a> 
					</li>
				</ul>
				<!-- Bottom footer link -->
				<div class="mt-3 text-white">Copyrights ©2023 Eduport. Build by <a href="https://www.webestica.com/" class="text-reset btn-link text-primary-hover" target="_blank">Webestica</a></div>
			</div>
		</div>
	</div>
</footer>
<!-- =======================
Footer END -->

 
<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

<!-- Bootstrap JS -->
<script src="{{asset('restorantCss/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

<!-- Vendors -->
<script src="{{asset('restorantCss/vendor/tiny-slider/tiny-slider.js')}}"></script>
<script src="{{asset('restorantCss/vendor/glightbox/js/glightbox.js')}}"></script>

<!-- Template Functions -->
<script src="{{asset('restorantCss/js/functions.js')}}"></script>

</body>

<!-- Mirrored from eduport.webestica.com/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Nov 2023 13:10:37 GMT -->
</html>