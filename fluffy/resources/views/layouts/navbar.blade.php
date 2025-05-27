  @csrf
  <!-- Topbar Start -->
    <div class="container-fluid bg-primary py-3 d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">

                        <a class="text-white px-3"
                            href="https://www.instagram.com/fluffybakeryshop?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <div class="dropdown">
                            <a class="text-white px-3 dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                <li><a class="dropdown-item" href="formulario_login.php" data-bs-toggle="modal"
                                        data-bs-target="#loginModal">Inicia Sesión</a></li>
                                <li><a class="dropdown-item" href="formulario_registro.php" data-bs-toggle="modal"
                                        data-bs-target="#registerModal">Regístrate</a></li>
                            </ul>
                            <!--Modal Login-->
                            <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModal"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Cerrar"></button>
                                           @include('modules.auth.login')
                                            <div class="text-center">
                                                <p class="text-center mt-3">
                                                    ¿Aún no tienes cuenta? <a href="formulario_registro.php" data-bs-toggle="modal"
                                                        data-bs-target="#registerModal">Regístrate aquí</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Fin Modal Login-->
                            <!--Modal Register-->
                            <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModal"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Cerrar"></button>
                                            @include('modules.auth.registro')
                                            <div class="text-center">
                                                <p>¿Ya estás registrado? <a href="formulario_login.php" data-bs-toggle="modal"
                                        data-bs-target="#loginModal">Inicia sesión aquí</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Fin Modal Register-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-white navbar-light shadow p-lg-0">
                <a href="index.html" class="navbar-brand d-block d-lg-none">
                    <h1 class="m-0 display-4 text-primary">FLUFFY</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="index.html" class="nav-item nav-link active">Inicio</a>
                        <a href="about.html" class="nav-item nav-link">¿Quienes somos?</a>
                        <a href="product.html" class="nav-item nav-link">Catálogo</a>
                    </div>
                    <a href="index.html" class="navbar-brand mx-5 d-none d-lg-block">
                        <h1 class="m-0 display-4 text-primary">FLUFFY</h1>
                    </a>
                    <div class="navbar-nav mr-auto py-0">
                        <a href="inventario.html" class="nav-item nav-link">Inventario</a>
                        <a href="gallery.html" class="nav-item nav-link">Galería</a>
                        <a href="contact.html" class="nav-item nav-link">Contáctanos</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->