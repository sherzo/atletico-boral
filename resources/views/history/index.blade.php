@extends('layouts.app')

@section('contentheader_title', 'Equipos')
@section('contentheader_description', 'Inicio')

@section('content')
	
	<!-- Exportable Table -->
   	<div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        REGISTROS DE ACCIONES 
                    </h2>
                    <small>(HISTORIAL)</small>
            	</div>
            	<div class="body">
                    @include('history.partials.table')
		        </div>
		    </div>
		</div>
	</div>
		                 
@endsection

