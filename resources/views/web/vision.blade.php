@extends('layouts.web')

	@section('title', 'Visión')
	
	@section('content')

			@component('web.components.header')
					Visión
			@endcomponent
			<div class="container justify">
				<div class="row">
					<div class="col m8">
						<p>
							Ser la Escuela de Fútbol de mayor prestigio e integral en su campo de enseñanza, con resultados positivos que salten a la vista en la práctica, siempre de la mano de los mejores valores morales fundamentales para la integración de una sociedad productiva, de ejemplo y de desarrollo.
						</p>

						<div class="row">
							<div class="col s6">
								@component('web.components.cardImage')	
									{{ asset('img/nosotros/vision.jpg') }}
								@endcomponent
							</div>
							
							<div class="col s6">
								@component('web.components.cardImage')	
									{{ asset('img/nosotros/vision-2.jpg') }}
								@endcomponent

								@component('web.components.cardImage')	
									{{ asset('img/nosotros/vision-3.jpg') }}
								@endcomponent

								@component('web.components.cardImage')	
									{{ asset('img/nosotros/vision-4.jpg') }}
								@endcomponent
							</div>
						</div>
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
