@extends('layouts.web')
	
	@section('title', 'Categoría infanto-juvenil')

	@section('content')

		@component('web.components.header')
				Categoría infanto-juvenil
		@endcomponent
	
		<div class="container">
			<div class="row">
				<div class="col m8 justify">
					<div class="video-container">
		        <iframe width="853" height="480" src="//www.youtube.com/embed/O0uM5Y-zWtg" frameborder="0" allowfullscreen></iframe>
		      </div>
					<p>
						Abarca las categorías Iniciales (edades de 4 a 6 años), 2010 - 2009 - 2008 - 2007 - 2006 -2005 - 2004 -2003 - 2002 - 2001 - 2000 - 1999 - 1998 - 1997 - 1996.  El entrenamiento infanto-juvenil debe centrarse en la formación óptima de las destrezas y técnicas deportivas – motoras y en el crecimiento del acervo motor.  El fútbol formativo tiene varios componentes fundamentales para el desarrollo deportivo integral:
					</p>
					<ul class="browser-default">
						<li>
							La técnica.- es  la secuencia de movimientos experimentada, funcional y eficaz que sirve para resolver una tarea definida en una situación deportiva.  Entre los elementos técnicos del fútbol destacamos: destrezas con el balón, golpes con el pie, golpes con la cabeza, recepción de balón, conducción y gambeta, quite de balón, técnicas ofensivas y defensivas de arquero.
						</li>

						<li>
							La táctica.- es el arte de coordinar, disponer y emplear los deportistas de un equipo sobre el terreno.  Las tácticas en el fútbol tienen un alto grado de acción continua es decir que no está dividido en juegos aislados como en el fútbol americano.  Tenemos tácticas: generales de equipo, ofensivas en posesión de balón, defensivas con y sin posesión de balón, entre otras.
						</li>

						<li>
							La Preparación Física.- en el ámbito de las etapas formativas considera tanto las capacidades de condición física (fuerza, resistencia, velocidad, flexibilidad) como las capacidades de coordinación (reacción, orientación, readaptación, equilibrio, ritmo, acoplamiento, diferenciación y coordinaciones especiales (la técnica).
						</li>
					</ul>

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