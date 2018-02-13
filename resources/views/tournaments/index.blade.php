@extends('layouts.app')

@section('content')

    <div class="block-header">
        <h2>TORNEOS EN PROGRESO</h2>
    </div>

    <div class="row clearfix">
        @include('tournaments.partials.tournaments')
    </div>

    <div class="block-header">
        <h2>LISTADO DE GENERAL DE TORNEOS</h2>
    </div>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        TORNEOS CREADOS Y CULMINADOS
    					<small>(LISTADO GENERAL)</small>
                    </h2>
                </div>
                <div class="body">
                	@include('tournaments.partials.table')
                </div>
            </div>
        </div>
    </div>


@include('tournaments.partials.modals')

@endsection
