@extends('layouts.app')

@section('contentheader_title', 'Promociones')
@section('contentheader_description', 'Inicio')

@section('content')
	
	<!-- Exportable Table -->
   	<div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        REGISTROS DE PROMOCIONES
                    </h2>
            	</div>
            	<div class="body">
                    @include('promotions.partials.table')
		        </div>
		    </div>
		</div>
	</div>
		                 
@endsection

@section('scripts')
    @include('promotions.partials.js')
@endsection