@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>FLUFFY</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{ asset('img/logo.jpeg') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('scss/style.css') }}" rel="stylesheet">
    <link href="{{ asset('scss/style.css') }}">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-primary py-3 d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white px-3" href="">Ayuda</a>
                        <span class="text-white">|</span>
                        <a class="text-white pl-3" href="">Soporte</a>
                    </div>
                </div>
                        <a class="text-white px-3" href="https://www.instagram.com/fluffybakeryshop?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-white px-3" href="formulario_login.html">
                            <i class="fas fa-user"></i>
                        </a>
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
                    <h1 class="m-0 display-4 text-primary"><span class="text-secondary"></span>FLUFFY</h1>
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
                        <h1 class="m-0 display-4 text-primary"><span class="text-secondary"></span>FLUFFY</h1>
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


    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid page-header" >
        <div class="container text-center py-5">
            <!-- <img class="carousel-img" src="img/3galletas.jpeg" alt="Image"> -->
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="d-inline-flex align-items-center text-white">
                    <h1 class="text-white display-3 mt-lg-5">MENÚ</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Products Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5">Nuestras galletas y postres</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4 pb-2">
                    <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                        <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                            <h4 class="font-weight-bold text-white mb-0">$8500</h4>
                        </div>
                        <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                            <img class="rounded-circle w-100 h-100" src="img/galletaarequipe1.jpeg" style="object-fit: cover;">
                        </div>
                        <h5 class="font-weight-bold mb-4">Galleta Churro</h5>
                        <a href="" class="btn btn-sm btn-secondary">Ordenar ya</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 pb-2">
                    <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                        <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                            <h4 class="font-weight-bold text-white mb-0">$8500</h4>
                        </div>
                        <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                            <img class="rounded-circle w-100 h-100" src="img/galletachocolate1.jpeg" style="object-fit: cover;">
                        </div>
                        <h5 class="font-weight-bold mb-4">Galleta Chococruji</h5>
                        <a href="" class="btn btn-sm btn-secondary">Ordenar ya</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 pb-2">
                    <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                        <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                            <h4 class="font-weight-bold text-white mb-0">$8500</h4>
                        </div>
                        <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                            <img class="rounded-circle w-100 h-100" src="img/galletacream2.jpeg" style="object-fit: cover;">
                        </div>
                        <h5 class="font-weight-bold mb-4">Galleta Snicker</h5>
                        <a href="" class="btn btn-sm btn-secondary">Ordenar ya</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 pb-2">
                    <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                        <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                            <h4 class="font-weight-bold text-white mb-0">$8500</h4>
                        </div>
                        <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                            <img class="rounded-circle w-100 h-100" src="img/galletaderretida2.jpeg" style="object-fit: cover;">
                        </div>
                        <h5 class="font-weight-bold mb-4">Galleta Smore</h5>
                        <a href="" class="btn btn-sm btn-secondary">Ordenar ya</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 pb-2">
                    <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                        <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                            <h4 class="font-weight-bold text-white mb-0">$8500</h4>
                        </div>
                        <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                            <img class="rounded-circle w-100 h-100" src="img/galletadulce2.jpeg" style="object-fit: cover;">
                        </div>
                        <h5 class="font-weight-bold mb-4">Galleta Nutella</h5>
                        <a href="" class="btn btn-sm btn-secondary">Ordenar ya</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 pb-2">
                    <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                        <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                            <h4 class="font-weight-bold text-white mb-0">$8500</h4>
                        </div>
                        <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                            <img class="rounded-circle w-100 h-100" src="img/galletahbd1.jpeg" style="object-fit: cover;">
                        </div>
                        <h5 class="font-weight-bold mb-4">Galleta Cumple</h5>
                        <a href="" class="btn btn-sm btn-secondary">Ordenar ya</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 pb-2">
                    <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                        <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                            <h4 class="font-weight-bold text-white mb-0">$8500</h4>
                        </div>
                        <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                            <img class="rounded-circle w-100 h-100" src=" img/galletanavidad1.jpeg" style="object-fit: cover;">
                        </div>
                        <h5 class="font-weight-bold mb-4">Galleta Frutos Rojos</h5>
                        <a href="" class="btn btn-sm btn-secondary">Ordenar ya</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 pb-2">
                    <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                        <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                            <h4 class="font-weight-bold text-white mb-0">$8500</h4>
                        </div>
                        <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                            <img class="rounded-circle w-100 h-100" src=" img/galletanueces1.jpeg" style="object-fit: cover;">
                        </div>
                        <h5 class="font-weight-bold mb-4">Galleta Choco Blanco y Nueces</h5>
                        <a href="" class="btn btn-sm btn-secondary">Ordenar ya</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 pb-2">
                    <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                        <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                            <h4 class="font-weight-bold text-white mb-0">$8500</h4>
                        </div>
                        <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                            <img class="rounded-circle w-100 h-100" src=" img/galletaoreo2.jpeg" style="object-fit: cover;">
                        </div>
                        <h5 class="font-weight-bold mb-4">Galleta Oreo con Cheescake</h5>
                        <a href="" class="btn btn-sm btn-secondary">Ordenar ya</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 pb-2">
                    <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                        <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                            <h4 class="font-weight-bold text-white mb-0">$8500</h4>
                        </div>
                        <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                            <img class="rounded-circle w-100 h-100" src=" img/galletaoscura1.jpeg" style="object-fit: cover;">
                        </div>
                        <h5 class="font-weight-bold mb-4">Galleta Pingüinos</h5>
                        <a href="" class="btn btn-sm btn-secondary">Ordenar ya</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 pb-2">
                    <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                        <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                            <h4 class="font-weight-bold text-white mb-0">$8500</h4>
                        </div>
                        <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                            <img class="rounded-circle w-100 h-100" src=" img/galletapiedelimon1.jpeg" style="object-fit: cover;">
                        </div>
                        <h5 class="font-weight-bold mb-4">Galleta Pie de Limón</h5>
                        <a href="" class="btn btn-sm btn-secondary">Ordenar ya</a>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4 pb-2">
                    <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                        <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                            <h4 class="font-weight-bold text-white mb-0">$8500</h4>
                        </div>
                        <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                            <img class="rounded-circle w-100 h-100" src=" img/galletapistacho1.jpeg" style="object-fit: cover;">
                        </div>
                        <h5 class="font-weight-bold mb-4">Galleta Pistacho</h5>
                        <a href="" class="btn btn-sm btn-secondary">Ordenar ya</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 pb-2">
                    <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                        <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                            <h4 class="font-weight-bold text-white mb-0">$8500</h4>
                        </div>
                        <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                            <img class="rounded-circle w-100 h-100" src=" img/galletaredvelvet2.jpeg" style="object-fit: cover;">
                        </div>
                        <h5 class="font-weight-bold mb-4">Galleta Red Velvet</h5>
                        <a href="" class="btn btn-sm btn-secondary">Ordenar ya</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 pb-2">
                    <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                        <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                            <h4 class="font-weight-bold text-white mb-0">$8500</h4>
                        </div>
                        <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                            <img class="rounded-circle w-100 h-100" src=" img/galletamasmelos1.jpeg" style="object-fit: cover;">
                        </div>
                        <h5 class="font-weight-bold mb-4">Galleta Lucky Charms</h5>
                        <a href="" class="btn btn-sm btn-secondary">Ordenar ya</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 pb-2">
                    <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                        <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                            <h4 class="font-weight-bold text-white mb-0">$8000<h4>
                        </div>
                        <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                            <img class="rounded-circle w-100 h-100" src=" img/browniedorado1.jpeg" style="object-fit: cover;">
                        </div>
                        <h5 class="font-weight-bold mb-4">Brownie Clásico</h5>
                        <a href="" class="btn btn-sm btn-secondary">Ordenar ya</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 pb-2">
                    <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                        <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                            <h4 class="font-weight-bold text-white mb-0">$8000</h4>
                        </div>
                        <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                            <img class="rounded-circle w-100 h-100" src=" img/brownieoscuro1.jpeg" style="object-fit: cover;">
                        </div>
                        <h5 class="font-weight-bold mb-4">Brownie con glaceado y salsa de chocolate</h5>
                        <a href="" class="btn btn-sm btn-secondary">Ordenar ya</a>
                    </div>
                </div> 
                
                <div class="col-lg-3 col-md-6 mb-4 pb-2">
                    <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                        <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                            <h4 class="font-weight-bold text-white mb-0">$1500</h4>
                        </div>
                        <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                            <img class="rounded-circle w-100 h-100" src=" img/alfajores9.jpeg" style="object-fit: cover;">
                        </div>
                        <h5 class="font-weight-bold mb-4">Alfajores</h5>
                        <a href="" class="btn btn-sm btn-secondary">Ordenar ya</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 pb-2">
                    <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                        <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                            <h4 class="font-weight-bold text-white mb-0">$30000
                        </div>
                        <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                            <img class="rounded-circle w-100 h-100" src=" img/cupcakesx3.jpeg" style="object-fit: cover;">
                        </div>
                        <h5 class="font-weight-bold mb-4">Cupcakes X3</h5>
                        <a href="" class="btn btn-sm btn-secondary">Ordenar ya</a>
                    </div>
                </div>  
                
                <div class="col-lg-3 col-md-6 mb-4 pb-2">
                    <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                        <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                            <h4 class="font-weight-bold text-white mb-0">$35000</h4>
                        </div>
                        <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                            <img class="rounded-circle w-100 h-100" src=" img/minitorta1.jpeg" style="object-fit: cover;">
                        </div>
                        <h5 class="font-weight-bold mb-4">Torta de Zanahoria de 5 porciones</h5>
                        <a href="" class="btn btn-sm btn-secondary">Ordenar ya</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 pb-2">
                    <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                        <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                            <h4 class="font-weight-bold text-white mb-0">$35000</h4>
                        </div>
                        <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                            <img class="rounded-circle w-100 h-100" src=" img/torta2.jpeg" style="object-fit: cover;">
                        </div>
                        <h5 class="font-weight-bold mb-4">Torta de Amapola y Limón de 5 porciones</h5>
                        <a href="" class="btn btn-sm btn-secondary">Ordenar ya</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 pb-2">
                    <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                        <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                            <h4 class="font-weight-bold text-white mb-0">$40000<h4>
                        </div>
                        <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                            <img class="rounded-circle w-100 h-100" src=" img/tortafrutosrojos1.jpeg" style="object-fit: cover;">
                        </div>
                        <h5 class="font-weight-bold mb-4">Torta de frutos rojos de 5 porciones</h5>
                        <a href="" class="btn btn-sm btn-secondary">Ordenar ya</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 pb-2">
                    <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                        <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                            <h4 class="font-weight-bold text-white mb-0">$31500</h4>
                        </div>
                        <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                            <img class="rounded-circle w-100 h-100" src=" img/cajax4.jpeg" style="object-fit: cover;">
                        </div>
                        <h5 class="font-weight-bold mb-4">CAJA X4 GALLETAS</h5>
                        <a href="" class="btn btn-sm btn-secondary">Ordenar ya</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 pb-2">
                    <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                        <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                            <h4 class="font-weight-bold text-white mb-0">$47000</h4>
                        </div>
                        <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                            <img class="rounded-circle w-100 h-100" src=" img/cajax6.jpeg" style="object-fit: cover;">
                        </div>
                        <h5 class="font-weight-bold mb-4">CAJA X6 GALLETAS</h5>
                        <a href="" class="btn btn-sm btn-secondary">Ordenar ya</a>
                    </div>
                </div>

                <div class="col-12 text-center">
                    <a href="" class="btn btn-primary py-3 px-5">Armar mi carrito de compra</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->


    <!-- Footer Start -->
    <div class="container-fluid footer bg-light py-5" style="margin-top: 90px;">
        <div class="container text-center py-5">
            <div class="row">
                <div class="col-12 mb-4">
                    <a href="index.html" class="navbar-brand m-0">
                        <h1 class="m-0 mt-n2 display-4 text-primary"><span class="text-secondary"></span>FLUFFY</h1>
                    </a>
                </div>
                <div class="col-12 mb-4">
                    <a class="btn btn-outline-secondary btn-social" href="https://www.instagram.com/fluffybakeryshop?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary px-2 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>

    <!-- Contact Javascript File -->
    <script src="{{ asset('mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ asset('mail/contact.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>

@endsection