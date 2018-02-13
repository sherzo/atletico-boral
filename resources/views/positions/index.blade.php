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
                    <small>(GENERALES)</small>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="{{ route('general.create') }}">AÑADIR NUEVA POSICIÓN</a></li>
                            </ul>
                        </li>
                    </ul>
            	</div>
            	<div class="body">
                    @include('positions.partials.table')
		        </div>
		    </div>
		</div>
	</div>

@endsection