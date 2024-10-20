<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> </title>
</head>
<body>
    

  <!-- Sidebar START -->
  <nav class="navbar sidebar navbar-expand-xl navbar-light">
    <!-- Navbar brand for xl START -->
    <div class="d-flex align-items-center">
        <a class="navbar-brand" href="index.html">
            <img class="light-mode-item navbar-brand-item" src="{{asset('layoutsCss/images/adminn.png')}}"
                 alt="logo">
            <img class="dark-mode-item navbar-brand-item" src="assets/images/logo-light.svg" alt="logo">
        </a>
    </div>
    <!-- Navbar brand for xl END -->

    <div class="offcanvas offcanvas-start flex-row custom-scrollbar h-100" data-bs-backdrop="true" tabindex="-1"
         id="offcanvasSidebar">
        <div class="offcanvas-body sidebar-content d-flex flex-column pt-4">

            <!-- Sidebar menu START -->
            <ul class="navbar-nav flex-column" id="navbar-sidebar">

                <li class="nav-item"> <a class="nav-link" href="{{url('/admin/restaurants')}}"><i class="bi bi-list mx-2"></i>Liste des resaurants</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('/admin/allMenus')}}"><i class="bi bi-list mx-2"></i>Liste des Menus</a></li>

                <li class="nav-item"> <a class="nav-link" href="{{url('/admin/dons')}}"><i class="bi bi-list mx-2"></i>Liste des Dons</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('/admin/donataires')}}"><i class="bi bi-list mx-2"></i>Liste des Donataire</a></li>




                <!-- Menu item -->
                <li class="nav-item"><a class="nav-link" href="{{ route('categorie.index') }}"><i class="bi bi-list mx-2"></i> Liste Categorie</a></li>
                <li class="nav-item"><a class="nav-link"
                                        href="{{ route('association.afficherAll') }}"><i class="bi bi-list mx-2"></i> Liste Associations</a></li>


                <!-- Menu item -->
                <li class="nav-item"><a class="nav-link" href="admin-settings.html">Admin Settings</a></li>

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

</body>
</html>