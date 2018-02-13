@extends('layouts.app')

@section('contentheader_title', 'Atletas')
@section('contentheader_description', 'Inicio')

@section('content')
	
	<!-- Exportable Table -->
   	<div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        REGISTROS DE ATLETAS
                    </h2>
            	</div>
            	<div class="body">
                    @include('athlete.partials.table')
		        </div>
		    </div>
		</div>
	</div>
            
@endsection
