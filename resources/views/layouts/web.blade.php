<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="robots" content="index">
    <meta name="googlebot" content="index">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- metas para twitter -->
    {{-- <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@MarzoProducciones">
    <meta name="twitter:creator" content="@MarzoProducciones">
    <meta name="twitter:title" content="Marzo Producciones Group "> --}}
    <meta name="twitter:description"
        content="We are a local family owned , full service construction company that has been serving the state of Utah for over 20 years.">
    <!-- <meta name="twitter:image" content="http://graphics8.nytimes.com/images/2012/02/19/us/19whitney-span/19whitney-span-articleLarge.jpg">⁄ -->
    <!-- metas para facebook -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:url" content="https://aplusgcontractors.com" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Aplus General Contractors" />
    <meta property="og:description"
        content="We are a local family owned, full service construction company that has been serving the state of Utah for over 20 years." />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>A Plus G Contractors</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    {{-- Bootstrap --}}
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,500;0,700;0,900;1,100&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- animaciones  -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- sweetalert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style> .bz-bdg{width: 230px;}.bz-bdg>a{display: block;font-family: Helvetica;font-size: 9px;font-weight: 500;text-align: center;margin-top: 4px; color: #484848;line-height: 10px;}.bz-bdg .small-label {margin-top:-12px;padding: 0 10px;}</style>
</head>

<body class="body">
    <div id="app">
        <!-- Top Navigation Menu -->
        <div class="topnav">
            <a href="#home" class="active">
                <img id="logo_pq" src="{{ asset('img/logowhite_snletra.png') }}" alt="small icon mobile"
                data-aos="flip-left">
            </a>
            <div id="myLinks" class="text-center">
                <a href="#home">Home</a>
                <a href="#about">About</a>
                <a href="#services">Services</a>
                <a href="#contact">Contact</a>
                <a href="#testimonials">Testimonials</a>
            </div>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        <div class="container-fluid nav_top">
            <div class="container">
                <div class="row">
                    <div class="col-2 mt-2">
                        <img id="logo_pq" src="{{ asset('img/logowhite_snletra.png') }}" alt="" width="40"
                            data-aos="flip-left">
                    </div>
                    <div class="col-8 menu-nav mt-5">
                        <ul class="menu-ul">
                            <li class="menu-list"><a href="#container-ban" class="menu-list_a text-uppercase">Home</a>
                            </li>
                            <li class="menu-list"><a href="#horario" class="menu-list_a text-uppercase">About </a>
                            </li>
                            <li class="menu-list"><a href="#hospedaje" class="menu-list_a text-uppercase">Services</a>
                            </li>
                            <li class="menu-list"><a href="#mesa_regalos" class="menu-list_a text-uppercase">Contact</a>
                            </li>
                            <li class="menu-list"><a href="#rsvp" class="menu-list_a text-uppercase">Testimonials</a>
                            </li>
                            {{-- <li class="menu-list"><a href="#que_hacer" class="menu-list_a">¿QUÉ HACER?</a></li>
                            <li class="menu-list"><a href="#" class="menu-list_a" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop_faq">FAQS</a></li> --}}
                        </ul>
                    </div>
                    <div class="col-2">
                        <img src="{{ asset('img/face.png') }}" alt="" width="18" id="facebook">
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="row my-3 name_txt">
            <div class="col-12  logo_content">
                <img id="first_logo" src="img/logo.png" alt="A plus general contractors logo">
            </div>
        </div> --}}
        <main class="py-1">
            @yield('content')
            @extends('layouts.footer')
        </main>
    </div>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000
    });
</script>
<script>
    $(function() {

        var $body = $(document);
        $body.bind('scroll', function() {
            // "Desactivar" el scroll horizontal
            if ($body.scrollLeft() !== 0) {
                $body.scrollLeft(0);
            }
        });
    });
</script>
<script>
    function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>
</html>
