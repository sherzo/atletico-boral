@extends('layouts.app')

@section('contentheader_title', 'Estadisticas Generales')
@section('contentheader_description', 'Inicio')

@section('content')

	<!-- Exportable Table -->
   	<div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        CONTENIDO DE REGISTROS DE ESTADÍSTICAS
                        <a href="{{ route('generals.create') }}" class="btn bg-blue btn-circle waves-effect waves-circle waves-light waves-float pull-right">
                            <i class="material-icons">add</i>
                        </a>
                    </h2>
                    <small>(GENERALES)</small>
            	</div>
            	<div class="body">
                    @include('statistics.partials.table')
		        </div>
		    </div>
		</div>
	</div>

    @include('statistics.modals.delete')

@endsection

@section('modules')
<script src="{{ asset('js/modules.js') }}"></script>
@endsection