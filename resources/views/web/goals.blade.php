@extends('layouts.web')

@section('title', 'Metas')

@section('content')

	@component('web.components.header')
			Metas
	@endcomponent

	<div class="container">
		<div class="row">
			<div class="col m8">
				<p>
					Está demostrado históricamente que la práctica deportiva fortalece los lazos humanos y sociales a la vez que contribuye con el acondicionamiento físico.  Nuestra propuesta institucional se enfoca en:
				</p>

				<ul class="browser-default">
					<li>
						Lograr un gran estado de salud de los estudiantes con la práctica deportiva.
					</li>
					<li>
						Contribuir y estimular a los niños a desarrollar una educación y formación humana más integral, inculcándoles valores a través de la disciplina del fútbol y el respeto a la reglas, todo de la mano y apoyo de sus padres.
					</li>
					<li>
						Desarrollar un elemento disuasivo y de prevención ante los diversos vicios y malos caminos presentes en la sociedad actual.
					</li>
					<li>
						Lograr una mejor psicomotricidad y rendimiento con el trabajo físico y técnico.
					</li>
					<li>
						Desarrollar el dominio de los fundamentos técnicos y tácticos del fútbol.
					</li>
					<li>
						Fomentar a los estudiantes a interactuar, a trabajar en equipo y a relacionarse con otros.
					</li>
				</ul>

				@component('web.components.cardImage')
					{{ asset('img/nosotros/mision-3.jpg') }}
				@endcomponent

				<div class="row">
					<div class="col s6">
						@component('web.components.cardImage')
							{{ asset('img/nosotros/metas.jpg')}}
						@endcomponent
					</div>

					<div class="col s6">
						@component('web.components.cardImage')
							{{ asset('img/nosotros/metas-2.jpg')}}
						@endcomponent
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

