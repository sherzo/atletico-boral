@extends('layouts.app')

@section('contentheader_title', 'Estadísticas Individuales')
@section('contentheader_description', 'Inicio')

@section('content')

	<!-- Exportable Table -->
   	<div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        CONTENIDO DE REGISTROS DE ESTADÍSTICAS
                        <a href="{{ route('individuals.create') }}" class="btn bg-blue btn-circle waves-effect waves-circle waves-light waves-float pull-right">
                            <i class="material-icons">add</i>
                        </a>
                    </h2>
                    <small>(INDIVIDUALES)</small>
            	</div>
            	<div class="body">
                    @include('statistics.individuals.partials.table')
		        </div>
		    </div>
		</div>
	</div>

    @include('statistics.modals.destroy')

@endsection

@section('modules')
<script src="{{ asset('js/modules.js') }}"></script>
@endsection
