<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from booking.webestica.com/admin-booking-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Feb 2024 15:42:16 GMT -->

<head>
    @include('livraisons.header')

</head>

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
                        <li class="nav-item"><a href="admin-dashboard.html" class="nav-link">Dashboard</a></li>

                        <!-- Title -->
                        <li class="nav-item ms-2 my-2">Pages</li>

                        <!-- Menu item -->
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="collapse" href="#collapsebooking" role="button"
                                aria-expanded="true" aria-controls="collapsebooking">
                                Bookings
                            </a>
                            <!-- Submenu -->
                            <ul class="nav collapse flex-column show" id="collapsebooking"
                                data-bs-parent="#navbar-sidebar">
                                <li class="nav-item"> <a class="nav-link active" href="admin-booking-list.html">Booking
                                        List</a></li>
                                <li class="nav-item"> <a class="nav-link" href="admin-booking-detail.html">Booking
                                        Detail</a></li>
                            </ul>
                        </li>

                        <!-- Menu item -->
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="collapse" href="#collapseguest" role="button"
                                aria-expanded="false" aria-controls="collapseguest">
                                Guests
                            </a>
                            <!-- Submenu -->
                            <ul class="nav collapse flex-column" id="collapseguest" data-bs-parent="#navbar-sidebar">
                                <li class="nav-item"> <a class="nav-link" href="admin-guest-list.html">Guest List</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="admin-guest-detail.html">Guest
                                        Detail</a></li>
                            </ul>
                        </li>

                        <!-- Menu item -->
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="collapse" href="#collapseagent" role="button"
                                aria-expanded="false" aria-controls="collapseagent">
                                Agents
                            </a>
                            <!-- Submenu -->
                            <ul class="nav collapse flex-column" id="collapseagent" data-bs-parent="#navbar-sidebar">
                                <li class="nav-item"> <a class="nav-link" href="admin-agent-list.html">Agent List</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="admin-agent-detail.html">Agent
                                        Detail</a></li>
                            </ul>
                        </li>

                        <!-- Menu item -->
                        <li class="nav-item"> <a class="nav-link" href="admin-reviews.html">Reviews</a></li>

                        <!-- Menu item -->
                        <li class="nav-item"> <a class="nav-link" href="admin-earnings.html">Earnings</a></li>

                        <!-- Menu item -->
                        <li class="nav-item"> <a class="nav-link" href="admin-settings.html">Admin Settings</a></li>

                        <!-- Menu item -->



                    </ul>
                    <!-- Sidebar menu end -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <!-- Sidebar footer START -->
                        <div class="d-flex align-items-center justify-content-between text-primary-hover mt-auto p-3">
                            <button type="submit" class="h6 fw-light mb-0 text-body btn btn-link p-0">

                                <a class="h6 fw-light mb-0 text-body" data-bs-toggle="tooltip" data-bs-placement="top"
                                    aria-label="Sign out">
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
                                <img class="navbar-brand-item h-40px" src="{{ asset('layoutsCss/images/admin.jpg') }}"
                                    alt="">
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
                                        <button type="button" class="dropdown-item d-flex align-items-center active"
                                            data-bs-theme-value="auto">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-circle-half fa-fw mode-switch"
                                                viewBox="0 0 16 16">
                                                <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
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
                                                    class="badge bg-danger bg-opacity-10 text-danger ms-2">4 new</span>
                                            </h6>
                                            <a class="small" href="#">Clear all</a>
                                        </div>

                                        <!-- Card body START -->
                                        <div class="card-body p-0">
                                            <ul class="list-group list-group-flush list-unstyled p-2">
                                                <!-- Notification item -->
                                                <li>
                                                    <a href="#"
                                                        class="list-group-item list-group-item-action rounded notif-unread border-0 mb-1 p-3">
                                                        <h6 class="mb-2">New! Booking flights from New York ✈️</h6>
                                                        <p class="mb-0 small">Find the flexible ticket on flights
                                                            around the world. Start searching today</p>
                                                        <span>Wednesday</span>
                                                    </a>
                                                </li>
                                                <!-- Notification item -->
                                                <li>
                                                    <a href="#"
                                                        class="list-group-item list-group-item-action rounded border-0 mb-1 p-3">
                                                        <h6 class="mb-2">Sunshine saving are here 🌞 save 30% or more
                                                            on a stay</h6>
                                                        <span>15 Nov 2022</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Card body END -->

                                        <!-- Card footer -->
                                        <div class="card-footer bg-transparent text-center border-top">
                                            <a href="#" class="btn btn-sm btn-link mb-0 p-0">See all incoming
                                                activity</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Notification dropdown menu END -->
                            </li>
                            <!-- Notification dropdown END -->

                            <!-- Profile dropdown START -->
                            <li class="nav-item ms-3 dropdown">
                                <!-- Avatar -->
                                <a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button"
                                    data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <img class="avatar-img rounded-2" src="{{ asset('layoutsCss/images/admin.jpg') }}"
                                        alt="avatar">
                                </a>

                                <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3"
                                    aria-labelledby="profileDropdown">
                                    <!-- Profile info -->
                                    <li class="px-3 mb-3">
                                        <div class="d-flex align-items-center">
                                            <!-- Avatar -->
                                            <div class="avatar me-3">
                                                <img class="avatar-img rounded-circle shadow"
                                                    src="{{ asset('layoutsCss/images/admin.jpg') }}" alt="avatar">
                                            </div>
                                            <div>
                                                <a class="h6 mt-2 mt-sm-0" href="#">{{ Auth::user()->name }}</a>
                                                <p class="small m-0">{{ Auth::user()->email }}</p>
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
            <!-- Top bar END -->

            <!-- Page main content START -->
            <div class="page-content-wrapper p-xxl-4">
                <div class="container">
                    <h1 class="my-4 text-center">Liste des Livraisons</h1>

                    <div class="d-flex justify-content-end mb-4">
                        <a href="{{ route('livraisons.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Créer une nouvelle livraison
                        </a>
                    </div>

                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Date de Livraison</th>
                                <th>Destination</th>
                                <th>Numéro de Livraison</th>
                                <th>Utilisateur</th>
                                <th>Trajet</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($livraisons as $livraison)
                                <tr>
                                    <td>{{ $livraison->id }}</td>
                                    <td>{{ $livraison->date_de_livraison }}</td>
                                    <td>{{ $livraison->destination }}</td>
                                    <td>{{ $livraison->numero_livraison }}</td>

                                    {{-- Vérifier si l'utilisateur existe avant d'accéder à son nom --}}
                                    <td>
                                        @if ($livraison->user)
                                            {{ $livraison->user->name }}
                                        @else
                                            <em>Utilisateur non défini</em>
                                        @endif
                                    </td>

                                    {{-- Vérifier si le trajet existe avant d'accéder à son nom --}}
                                    <td>
                                        @if($livraison->trajet)
                                            {{ $livraison->trajet->point_depart }} - {{ $livraison->trajet->point_arrive }}
                                        @else
                                            <em>Trajet non défini</em>
                                        @endif
                                    </td>

                                    <td class="d-flex">
                                        <a href="{{ route('livraisons.show', $livraison->id) }}"
                                            class="btn btn-info btn-sm mr-2">
                                            <i class="fas fa-eye"></i> Voir
                                        </a>
                                        <a href="{{ route('livraisons.edit', $livraison->id) }}"
                                            class="btn btn-warning btn-sm mr-2">
                                            <i class="fas fa-edit"></i> Modifier
                                        </a>
                                        <form action="{{ route('livraisons.destroy', $livraison->id) }}"
                                            method="POST"
                                            onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette livraison ?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i> Supprimer
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{-- Afficher un message si la liste des livraisons est vide --}}
                    @if ($livraisons->isEmpty())
                        <p class="text-center">Aucune livraison disponible.</p>
                    @endif
                </div>

                <!--create-->

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