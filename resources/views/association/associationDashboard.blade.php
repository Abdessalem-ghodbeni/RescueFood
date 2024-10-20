<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from eduport.webestica.com/student-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Nov 2023 13:15:28 GMT -->
<head>
    @include('association.header')

</head>

<body>

<main>

    <!-- =======================
    Page Banner START -->
    <section class="pt-0">
        <div class="container-fluid px-0">
            <div class="card bg-blue h-100px h-md-200px rounded-0"
                 style="background:url(assets/images/pattern/04.png) no-repeat center center; background-size:cover;">
            </div>
        </div>
        <div class="container mt-n4">
            <div class="row">
                <div class="col-12">
                    <div class="card bg-transparent card-body pb-0 px-0 mt-2 mt-sm-0">
                        <div class="row d-sm-flex justify-sm-content-between mt-2 mt-md-0">
                            <!-- Avatar -->
                            <div class="col-auto">
                                <div class="avatar avatar-xxl position-relative mt-n3">
                                    <img class="avatar-img rounded-circle border border-white border-3 shadow"
                                         src="{{asset('layoutsCss/images/asso.jpeg')}}" alt="">
                                    <span
                                        class="badge text-bg-success rounded-pill position-absolute top-50 start-100 translate-middle mt-4 mt-md-5 ms-n3 px-md-3">Pro</span>
                                </div>
                            </div>
                            <!-- Profile info -->
                            <div class="col d-sm-flex justify-content-between align-items-center">
                                <div>
                                    <h1 class="my-1 fs-4">{{ Auth::user()->name }}</h1>
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item me-3 mb-1 mb-sm-0">
                                            <span class="h6">email : </span>
                                            <span class="text-body fw-light">{{ Auth::user()->email }}</span>
                                        </li>
                                        <a class="nav-link" href="{{url('/profile')}}">Edit Profile</a>

                                    </ul>
                                </div>
                                <!-- Button -->
                            </div>
                        </div>
                    </div>

                    <!-- Advanced filter responsive toggler START -->
                    <!-- Divider -->
                    <hr class="d-xl-none">
                    <div class="col-12 col-xl-3 d-flex justify-content-between align-items-center">
                        <a class="h6 mb-0 fw-bold d-xl-none" href="#">Menu</a>
                        <button class="btn btn-primary d-xl-none" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
                            <i class="fas fa-sliders-h"></i>
                        </button>
                    </div>
                    <!-- Advanced filter responsive toggler END -->
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Page Banner END -->
    <!-- =======================
    Page content START -->
    <section class="pt-0">
        <div class="container">
            <div class="row">

                <!-- Left sidebar START -->
                <div class="col-xl-3">
                    <!-- Responsive offcanvas body START -->
                    <div class="offcanvas-xl offcanvas-end" tabindex="-1" id="offcanvasSidebar">
                        <!-- Offcanvas header -->
                        <div class="offcanvas-header bg-light">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">My profile</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                    data-bs-target="#offcanvasSidebar" aria-label="Close"></button>
                        </div>
                        <!-- Offcanvas body -->
                        <div class="offcanvas-body p-3 p-xl-0">
                            <div class="bg-dark border rounded-3 p-3 w-100">
                                <!-- Dashboard menu -->
                                <div class="list-group list-group-dark list-group-borderless collapse-list">
                                    <a class="list-group-item {{ request()->is('association/afficher') ? 'active' : '' }}"
                                       href="{{ route('association.afficher', ['user_id' => Auth::user()->id]) }}">
                                        <i class="bi bi-card-checklist fa-fw me-2"></i>My Associations
                                    </a>
                                    <!-- Link to Create New Association -->
                                    <a class="list-group-item {{ request()->is('association/create') ? 'active' : '' }}"
                                       href="{{ route('association.create') }}">
                                        <i class="bi bi-plus-circle fa-fw me-2"></i>Create New Association
                                    </a>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="btn">
                                            <a class="list-group-item text-danger bg-danger-soft-hover"><i
                                                    class="fas fa-sign-out-alt fa-fw me-2"></i>Sign Out</a>
                                        </button>
                                    </form>
                                    <!-- Collapse menu -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Responsive offcanvas body END -->
                </div>
                <!-- Left sidebar END -->

                <!-- Main content START -->
                <div class="col-xl-9">
                    <!-- Counter boxes START -->
                    <div class="row mb-4">
                        <!-- Counter item -->
                        <!-- Counter item -->
                        <!-- Counter item -->
                    </div>

                    @yield('content')
                    <!-- Counter boxes END -->

                </div><!-- Row END -->
            </div>
        </div>
    </section>
    <!-- =======================
    Page content END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- =======================
Footer START -->

<!-- =======================
Footer END -->

<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

<!-- Bootstrap JS -->
<script src="{{asset('restorantCss/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

<!-- Vendors -->
<script src="{{asset('restorantCss/vendor/choices/js/choices.min.js')}}"></script>
<script src="{{asset('restorantCss/vendor/purecounterjs/dist/purecounter_vanilla.js')}}"></script>
<script src="{{asset('restorantCss/vendor/aos/aos.js')}}"></script>

<!-- Template Functions -->
<script src="{{asset('restorantCss/js/functions.js')}}"></script>

</body>

<!-- Mirrored from eduport.webestica.com/student-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Nov 2023 13:15:28 GMT -->
</html>
