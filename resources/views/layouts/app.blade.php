<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="Hugo 0.84.0">

    <title>Almacenes Sangolquí</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('bootstrap-5.1.0-dist/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link href="{{asset('fontawesome-free-5.15.4-web/css/all.min.css')}}" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Inventario Almacenes Sangolquí</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('dashboard')?'active':'' }}" aria-current="page" href="{{ route('dashboard') }}">
                  <span data-feather="home"></span>
                  <i class="fas fa-home"></i>
                  Inicio
                </a>
              </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interfaces del Sistema
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('areas')?'active':'' }}" href="{{ route('areas') }}">
                  <span data-feather="file"></span>
                    <i class="fas fa-building"></i>
                    Departamento
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('productos')?'active':'' }}" href="{{ route('productos') }}">
                  <span data-feather="file"></span>
                    <i class="fab fa-product-hunt"></i>
                    Productos
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('ventas')?'active':'' }}" href="{{ route('ventas') }}">
                  <span data-feather="file"></span>
                    <i class="fab fa-product-hunt"></i>
                    Ventas
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('clientes')?'active':'' }}" href="{{ route('clientes') }}">
                <i class="fas fa-users"></i>
                  Usuarios
                </a>
              </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <img src="http://webappselsalvador.com/mapa-3d/wp-content/uploads/2019/07/logo-almacen.png" width="130" height="70">
                <p class="text-center mb-2"><strong>Almacenes Sangolquí</strong> Registro e Inventario de Productos</p>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <input class="form-control form-control-dark w-100" type="text" placeholder="Bienvenido Usuario: {{ Auth::user()->name  }}" aria-label="Search">
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <div class="nav-item text-nowrap">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="nav-link px-3" href="{{ route('logout') }}" onclick="event.preventDefault();
                                this.closest('form').submit();">Cerrar Sesión</a>

                            </form>
                        </div>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <main class="center">
                    <div class="container">
                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        @if(Session::has('estado'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>{{ Session::get('estado') }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        {{ $slot }}
                    </div>
                </main>
            </div>

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Luis Guazumba 2021</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
