@extends('layouts.web')

	@section('title', 'Objetivos')
	
	@section('content')

			@component('web.components.header')
					Objetivos
			@endcomponent

			<div class="container">
				<div class="row">
					<div class="col m8 ">
						<p class="justify">
							<b>Atlético Boral</b> tiene como objetivos fundamentales, en primer lugar la <b>formación humana y social</b>, y en segundo lugar la <b>formación deportiva profesional</b> de los jóvenes estudiantes, exaltando siempre el sentido responsable y lúdico a la actividad realizada, contribuyendo a la creación de una sociedad más sana por actividad y acondicionamiento físico, y aumentando el nivel del deporte nacional y repotenciándolo a mediano y largo plazo.
						</p>
						<div class="row">
							<div class="col s6">	
								<div class="card hoverable">
					        <div class="card-image">
					          <img src="{{ asset('img/nosotros/objetivos-1.jpeg') }}" class="materialboxed">
					        </div>
					        <div class="card-content">
					          <b>Formación humana y social</b>
					        </div>
					      </div>
							</div>
							<div class="col s6">	
								<div class="card hoverable">
					        <div class="card-image">
					          <img src="{{ asset('img/nosotros/objetivos-2.jpeg') }}" class="materialboxed">
					        </div>
					        <div class="card-content">
										<b>Formación deportiva profesional</b>
					        </div>
					      </div>
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
