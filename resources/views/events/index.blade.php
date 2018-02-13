@extends('layouts.app')

@section('contentheader_title', 'Eventos')
@section('contentheader_description', 'Inicio')

@section('content')

	<!-- Exportable Table -->
   	<div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        CONTENIDO DE EVENTOS REGISTRADOS 
                    </h2>
                    <ul class="header-dropdown m-r--5">
                        <li>
                            <a href="{{ route('events.create') }}" data-toggle="tooltip" data-placement="top" title="Añadir evento">
                                <i class="material-icons">add_circle_outline</i>
                            </a>
                        </li>
                    </ul>
            	</div>
            	<div class="body">
                    @include('events.partials.table')
		        </div>
		    </div>
		</div>
	</div>

@endsection