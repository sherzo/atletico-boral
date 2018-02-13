@extends('layouts.app')

@section('contentheader_title', 'Posiciones')
@section('contentheader_description', 'Inicio')

@section('content')

	<!-- Exportable Table -->
   	<div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        CONTENIDO DE REGISTROS DE POSICIONES
                    </h2>
                    <small>(INDIVIDUALES)</small>
            	</div>
            	<div class="body">
                    @include('positions.individual.partials.table')
		        </div>
		    </div>
		</div>
	</div>

@endsection