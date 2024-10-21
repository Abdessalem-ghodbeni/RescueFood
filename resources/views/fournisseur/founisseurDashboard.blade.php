<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from booking.webestica.com/agent-listings.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Feb 2024 15:41:29 GMT -->

<head>
    @include('fournisseur.header')
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
                            <img class="avatar-img rounded-circle" src="{{ asset('layoutsCss/images/livreur.png') }}"
                                alt="">
                        </div>
                        <h4 class="mb-2 mb-sm-0 ms-sm-3"><span class="fw-light">Hi</span>{{ Auth::user()->name }}</h4>
                        <a href="add-listing.html" class="btn btn-sm btn-primary-soft mb-0 ms-auto flex-shrink-0"><i
                                class="bi bi-plus-lg fa-fw me-2"></i>Add New Listing</a>
                    </div>
                    <!-- Avatar and info START -->

                    <!-- Responsive navbar toggler -->
                    <button class="btn btn-primary w-100 d-block d-xl-none mt-2" type="button"
                        data-bs-toggle="offcanvas" data-bs-target="#dashboardMenu" aria-controls="dashboardMenu">
                        <i class="bi bi-list"></i> Dashboard Menu
                    </button>

                    <!-- Nav links START -->
                    <div class="offcanvas-xl offcanvas-end mt-xl-3" tabindex="-1" id="dashboardMenu">
                        <div class="offcanvas-header border-bottom p-3">
                            <h5 class="offcanvas-title">Menu</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                data-bs-target="#dashboardMenu" aria-label="Close"></button>
                        </div>
                        <!-- Offcanvas body -->
                        <div class="offcanvas-body p-3 p-xl-0">
                            <!-- Nav item -->
                            <div class="navbar navbar-expand-xl">
                                <ul class="navbar-nav navbar-offcanvas-menu">

                                    <li class="nav-item"> <a class="nav-link" href="agent-dashboard.html"><i
                                                class="bi bi-house-door fa-fw me-1"></i>Dashboard</a> </li>

                                    <li class="nav-item"> <a class="nav-link active" href="agent-listings.html"><i
                                                class="bi bi-journals fa-fw me-1"></i>Listings</a> </li>

                                    <li class="nav-item"> <a class="nav-link" href="agent-bookings.html"><i
                                                class="bi bi-bookmark-heart fa-fw me-1"></i>Bookings</a> </li>

                                    <li class="nav-item"> <a class="nav-link" href="agent-activities.html"><i
                                                class="bi bi-bell fa-fw me-1"></i>Activities</a> </li>

                                    <li class="nav-item"> <a class="nav-link" href="agent-earnings.html"><i
                                                class="bi bi-graph-up-arrow fa-fw me-1"></i>Earnings</a> </li>

                                    <li class="nav-item"> <a class="nav-link" href="agent-reviews.html"><i
                                                class="bi bi-star fa-fw me-1"></i>Reviews</a></li>

                                    <li class="nav-item"> <a class="nav-link" href="agent-settings.html"><i
                                                class="bi bi-gear fa-fw me-1"></i>Settings</a></li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="dropdoanMenu"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Nav links END -->
                </div>
            </div>
        </section>
        <!-- =======================
Menu item END -->

        <section class="pt-0">
            <div class="container vstack gap-4">
                <div class="container my-5">
                    <h2 class="text-center mb-4">Liste des Livraisons</h2>

                    @if ($livraisons->isEmpty())
                        <div class="alert alert-info text-center" role="alert">
                            <strong>Aucune livraison à afficher.</strong>
                        </div>
                    @else
                        <div class="table-responsive">
                            <table class="table table-striped table-hover table-bordered shadow">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Date de Livraison</th>
                                        <th>Destination</th>
                                        <th>Numéro de Livraison</th>
                                        <th>Trajet</th>
                                        <th>Produit</th>
                                        <th>État</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($livraisons as $livraison)
                                        <tr
                                            class="{{ $livraison->etat == 'livrée' ? 'table-success' : 'table-warning' }}">
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ \Carbon\Carbon::parse($livraison->date_de_livraison)->format('d/m/Y') }}
                                            </td>
                                            <td>{{ $livraison->destination }}</td>
                                            <td>{{ $livraison->numero_livraison }}</td>
                                            <td>{{ $livraison->trajet->point_depart }} -
                                                {{ $livraison->trajet->point_arrive }}</td>
                                            <td>{{ $livraison->produit->nom_produit }}</td>
                                            <td>
                                                <span
                                                    class="badge {{ $livraison->etat == 'livrée' ? 'bg-success' : 'bg-warning' }}">
                                                    {{ ucfirst($livraison->etat) }}
                                                </span>
                                            </td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <!-- Formulaire pour changer l'état -->
                                                    <form action="{{ route('livraisons.updateEtat', $livraison->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <input type="hidden" name="etat"
                                                            value="{{ $livraison->etat == 'en attente' ? 'livrée' : 'en attente' }}">
                                                        <button type="submit" class="btn btn-warning btn-sm"
                                                            data-toggle="tooltip" title="Changer l'état">
                                                            <i class="fas fa-exchange-alt"></i>
                                                        </button>
                                                    </form>

                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
        </section>

    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    <!-- =======================
Footer START -->
    <footer class="bg-dark p-3 w-100" style="bottom:0px; position:fixed">
        <div class="container">
            <div class="row align-items-center">

                <!-- Widget -->
                <div class="col-md-4">
                    <div class="text-center text-md-start mb-3 mb-md-0">
                        <a href="index.html"> <img class="h-30px" src="{{ asset('layoutsCss/images/livreur.png') }}"
                                alt="logo"> </a>
                    </div>
                </div>

                <!-- Widget -->
                <div class="col-md-4">
                    <div class="text-body-secondary text-primary-hover"> Copyrights ©2023 Booking. Build by <a
                            href="https://www.webestica.com/" class="text-body-secondary">Webestica</a>. </div>
                </div>

                <!-- Widget -->
                <div class="col-md-4">
                    <ul class="list-inline mb-0 text-center text-md-end">
                        <li class="list-inline-item ms-2"><a href="#"><i
                                    class="text-white fab fa-facebook"></i></a></li>
                        <li class="list-inline-item ms-2"><a href="#"><i
                                    class="text-white fab fa-instagram"></i></a></li>
                        <li class="list-inline-item ms-2"><a href="#"><i
                                    class="text-white fab fa-linkedin-in"></i></a></li>
                        <li class="list-inline-item ms-2"><a href="#"><i
                                    class="text-white fab fa-twitter"></i></a></li>
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
    <script src="{{ asset('layoutsCss/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Vendors -->
    <script src="{{ asset('layoutsCss/vendor/apexcharts/js/apexcharts.min.js') }}"></script>
    <script src="{{ asset('layoutsCss/vendor/choices/js/choices.min.js') }}"></script>

    <!-- ThemeFunctions -->
    <script src="{{ asset('layoutsCss/js/functions.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-DyMlzIFptQSLwSL5X+z5P3USI4+Zzq3o6zt1OScNfsdf6Sefy0ey94Z+3w0Y0h8Bf0tU0HfEasf5s5o17ZrVA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Initialiser les tooltips -->
    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</body>

<!-- Mirrored from booking.webestica.com/agent-listings.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Feb 2024 15:41:29 GMT -->

</html>
