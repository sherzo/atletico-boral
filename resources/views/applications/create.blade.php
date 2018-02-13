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
						@if($promotion->page != 'ADULTO' OR !$user->representative)
							@if(!$user->representative)
					       	<p id="forMe">
					            <input type="checkbox" name="me" id="me" class="filled-in"/>
					            <label for="me" class="tooltipped" data-position="bottom" data-delay="0" data-tooltip="Debes ser mayor de edad">Selecciona si la inscripción es para ti</label>
					         </p>
					         @endif
					        <hr><br>
	    	
							@include('applications.partials.fieldsRepresentative')
						
						@endif

							@include('applications.partials.fieldsAthlete')
    
				    </div>
				</div>

			</div>
		</div>
	</div>

	@include('applications.partials.modal')
	
@endsection

@section('scripts')
	@include('applications.partials.js')
@endsection