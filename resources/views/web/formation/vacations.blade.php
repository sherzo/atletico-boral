@extends('layouts.web')
	
	@section('title', 'Categoría infanto-juvenil')

	@section('content')

		@component('web.components.header')
				Vacacionales Multi-disciplinas
		@endcomponent
	
		<div class="container">
			<div class="row">
				<div class="col m8 justify">
					<p>
						Nos especializamos por brindar los vacacionales multi-disciplinas deportivas más integrales y divertidos de la ciudad.  Somos la mejor alternativa para el sano esparcimiento de su hijo, con actividades lúdicas que abarcan las siguientes disciplinas:

						<ul class="browser-default">
							<li>Fútbol</li>
							<li>Natación</li>
							<li>Arte y manualidades</li>
							<li>Volleyball</li>
							<li>Defensa Personal</li>
						</ul>

						Los vacacionales los desarrollamos en nuestros dos complejos deportivos, usted elige la ubicación que más le convenga por distancia.
					</p>

					<div class="row">
						<div class="col s6">
							@component('web.components.cardImage')
								{{ asset('img/formacion/vacacional.jpg')}}
							@endcomponent
						</div>

						<div class="col s6">
							@component('web.components.cardImage')
								{{ asset('img/formacion/vacacional-2.jpg')}}
							@endcomponent
						</div>
					</div>

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