<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
    @include('layouts.partials.htmlheader')
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <!--<div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Cargando...</p>
        </div>
    </div>-->
    
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="BUSCAR...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    @include('layouts.partials.mainheader')
    <section>

        @include('layouts.partials.sidebar')

    </section>
    <section class="content">
        <div class="container-fluid" id="app">
            @yield('content')
        </div>
    </section>

    @include('layouts.partials.scripts')
</body>
</html>