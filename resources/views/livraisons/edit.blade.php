<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from booking.webestica.com/admin-booking-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Feb 2024 15:42:16 GMT -->

<head>
    @include('livraisons.header')

</head>

<body>

    <body>

        <!-- **************** MAIN CONTENT START **************** -->
        <main>


            <!-- Sidebar START -->
            <nav class="navbar sidebar navbar-expand-xl navbar-light">
                <!-- Navbar brand for xl START -->
                <div class="d-flex align-items-center">
                    <a class="navbar-brand" href="index.html">
                        <img class="light-mode-item navbar-brand-item" src="{{ asset('layoutsCss/images/adminn.png') }}"
                            alt="logo">
                        <img class="dark-mode-item navbar-brand-item" src="assets/images/logo-light.svg" alt="logo">
                    </a>
                </div>
                <!-- Navbar brand for xl END -->

                <div class="offcanvas offcanvas-start flex-row custom-scrollbar h-100" data-bs-backdrop="true"
                    tabindex="-1" id="offcanvasSidebar">
                    <div class="offcanvas-body sidebar-content d-flex flex-column pt-4">

                        <!-- Sidebar menu START -->
                        <ul class="navbar-nav flex-column" id="navbar-sidebar">

                            <!-- Menu item -->
                            <li class="nav-item"><a class="nav-link">Dashboard</a></li>

                            <!-- Title -->
                            <li class="nav-item ms-2 my-2">Pages</li>


                            <!-- Menu item -->
                            <li class="nav-item"> <a class="nav-link" href="{{ url('/admin/restaurants') }}"><i
                                        class="bi bi-list mx-2"></i>Liste des resaurants</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{ url('/admin/allMenus') }}"><i
                                        class="bi bi-list mx-2"></i>Liste des Menus</a></li>

                            <li class="nav-item"> <a class="nav-link" href="{{ url('/admin/dons') }}"><i
                                        class="bi bi-list mx-2"></i>Liste Dons</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{ url('/stock') }}"><i
                                        class="bi bi-list mx-2"></i>Liste des Stocks</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{ url('/produit') }}"><i
                                        class="bi bi-list mx-2"></i>Liste des Produits</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{ url('livraisons/dahboard') }}"><i
                                        class="bi bi-list mx-2"></i>Liste des Livraisons</a></li>

                            <li class="nav-item"> <a class="nav-link" href="{{ url('trajets') }}"><i
                                        class="bi bi-list mx-2"></i>Liste des trajets</a></li>

                            <!-- Menu item -->



                        </ul>
                        <!-- Sidebar menu end -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <!-- Sidebar footer START -->
                            <div
                                class="d-flex align-items-center justify-content-between text-primary-hover mt-auto p-3">
                                <button type="submit" class="h6 fw-light mb-0 text-body btn btn-link p-0">

                                    <a class="h6 fw-light mb-0 text-body" data-bs-toggle="tooltip"
                                        data-bs-placement="top" aria-label="Sign out">
                                        <i class="fa-solid fa-arrow-right-from-bracket"></i> Log out
                                    </a>

                                </button>
                            </div>
                        </form>
                        <!-- Sidebar footer END -->

                    </div>
                </div>
            </nav>
            <!-- Sidebar END -->


            <!-- Page content START -->
            <div class="page-content">

                <!-- Top bar START -->
                <nav class="navbar top-bar navbar-light py-0 py-xl-3">
                    <div class="container-fluid p-0">
                        <div class="d-flex align-items-center w-100">

                            <!-- Logo START -->
                            <div class="d-flex align-items-center d-xl-none">
                                <a class="navbar-brand" href="index.html">
                                    <img class="navbar-brand-item h-40px"
                                        src="{{ asset('layoutsCss/images/admin.jpg') }}" alt="">
                                </a>
                            </div>
                            <!-- Logo END -->

                            <!-- Toggler for sidebar START -->
                            <div class="navbar-expand-xl sidebar-offcanvas-menu">
                                <button class="navbar-toggler me-auto p-2" type="button" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar"
                                    aria-expanded="false" aria-label="Toggle navigation" data-bs-auto-close="outside">
                                    <i class="bi bi-list text-primary fa-fw" data-bs-target="#offcanvasMenu"></i>
                                </button>
                            </div>
                            <!-- Toggler for sidebar END -->

                            <!-- Top bar left -->
                            <div class="navbar-expand-lg ms-auto ms-xl-0">
                                <!-- Toggler for menubar START -->
                                <button class="navbar-toggler ms-auto p-0" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarTopContent" aria-controls="navbarTopContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <i class="bi bi-search"></i>
                                </button>
                                <!-- Toggler for menubar END -->

                                <!-- Topbar menu START -->
                                <div class="collapse navbar-collapse w-100 z-index-1" id="navbarTopContent">
                                    <!-- Top search START -->
                                    <div class="nav my-3 my-xl-0 flex-nowrap align-items-center">
                                        <div class="nav-item w-100">
                                            <form class="position-relative">
                                                <input class="form-control bg-light pe-5" type="search"
                                                    placeholder="Search" aria-label="Search">
                                                <button
                                                    class="bg-transparent px-2 py-0 border-0 position-absolute top-50 end-0 translate-middle-y"
                                                    type="submit"><i
                                                        class="fas fa-search fs-6 text-primary"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- Top search END -->
                                </div>
                                <!-- Topbar menu END -->
                            </div>
                            <!-- Top bar left END -->

                            <!-- Top bar right START -->
                            <ul class="nav flex-row align-items-center list-unstyled ms-xl-auto">
                                <!-- Dark mode options START -->
                                <li class="nav-item dropdown ms-3">
                                    <button class="nav-notification lh-0 btn btn-light p-0 mb-0" id="bd-theme"
                                        type="button" aria-expanded="false" data-bs-toggle="dropdown"
                                        data-bs-display="static">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-circle-half fa-fw theme-icon-active"
                                            viewBox="0 0 16 16">
                                            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
                                            <use href="#"></use>
                                        </svg>
                                    </button>

                                    <ul class="dropdown-menu min-w-auto dropdown-menu-end" aria-labelledby="bd-theme">
                                        <li class="mb-1">
                                            <button type="button" class="dropdown-item d-flex align-items-center"
                                                data-bs-theme-value="light">
                                                <svg width="16" height="16" fill="currentColor"
                                                    class="bi bi-brightness-high-fill fa-fw mode-switch me-1"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
                                                    <use href="#"></use>
                                                </svg>Light
                                            </button>
                                        </li>
                                        <li class="mb-1">
                                            <button type="button" class="dropdown-item d-flex align-items-center"
                                                data-bs-theme-value="dark">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor"
                                                    class="bi bi-moon-stars-fill fa-fw mode-switch me-1"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
                                                    <path
                                                        d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
                                                    <use href="#"></use>
                                                </svg>Dark
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button"
                                                class="dropdown-item d-flex align-items-center active"
                                                data-bs-theme-value="auto">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-circle-half fa-fw mode-switch"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
                                                    <use href="#"></use>
                                                </svg>Auto
                                            </button>
                                        </li>
                                    </ul>
                                </li>
                                <!-- Dark mode options END-->

                                <!-- Notification dropdown START -->
                                <li class="nav-item dropdown ms-3">
                                    <!-- Notification button -->
                                    <a class="nav-notification btn btn-light p-0 mb-0" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                        <i class="bi bi-bell fa-fw"></i>
                                    </a>
                                    <!-- Notification dote -->
                                    <span class="notif-badge animation-blink"></span>

                                    <!-- Notification dropdown menu START -->
                                    <div
                                        class="dropdown-menu dropdown-animation dropdown-menu-end dropdown-menu-size-md shadow-lg p-0">
                                        <div class="card bg-transparent">
                                            <!-- Card header -->
                                            <div
                                                class="card-header bg-transparent d-flex justify-content-between align-items-center border-bottom">
                                                <h6 class="m-0">Notifications <span
                                                        class="badge bg-danger bg-opacity-10 text-danger ms-2">4
                                                        new</span></h6>
                                                <a class="small" href="#">Clear all</a>
                                            </div>

                                            <!-- Card body START -->
                                            <div class="card-body p-0">
                                                <ul class="list-group list-group-flush list-unstyled p-2">
                                                    <!-- Notification item -->
                                                    <li>
                                                        <a href="#"
                                                            class="list-group-item list-group-item-action rounded notif-unread border-0 mb-1 p-3">
                                                            <h6 class="mb-2">New! Booking flights from New York ✈️
                                                            </h6>
                                                            <p class="mb-0 small">Find the flexible ticket on flights
                                                                around the world. Start searching today</p>
                                                            <span>Wednesday</span>
                                                        </a>
                                                    </li>
                                                    <!-- Notification item -->
                                                    <li>
                                                        <a href="#"
                                                            class="list-group-item list-group-item-action rounded border-0 mb-1 p-3">
                                                            <h6 class="mb-2">Sunshine saving are here 🌞 save 30% or
                                                                more on a stay</h6>
                                                            <span>15 Nov 2022</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Card body END -->

                                            <!-- Card footer -->
                                            <div class="card-footer bg-transparent text-center border-top">
                                                <a href="#" class="btn btn-sm btn-link mb-0 p-0">See all
                                                    incoming activity</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Notification dropdown menu END -->
                                </li>
                                <!-- Notification dropdown END -->

                                <!-- Profile dropdown START -->
                                <li class="nav-item ms-3 dropdown">
                                    <!-- Avatar -->
                                    <a class="avatar avatar-sm p-0" href="#" id="profileDropdown"
                                        role="button" data-bs-auto-close="outside" data-bs-display="static"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <img class="avatar-img rounded-2"
                                            src="{{ asset('layoutsCss/images/admin.jpg') }}" alt="avatar">
                                    </a>

                                    <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3"
                                        aria-labelledby="profileDropdown">
                                        <!-- Profile info -->
                                        <li class="px-3 mb-3">
                                            <div class="d-flex align-items-center">
                                                <!-- Avatar -->
                                                <div class="avatar me-3">
                                                    <img class="avatar-img rounded-circle shadow"
                                                        src="{{ asset('layoutsCss/images/admin.jpg') }}"
                                                        alt="avatar">
                                                </div>
                                                <div>
                                                    <a class="h6 mt-2 mt-sm-0"
                                                        href="#">{{ Auth::user()->name }}</a>
                                                    <p class="small m-0">{{ Auth::user()->email }}</p>
                                                    <a class="nav-link" href="{{ url('/profile') }}">Edit Profile</a>
                                                </div>
                                            </div>
                                        </li>


                                    </ul>
                                </li>
                                <!-- Profile dropdown END -->
                            </ul>
                            <!-- Top bar right END -->
                        </div>
                    </div>
                </nav>

                <div class="page-content-wrapper p-xxl-4">

                    <h1 class="text-center mb-4">Modifier la Livraison</h1>
                    {{--
                <form action="{{ route('livraisons.update', $livraison->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- Date de livraison -->
                    <div class="form-group">
                        <label for="date_de_livraison">Date de Livraison:</label>
                        <input type="date" class="form-control" id="date_de_livraison" name="date_de_livraison"
                            value="{{ $livraison->date_de_livraison }}" required>
                    </div>

                    <!-- Destination -->
                    <div class="form-group">
                        <label for="destination">Destination:</label>
                        <input type="text" class="form-control" id="destination" name="destination"
                            value="{{ $livraison->destination }}" required>
                    </div>

                    <!-- Numéro de livraison -->
                    <div class="form-group">
                        <label for="numero_livraison">Numéro de Livraison:</label>
                        <input type="text" class="form-control" id="numero_livraison" name="numero_livraison"
                            value="{{ $livraison->numero_livraison }}" required>
                    </div>

                    <!-- Sélectionner le livreur -->
                    <div class="form-group">
                        <label for="user_id">Sélectionner un livreur:</label>
                        <select class="form-control" id="user_id" name="user_id" required>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}" {{ $livraison->user_id == $user->id ? 'selected' : '' }}>
                                    {{ $user->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Sélectionner le trajet -->
                    <div class="form-group">
                        <label for="trajet_id">Trajet:</label>
                        <select class="form-control" id="trajet_id" name="trajet_id" required>
                            @foreach ($trajets as $trajet)
                                <option value="{{ $trajet->id }}" {{ $livraison->trajet_id == $trajet->id ? 'selected' : '' }}>
                                    {{ $trajet->point_depart }} - {{ $trajet->point_arrive }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Bouton de soumission -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-success btn-lg mb-3">Mettre à Jour</button>
                    </div>
                </form> --}}
                    <form action="{{ route('livraisons.update', $livraison->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- Sélectionner le livreur -->
                        <div class="form-group">
                            <label for="user_id">Sélectionner un livreur:</label>
                            <select class="form-control @error('user_id') is-invalid @enderror" id="user_id"
                                name="user_id" required>
                                <option value="">-- Sélectionnez un livreur --</option>
                                @foreach ($users as $livreur)
                                    <option value="{{ $livreur->id }}"
                                        {{ $livraison->user_id == $livreur->id ? 'selected' : '' }}>
                                        {{ $livreur->name }} - ({{ $livreur->email }})
                                    </option>
                                @endforeach
                            </select>
                            @error('user_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Sélectionner le trajet -->
                        <div class="form-group">
                            <label for="trajet_id">Sélectionner un trajet:</label>
                            <select class="form-control @error('trajet_id') is-invalid @enderror" id="trajet_id"
                                name="trajet_id" required>
                                <option value="">-- Sélectionnez un trajet --</option>
                                @foreach ($trajets as $trajet)
                                    <option value="{{ $trajet->id }}"
                                        {{ $livraison->trajet_id == $trajet->id ? 'selected' : '' }}>
                                        {{ $trajet->point_depart }} - {{ $trajet->point_arrive }}
                                    </option>
                                @endforeach
                            </select>
                            @error('trajet_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Sélectionner un produit -->
                        <div class="form-group">
                            <label for="produit_id">Produit à livrer:</label>
                            <select class="form-control @error('produit_id') is-invalid @enderror" id="produit_id"
                                name="produit_id" required>
                                <option value="">-- Sélectionnez un produit --</option>
                                @foreach ($produits as $produit)
                                    <option value="{{ $produit->id }}"
                                        {{ $livraison->produit_id == $produit->id ? 'selected' : '' }}>
                                        {{ $produit->nom_produit }}
                                    </option>
                                @endforeach
                            </select>
                            @error('produit_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Date de livraison -->
                        <div class="form-group">
                            <label for="date_de_livraison">Date de Livraison:</label>
                            <input type="date"
                                class="form-control @error('date_de_livraison') is-invalid @enderror"
                                id="date_de_livraison" name="date_de_livraison"
                                value="{{ old('date_de_livraison', $livraison->date_de_livraison) }}" required>
                            @error('date_de_livraison')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Destination -->
                        <div class="form-group">
                            <label for="destination">Destination:</label>
                            <input type="text" class="form-control @error('destination') is-invalid @enderror"
                                id="destination" name="destination"
                                value="{{ old('destination', $livraison->destination) }}" required>
                            @error('destination')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Numéro de livraison -->
                        <div class="form-group">
                            <label for="numero_livraison">Numéro de Livraison:</label>
                            <input type="text" class="form-control @error('numero_livraison') is-invalid @enderror"
                                id="numero_livraison" name="numero_livraison"
                                value="{{ old('numero_livraison', $livraison->numero_livraison) }}" required>
                            @error('numero_livraison')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Champ caché pour l'état de la livraison -->
                        <input type="hidden" name="etat" value="{{ $livraison->etat }}">

                        <button type="submit" class="btn btn-success">Mettre à jour la livraison</button>
                    </form>


                    <div class="text-center">
                        <a href="{{ route('livraisons.index') }}" class="btn btn-link">Retour à la liste</a>
                        <a href="{{ route('livraisons.index') }}" class="btn btn-secondary">Annuler</a>
                    </div>
                </div>
                <!-- Page main content END -->
            </div>
            <!-- Page content END -->

        </main>
        <!-- **************** MAIN CONTENT END **************** -->

        <!-- Bootstrap JS -->
        <script src="{{ asset('layoutsCss/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

        <!-- Vendor -->
        <script src="{{ asset('layoutsCss/vendor/overlay-scrollbar/js/overlayscrollbars.min.js') }}"></script>

        <!-- ThemeFunctions -->
        <script src="{{ asset('layoutsCss/js/functions.js') }}"></script>

    </body>

    <!-- Mirrored from booking.webestica.com/admin-booking-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Feb 2024 15:42:16 GMT -->

</html>
