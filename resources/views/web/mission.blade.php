@extends('layouts.web')

	@section('title', 'Misión')
	
	@section('content')

			@component('web.components.header')
					Misión
			@endcomponent
	
		<div class="container">
			<div class="row">
				<div class="col m8 justify">
					<p>
						Nuestro compromiso es brindar a los estudiantes el más alto nivel de enseñanza e interacción mediante su formación en las áreas técnica, física, táctica, y psicológica, aplicando principios y valores de primer nivel.


					</p>
					
					<div class="row">
						<div class="col s6">
							<div class="card hoverable">
								<div class="card-image">
									<img src="{{ asset('img/nosotros/mision.jpg')}}" alt="" class="materialboxed">
									<div class="card-content">
										<b>Enseñanza en area física</b>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col s6">
							<div class="card hoverable">
								<div class="card-image">
									<img src="{{ asset('img/nosotros/mision-2.jpg')}}" alt="" class="materialboxed">
								</div>
								<div class="card-content">
									<b>Enseñanza en area técnica</b>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col m4 grey-text text-darken-1">
					@component('web.components.socialMedia')
					@endcomponent

					@component('web.components.aboutUs')
					@endcomponent
				</div>
			</div>
		</div>
	@endsection

