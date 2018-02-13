@extends('layouts.app')

@section('contentheader_title', 'Promociones')
@section('contentheader_description', 'Inicio')

@section('content')
	
	<!-- Exportable Table 
   	<div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        SOLICITUDES DE LOS USUARIOS
                    </h2>
            	</div>
            	<div class="body">
                    <div class="col-md-6 col-xs-12">
                        Procesadas
                    </div>
                    <div class="col-md-6 col-xs-12">
                        Pendientes
                    </div>
		        </div>
		    </div>
		</div>
	</div>
    -->
    <div class="row clearfix">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <a href="{{ route('applications.waiting')}}" style="text-decoration: none;">
                <div class="info-box-3 bg-red hover-zoom-effect">
                    <div class="icon">
                        <i class="material-icons">access_time</i>
                    </div>
                    <div class="content">
                        <div class="text">PENDIENTES</div>
                        <div class="number">{{ $waitings->count() }}</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <a href="{{ route('applications.process')}}" style="text-decoration: none;">    
                <div class="info-box-3 bg-grey hover-zoom-effect">
                    <div class="icon">
                            <i class="material-icons">done_all</i>
                    </div>
                    <div class="content">
                        <div class="text">PROCESADAS</div>
                        <div class="number">{{ $process->count() }}</div>
                    </div>
                </div>
            </a>
        </div>                 
    </div>
@endsection