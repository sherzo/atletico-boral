@extends('layouts.web')

	@section('title', 'Programa para adultos')
	
	@section('content')
	
		@component('web.components.header')
				Programa para adultos
		@endcomponent
		
		<div class="container">
			<div class="row">
				<div class="col m8 justify">
					<p>
						Ponemos a disposición de los más grandes, nuestros programas de reacondicionamiento físico en una forma divertida y sin recurrir a máquinas o pesos de gimnasio:

						<ul class="browser-default">
							<li>
								Futbolterapia para damas, es tu alternativa al cross-fit y gimnasios.  Aquí bajarás esas libras de más y ganarás habilidades que no sabías que poseías.  Todo en un ambiente sano y de pura diversión donde podrás conocer gente como tú.  Organízate, arma tu grupo, libérate del stress laboral y llega a casa rejuvenecida.
							</li>
							<li>
								Entrenamiento para varones, es para aquellos que actualmente no realizan actividad física alguna y desean recuperar estado físico, tonalidad, resistencia, bajar de peso, mejorar situación cardiaca, ayudar a reducir colesterol y triglicéridos, y adoptar una cultura deportiva que reduzca las probabilidades de incidencias de enfermedades.
							</li>
						</ul>
					</p>
					
					@if($promotion AND $promotion->status)
						@include('web.components.promotion')
					@endif

				</div>

				<div class="col m4 grey-text text-darken-2">
					@component('web.components.socialMedia')
					@endcomponent

					@component('web.components.aboutUs')
					@endcomponent
				</div>
			</div>
		</div>

	@endsection