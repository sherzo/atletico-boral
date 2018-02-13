@extends('layouts.app')

@section('contentheader_title', 'Usuarios')
@section('contentheader_description', 'Inicio')

@section('content')
	
	<!-- Exportable Table -->
   	<div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        REGISTROS DE USUARIOS
                    <a href="{{ route('users.create') }}" class="btn bg-blue btn-circle waves-effect waves-circle waves-light waves-float pull-right">
                            <i class="material-icons">add</i>
                    </a>
                    </h2>
                    <small>(REGISTROS)</small>
            	</div>
            	<div class="body">
                    @include('users.partials.table')
                    @include('users.modals.delete')
		        </div>
		    </div>
		</div>
	</div>
		                 
@endsection

