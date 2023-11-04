<!doctype html>
<html class="no-js" lang="es">

<head>
    <meta charset="utf-8">
    <!--====== Title ======-->
    <title>{{$organizacion->titulo}}</title>
    <meta name="description" content="{{$organizacion->descripcion}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{'organizacion/imagenes/'.$organizacion->icono}}" type="image/webp">
    <!-- CSS
    ============================================ -->
    <!--===== Vendor CSS (Bootstrap & Icon Font) =====-->
    <link rel="stylesheet" href="edumate/assets/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="edumate/assets/css/plugins/fontawesome.min.css">
    <link rel="stylesheet" href="edumate/assets/css/plugins/default.css">
    <!--===== Plugins CSS (All Plugins Files) =====-->
    <link rel="stylesheet" href="edumate/assets/css/plugins/animate.min.css">
    <link rel="stylesheet" href="edumate/assets/css/plugins/slick.css">
    <link rel="stylesheet" href="edumate/assets/css/plugins/magnific-popup.css">

    <!--- owl carousel CSS-->
    <link rel="stylesheet" href="componentes/owlcarousel/css/owl.carousel.css" />

    <!--====== Main Style CSS ======-->
    <!-- <link rel="stylesheet" href="edumate/assets/css/style.css"> -->
    <link rel="stylesheet" href="edumate/assets/css/style.css">
</head>

<body>
    <!--====== Header Start ======-->
    <header class="header-area">
        <div class="header-top">
            <div class="container">
                <div class="header-top-wrapper d-flex flex-wrap justify-content-sm-between">
                    <div class="header-top-left mt-10">
                        <ul class="header-meta">
                            <li class="center"><h2 class="text-white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ambo "Tierra Bella y Generosa"</h2></li>
                        </ul>
                    </div>
                    <div class="header-top-right mt-1">
                        <div class="header-link">
                            <a class="notice" href="{{route('intranet')}}">Intranet</a>
                            <a data-animation="fadeInUp" data-delay="1s" class="main-btn p-2 bg-white" target="_blank" href="https://www.transparencia.gob.pe/enlaces/pte_transparencia_enlaces.aspx?id_entidad=12005"><img src="{{asset('storage/imagenes/portaltransparencia.png');}}" width="90px" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <x-navigation :organizacion="$organizacion" :menus="$menus"></x-navigation> --}}
        <div>
            <div id="navigation" class="navigation navigation-landscape">
                <div class="container position-relative">
                    <div class="row align-items-center">
                        <div class="col-lg-2">
                            <div class="header-logo">
                                <a href="/"><img src="{{asset('storage/imagenes/'.$organizacion->logo);}}" width="120" height="" alt="Logo"></a>
                            </div>
                        </div>
                        <div class="col-lg-8 position-static">
                            <div class="nav-toggle"></div>
                            <nav class="nav-menus-wrapper">
                                <ul class="nav-menu">
                                    @foreach($menus as $menuItem)
                                        <li>
                                            <a href="{{ count($menuItem->children) ? '#' : $menuItem->slug }}" class="@if(str_starts_with(Route::currentRouteName(), $menuItem->ruta)) active @endif">{{ $menuItem->nombre }}</a>
                                            @if(count($menuItem->children))
                                                @include('nav', ['menuItems' => $menuItem->children, 'class' => 'nav-dropdown nav-submenu'])
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            </nav>
                        </div>
                        <div class="col-lg-2 position-static">
                            <div class="header-search">
                                <form action="#">
                                    <input type="text" placeholder="Search">
                                    <button><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!--====== Header Ends ======-->


    @yield('body-content')

    
    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->

    <!--====== Jquery js ======-->
    <script src="edumate/assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="edumate/assets/js/vendor/modernizr-3.7.1.min.js"></script>

    <!--====== All Plugins js ======-->
    <script src="edumate/assets/js/plugins/popper.min.js"></script>
    <script src="edumate/assets/js/plugins/bootstrap.min.js"></script>
    <script src="edumate/assets/js/plugins/slick.min.js"></script>
    <script src="edumate/assets/js/plugins/jquery.magnific-popup.min.js"></script>
    <script src="edumate/assets/js/plugins/imagesloaded.pkgd.min.js"></script>
    <script src="edumate/assets/js/plugins/isotope.pkgd.min.js"></script>
    <script src="edumate/assets/js/plugins/wow.min.js"></script>
    <script src="edumate/assets/js/plugins/ajax-contact.js"></script>


<!-- owl-carousel min js  --> 
<script src="componentes/owlcarousel/js/owl.carousel.js"></script> 

<!-- scripts js --> 
<script src="componentes/owlcarousel/js/scripts.js"></script>


    <!--====== Main Activation  js ======-->
    <script src="edumate/assets/js/main.js"></script>
    @routes
    {{-- @vite(['resources/js/app.js']) --}}
</body>

</html>



