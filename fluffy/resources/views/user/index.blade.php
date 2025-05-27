<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fluffy Pasteleria</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta
        content="Explora nuestro delicioso catálogo de postres y galletas artesanales. Realiza tus pedidos fácilmente y disfruta de sabores únicos."
        name="description">

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
    @include('layouts.navbar')

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="carousel-img" src="{{ asset('img/galletasyvelas.jpeg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-3 text-white mb-md-4">Visualiza nuestra variedad de galletas</h1>
                            <h4 class="text-white text-uppercase mb-md-3">Nuestras galletas</h4>
                            <h1 class="display-3 text-white mb-md-4">Aquí podrás visualizar nuestra variedad de galletas
                            </h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Mirar más</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="carousel-img" src="{{ asset('img/cupcake2.JPG') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-3 text-white mb-md-4">Visualiza nuestra variedad de postres</h1>
                            <a href="inventario.html" class="btn btn-primary py-md-3 px-md-5 mt-2">Mirar más</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img class="carousel-img" src="{{ asset('img/torta3partida2.JPG') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-3 text-white mb-md-4">Visualiza nuestra variedad de tortas</h1>
                            <h4 class="text-white text-uppercase mb-md-3">Nuestros demás postres</h4>
                            <h1 class="display-3 text-white mb-md-4">Aquí podrás visualizar nuestra amplia variedad de
                                postres</h1>
                            <a href="inventario.html" class="btn btn-primary py-md-3 px-md-5 mt-2">Mirar más</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-secondary px-0" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n1"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-secondary px-0" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n1"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <h1 class="section-title position-relative text-center mb-5">Nuestro producto estrella</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 py-5">
                    <h4 class="font-weight-bold mb-3">Pie de limón</h4>
                    <h5 class="text-muted mb-3">La galleta Pie de limón, es la galleta de la casa, creemos que es casi
                        adictiva comerla.</h5>
                </div>
                <div class="col-lg-4" style="min-height: 400px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="{{ asset('img/galletapiedelimon1.jpeg') }}"
                            style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4 py-5">
                    <h4 class="font-weight-bold mb-3">¿Cuales son los puntos positivos?</h4>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>No vas a querer dejar de
                        comerla.</h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>¡Su sabor es
                        inexplicable!</h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Vas a querer compartirla
                        con tus amigos y familiares.</h5>
                    <a href="" class="btn btn-primary mt-2">Mostrar más</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid my-5 py-5 px-0">
        <div class="row bg-primary m-0">
            <div class="col-md-6 px-0" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="{{ asset('img/galletapiedelimon1.jpeg') }}" style="object-fit: cover;">
                    <img class="position-absolute w-100 h-100" src="{{ asset('img/galletachocolate1.jpeg') }}"
                        style="object-fit: cover;">
                </div>
            </div>
            <div class="col-md-6 py-5 py-md-0 px-0">
                <div class="h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                    <h3 class="font-weight-bold text-white mt-1 mb-4">NUESTRO PRODUCTO ESTRELLA</h3>
                    <p class="text-white mb-4 fs-4">Nuestra galleta pie de limón es una explosión de sabor y frescura. </p>
                    <p class="text-white mb-4 fs-4">¡Prueba una hoy y descubre por qué es nuestra favorita! </p>
                    <h3 class="font-weight-bold text-white mt-3 mb-4">Galleta Chococruji</h3>
                    <p class="text-white mb-4">Galleta rellena de chocolante crujiente, se siente una gran sensación de
                        dulzura en el paladar</p>
                    <a href="" class="btn btn-secondary py-3 px-5 mt-2">Orden ya</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->



    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative mb-5">Nuestra amplia variedad de galletas</h1>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0 pb-5 pb-lg-0"></div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel service-carousel">
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <img class="rounded-circle w-100 h-100 bg-light p-3" src="{{ asset('img/galletaredvelvet2.jpeg') }}"
                                    style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5"
                                style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">Galleta Red Velvet</h5>
                                <p>Galleta de color rojo con un relleno de crema de quesocrema.</p>
                                <a href=""
                                    class="border-bottom border-secondary text-decoration-none text-secondary">Quiero
                                    esta</a>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <img class="rounded-circle w-100 h-100 bg-light p-3" src="{{ asset('img/galletapiedelimon1.jpeg') }}"
                                    style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5"
                                style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">Galleta Pie de limón</h5>
                                <p>La galleta pie de limón, tiene una crema encima que de inmadiato cuando lo comes hace
                                    una explosión en tu boca de lo citrica y a la vez lo dulces que es, es nuetro TOP 1!
                                </p>
                                <a href=""
                                    class="border-bottom border-secondary text-decoration-none text-secondary">Quiero
                                    esta</a>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <img class="rounded-circle w-100 h-100 bg-light p-3" src="{{ asset('img/galletamasmelos1.jpeg') }}"
                                    style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5"
                                style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">Galleta Lucky Charms</h5>
                                <p>Esta galleta, tiene una deliciosa crema encima dulce y encima de ella, dulces!</p>
                                <a href=""
                                    class="border-bottom border-secondary text-decoration-none text-secondary">Quiero
                                    esta</a>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <img class="rounded-circle w-100 h-100 bg-light p-3" src="{{ asset('img/galletaoreo2.jpeg') }}"
                                    style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5"
                                style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">Galleta Oreo con Cheescake</h5>
                                <p>Esta es una galleta hecha de oreo con un relleno de Cheescake</p>
                                <a href=""
                                    class="border-bottom border-secondary text-decoration-none text-secondary">Quiero
                                    esta</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- Products End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative mb-5">Reconocidas por su sabor</h1>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0 pb-5 pb-lg-0"></div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel team-carousel">
                        <div class="team-item">
                            <div class="team-img mx-auto">
                                <img class="rounded-circle w-100 h-100" src="{{ asset('img/galletaarequipe1.jpeg') }}"
                                    style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded px-4 py-5"
                                style="margin-top: -100px;">
                                <h3 class="font-weight-bold mt-5 mb-3 pt-5">Churro con arequipe</h3>
                                <h6 class="text-uppercase text-muted mb-4">Una galleta distintiva por su marcado perfil de sabor a churro, ofreciendo una dulzura envolvente que deleitará el paladar.
                                </h6>
                                <h6 class="text-uppercase text-muted mb-4">Galleta destacada por su gran definido sabor
                                    a churro ¡muy dulce!</h6>
                                <div class="d-flex justify-content-center pt-1">
                                </div>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="team-img mx-auto">
                                <img class="rounded-circle w-100 h-100" src="{{ asset('img/galletaderretida2.jpeg') }}"
                                    style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded px-4 py-5"
                                style="margin-top: -100px;">
                                <h3 class="font-weight-bold mt-5 mb-3 pt-5">Galleta Smore's</h3>
                                <h6 class="text-uppercase text-muted mb-4">Una galleta irresistible, cubierta con una generosa porción de chocolate amargo y suaves malvaviscos, creando un equilibrio delicioso entre dulzura y profundidad de sabor.
                                </h6>
                                <h6 class="text-uppercase text-muted mb-4">Galleta con chocolate amargo encima y
                                    masmelos </h6>
                                <div class="d-flex justify-content-center pt-1">
                                </div>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="team-img mx-auto">
                                <img class="rounded-circle w-100 h-100" src="{{ asset('img/galletacream2.jpeg') }}"
                                    style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded px-4 py-5"
                                style="margin-top: -100px;">
                                <h3 class="font-weight-bold mt-5 mb-3 pt-5">Galleta Snicker</h3>
                                <h6 class="text-uppercase text-muted mb-4">Una galleta exquisita, realzada con un suave baño de arequipe y la adición de trozos del clásico Snickers, que aportan una deliciosa combinación de texturas y sabores a cada mordisco.
                                </h6>
                                <h6 class="text-uppercase text-muted mb-4">Galleta con arequipe encima y trozos de
                                    snicker</h6>
                                <div class="d-flex justify-content-center pt-1">
                                </div>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="team-img mx-auto">
                                <img class="rounded-circle w-100 h-100" src="{{ asset('img/galletahbd1.jpeg') }}"
                                    style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded px-4 py-5"
                                style="margin-top: -100px;">
                                <h3 class="font-weight-bold mt-5 mb-3 pt-5">Galleta Cumple</h3>
                                <h6 class="text-uppercase text-muted mb-4">Una galleta encantadora, realzada con un cremoso glaseado de vainilla y vibrantes chispas de colores, perfecta para añadir un toque de dulzura y diversión a cualquier momento.
                                </h6>
                                <h6 class="text-uppercase text-muted mb-4">Galleta con un glaceado de vainilla y chispas
                                    de colores</h6>
                                <div class="d-flex justify-content-center pt-1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5">Fluffy Pastelería</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-light mb-4">Cada mordisco es un viaje al reino de los sabores. ¿Te
                                unes a la aventura?</h4>
                            <img class="img-fluid mx-auto mb-3" src="{{ asset('img/browniedorado1.jpeg') }}" alt="">
                            <h5 class="font-weight-bold m-0">Brownies</h5>
                        </div>
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <img class="img-fluid mx-auto mb-3" src="{{ asset('img/alfajoresmodelo1.jpeg') }}" alt="">
                            <h5 class="font-weight-bold m-0">Alfajores</h5>
                        </div>
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <img class="img-fluid mx-auto mb-3" src="{{ asset('img/galletahbd1.jpeg') }}" alt="">
                            <h5 class="font-weight-bold m-0">Galletas</h5>
                            <h4 class="font-weight-light mb-4">¡No hay que pensar dos veces para tardear con las
                                galletas fluffy!</h4>
                            <img class="img-fluid mx-auto mb-3" src="{{ asset('img/galletachocolateempaque1.jpeg') }}" alt="">
                            <h5 class="font-weight-bold m-0">Cajitas</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    @include('layouts.footer')


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
