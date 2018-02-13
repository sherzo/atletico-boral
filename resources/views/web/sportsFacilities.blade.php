@extends('layouts.web')

	@section('title', 'Visión')
	
	@section('content')

			@component('web.components.header')
					Instalaciones deportivas
			@endcomponent
			<div class="container justify">		
				<div class="row">
					<div class="col m8">
						<p>					 
							Una de nuestras fortalezas es contar con instalaciones deportivas de primera, seguras, con gramado sintético, disponibles las 24 horas del día, con áreas comunales con mesas, sillas, televisores, baterías sanitarias, entre otros.  Nuestros puntos de entrenamiento son:
						</p>

			      <div class="card hoverable">
			        <div class="card-image">
			          <img src="{{ asset('img/nosotros/gallegos.jpg')}}">
			        </div>
			        <div class="card-content">
			          <span class="card-title">Sede Gallegos Lara:</span>
			          <p>Ubicada en el Km. 7 ½ Vía a Daule, diagonal a la estación de Metrovía Gallegos Lara</p>
			        </div>
			      </div>

			      <div class="card hoverable">
			        <div class="card-image">
			          <img src="{{ asset('img/nosotros/mapasingue.jpg') }}">
			        </div>
			        <div class="card-content">
			          <span class="card-title">Sede Mapasingue Oeste:</span>
			          <p>Ubicada en el Km. 5 Vía a Daule, Cdla. Mapasingue Oeste Av. 3ra y Calle 1ra, atrás de Avícola Fernández</p>
			        </div>
			      </div>						
					</div>
					<div class="col m4 grey-text text-darken-1">		
						@component('web.components.aboutUs')
						@endcomponent
				
						@component('web.components.socialMedia')
						@endcomponent
					</div>
				</div>
			</div>

	@endsection
	@section('scripts')
		@include('web.scripts.fadeImage')
		<script>
			$('.carousel.carousel-slider').carousel({fullWidth: true});
		</script>
	@endsection
