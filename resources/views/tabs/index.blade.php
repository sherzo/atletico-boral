@extends('layouts.app')

@section('contentheader_title', 'Pestañas')
@section('contentheader_description', 'Inicio')

@section('content')

	<!-- Exportable Table -->
   	<div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        CONTENIDO DE SUB-PESTAÑAS ACTUALES EN EL NAVEGADOR <small>(PORTAL)</small>
                    </h2>
            	</div>
            	<div class="body">
                    @include('tabs.partials.table')
		        </div>
		    </div>
		</div>
	</div>

@endsection