<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('img/favicon/apple-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('img/favicon/apple-icon-60x60.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/favicon/apple-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/favicon/apple-icon-76x76.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/favicon/apple-icon-114x114.png') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/favicon/apple-icon-120x120.png') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('img/favicon/apple-icon-144x144.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/favicon/apple-icon-152x152.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon/apple-icon-180x180.png') }}">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('img/favicon/android-icon-192x192.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('img/favicon/favicon-96x96.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('img/favicon/manifest.json') }}">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="{{ asset('img/favicon/ms-icon-144x144.png') }}">
        <meta name="theme-color" content="#ffffff">
        <title>Atlético Boral - @yield('title')</title>
        <!-- Styles -->
        <!-- Estilos de la aplicación compilados -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://cdn.materialdesignicons.com/1.9.32/css/materialdesignicons.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Scripts -->
            
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>

        <!-- Add Scripts -->
    </head>
    <body >
        @include('web.navigation')    
        <div id="app">
            @yield('content')
        </div>

        <footer class="page-footer">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12 white-text">
                        @component('web.components.aboutUs')
                        @endcomponent
                    </div>
                    <div class="col l4 offset-l2 s12 thin-text">
                        <h5 class="white-text">CONTACTO</h5>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © Copyright 2017

                    <span class="right">
                        <a class="grey-text text-lighten-4 " href="http://olnewservi.com.ve">-</a>
                    </span>
                </div>
            </div>
        </footer>
        
        <script src="{{ asset('js/app.js') }}"></script>
        <script type="text/javascript">
            $(document).ready(function()
            {
                var sv = $(document).scrollTop();
                var shrinkHeader = 130;

                if ( sv >= shrinkHeader) 
                {
                    $('.header').addClass('shrink grey darken-for navigation-top');
                    $('.header').removeClass('nav-top');
                }

                $(window).scroll(function() 
                {
                    var scroll = getCurrentScroll();
                    if ( scroll >= shrinkHeader ) 
                    {
                        $('.header').addClass('shrink grey darken-for navigation-top');
                        $('.header').removeClass('nav-top');
                    }else{
                        $('.header').addClass('nav-top');
                        $('.header').removeClass('shrink grey darken-for');
                    }
                });

                
                function getCurrentScroll() 
                {
                    return window.pageYOffset || document.documentElement.scrollTop;
                }
            });
        </script>
        <script>
            /*
            * jQuery para la navegación
            */
            $(document).ready(function()
            {
                $('.dropdown-button').dropdown({
                  inDuration: 300,
                  outDuration: 225,
                  constrainWidth: true, // Does not change width of dropdown to that of the activator
                  hover: true, // Activate on hover
                  gutter: 10, // Spacing from edge
                  belowOrigin: true, // Displays dropdown below the button
                  alignment: 'left', // Displays dropdown with edge aligned to the left of button
                  stopPropagation: true // Stops event propagation
                });

                $('.button-collapse').sideNav();
                
            });
        </script>
        @yield('scripts')
    </body>
</html>
