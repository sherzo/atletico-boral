@extends('layouts.web')

@section('title', 'Formación | promoción')

@section('content')
	
	@component('web.components.header')
		Inscripción en linea
	@endcomponent
	
	<div class="container">
		<div class="row">
			<div class="col m12">
				<h5></h5>

				<div class="card red darken-3 white-text">
		            <div class="card-content">
		              <span class="card-title">{{ mb_strtolower($promotion->title, 'UTF-8') }}</span>
		              <p class="">Al registrarte obtendras: {{ mb_strtolower($promotion->promotion, 'UTF-8') }}</p>
		            </div>
		        </div>
				
				<br>
					
				<div class="card">
				  <div class="card-content">
		                <div class="demo-masked-input">
    						@include('applications.partials.fieldsInscription')		
				  		</div>
				  </div>
				</div>

			</div>
		</div>
	</div>	
@endsection

@section('scripts')
	<!-- Input Mask Plugin Js -->
	<script src="{{ asset('plugins/jquery-inputmask/jquery.inputmask.bundle.js') }}"></script>
	@include('applications.partials.inscriptionJs')
@endsection