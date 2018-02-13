@extends('layouts.web')

@section('title', 'Folosofía')

@section('content')

	@component('web.components.header')
			Nuestra Filosofía
	@endcomponent

	<div class="container justify">
		<section>			
			<div class="row">
				<div class="col m5">
						<p>
						La Escuela basa su existencia en la exposición y acceso a un entrenamiento de fútbol profesional acelerando el crecimiento personal y atlético de los jóvenes. La Escuela ofrece una experiencia única, un paquete de entrenamiento de fútbol con lecciones de valores, respeto y disciplina que tendrán una influencia duradera y positiva en los jóvenes participantes.
					</p>

					@component('web.components.cardImage')
						{{ asset('img/nosotros/filosofia-2.jpg') }}
					@endcomponent
				</div>

				<div class="col m7">
					@component('web.components.cardImage')	
						{{ asset('img/nosotros/filosofia.jpg') }}
					@endcomponent
				</div>

			</div>
		</section>
	</div>

@endsection
