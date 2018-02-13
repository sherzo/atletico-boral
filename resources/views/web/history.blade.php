@extends('layouts.web')

	@section('title', 'Historia')
	
	@section('content')

			@component('web.components.header')
					Historia
			@endcomponent

			<div class="container justify">
				<div class="row">
					<section>
						<div class="col m5">
							<p>
								La ciudad de Guayaquil, al igual que el resto del país es pelotera por tradición.  Mientras más recabamos en su historia, constatamos que este deporte siempre estuvo presente, aunque haya sido con una pelota de trapo, en una calle de tierra o de asfalto, con dos piedras en cada arco, y con el típico “para la bola, carro, carro, carro”.
								Lamentablemente hemos evidenciado que la mayoría de las escuelas de fútbol han surgido de una manera informal e improvisada, anteponiendo intereses personales por encima de su verdadero objetivo: el futuro de sus estudiantes.  
								Ante ello, era sumamente necesario que nuestra ciudad y país cuente con una real academia deportiva, que reorganice las fuerzas básicas de este y todos los deportes, y complemente en gran parte el déficit de formación deportiva profesional.  

							<p>
								La concepción de <b>Atlético Boral</b> surge con la integración de las primeras categorías infantiles Sub-9 y Sub-12 en Febrero del 2010, aprovechando las instalaciones deportivas con canchas sintéticas de primer nivel de parte de su fundador.  Las mencionadas categorías lograron una destacada participación en los Interbarriales de la Ciudad Deportiva Carlos Perez Perasso.  Esa motivación nos ha contagiado y empujado a crecer gozando actualmente de dos puntos de entrenamientos en la ciudad de Guayaquil.
							</p>
						</div>
						<div class="col m6">
							@component('web.components.cardImage')
								{{ asset('img/nosotros/historia.jpg')}}
							@endcomponent

					    @component('web.components.cardImage')
					    	{{ asset('img/nosotros/historia-2.jpg')}}
					    @endcomponent
						</div>
					</section>
				</div>
		</div>
	@endsection
	
	@section('scripts')
	@endsection
