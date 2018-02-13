@extends('layouts.web')

@section('title', 'Inicio')

@section('content')

    @include('web.home.slider')

    <!-- Section últimos resultados -->
    @include('web.home.sectionResults')
    
    <!-- Section próximos partidos -->
    @include('web.home.sectionNextGames')

    <!-- Section de jugadores -->
    @include('web.home.sectionPlayers')

    <!-- Section de tabla de posiciones y entradas recientes-->
    @include('web.home.sectionTablePositions')

@endsection

@section('scripts')
    <script>
        $('.slider').slider();
        
        @if(session('message'))
            Materialize.toast('Se realizó su solicitud, revise su correo electrónico', 6000, 'red darken-3');
        @endif
    </script>
    
@endsection
