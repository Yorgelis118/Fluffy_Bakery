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
    @include('layouts.navbar')

    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-3 mt-lg-5">¿Qué es Fluffy Bakery?</h1>
            <div class="d-inline-flex align-items-center text-white">
            
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <h1 class="section-title position-relative text-center mb-5">Nuestro diccionario</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 py-5">
                    <h4 class="font-weight-bold mb-3">Sobre nosotros</h4>
                    <h5 class="text-muted mb-3">Nuestra repostería es una expresión de tu personalidad. Creamos tortas y postres personalizados, adaptados a tus gustos y necesidades, para que cada celebración sea única e irrepetible. Desde diseños temáticos hasta sabores exclusivos, nos esforzamos por hacer realidad tus sueños más dulces y convertir tus eventos en momentos inolvidables.

                    </h5>
                </div>
                <div class="col-lg-4" style="min-height: 400px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="{{ asset('img/galletanavidad1.jpeg') }}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4 py-5">
                    <h4 class="font-weight-bold mb-3">¡ALERTAS IMPORTANTES!</h4>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Puede ser realmente provocativo y lleno de amor</h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Galletas de todos los sabores que te podrían gustar</h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Y por cierto siempre habrá espacio para una más</h5>
                    <a href="" class="btn btn-primary mt-2">Mirar más</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative mb-5">Experienced & Most Famous Ice Cream Chefs</h1>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0 pb-5 pb-lg-0"></div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel team-carousel">
                        <div class="team-item">
                            <div class="team-img mx-auto">
                                <img class="rounded-circle w-100 h-100" src="{{ asset('img/brownie1.jpeg') }}" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded px-4 py-5" style="margin-top: -100px;">
                                <h3 class="font-weight-bold mt-5 mb-3 pt-5">Brownies</h3>
                                <h6 class="text-uppercase text-muted mb-4">¡De los sabores que más te gusten!</h6>
                                <div class="d-flex justify-content-center pt-1">
                                </div>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="team-img mx-auto">
                                <img class="rounded-circle w-100 h-100" src="{{ asset('img/alfajores9.jpeg') }}" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded px-4 py-5" style="margin-top: -100px;">
                                <h3 class="font-weight-bold mt-5 mb-3 pt-5">Alfajores</h3>
                                <h6 class="text-uppercase text-muted mb-4">Poquitos o muchos, lo importante es que sea a tu gusto.</h6>
                                <div class="d-flex justify-content-center pt-1">
                                </div>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="team-img mx-auto">
                                <img class="rounded-circle w-100 h-100" src="{{ asset('img/torta1.jpeg') }}" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded px-4 py-5" style="margin-top: -100px;">
                                <h3 class="font-weight-bold mt-5 mb-3 pt-5">Tortas</h3>
                                <h6 class="text-uppercase text-muted mb-4">Hay diferentes tipos de tortas y sobre todo, para la ocasión que tu desees.</h6>
                                <div class="d-flex justify-content-center pt-1">
                                </div>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="team-img mx-auto">
                                <img class="rounded-circle w-100 h-100" src="{{ asset('img/galletapistacho2.jpeg') }}" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded px-4 py-5" style="margin-top: -100px;">
                                <h3 class="font-weight-bold mt-5 mb-3 pt-5">Galletas</h3>
                                <h6 class="text-uppercase text-muted mb-4">Nuestro amplio catálogo de sabores de galletas, ¡es inexplicable! vas a querer comerlas todas.</h6>
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
