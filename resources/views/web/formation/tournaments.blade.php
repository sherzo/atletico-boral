@extends('layouts.web')

	@section('title', 'Programa para adultos')
	
	@section('content')
	
		@component('web.components.header')
				Torneos
		@endcomponent
		
		<div class="container">
			<div class="row">
				<div class="col m8 justify">
					<p>
						Torneos del anfitrión (inter-escolares, torneos abiertos).- Dos a tres veces al año organizamos torneos infanto-juveniles en nuestras instalaciones deportivas.  Los torneos se clasifican entre:

						<ul class="browser-default">
							<li>
								Torneos inter-escolares: con la participación de equipos de centros educativos y avalado por la Federación Deportiva Estudiantil del Guayas (FEDESTUDIANTIL).<br><br>
								<div class="row">
									<div class="col s6">
										<b>Categorías escolares</b>
										<ul class="browser-default">
											<li>Sub-8</li>
											<li>Sub-10</li>
											<li>Sub-12</li>
										</ul>
									</div>

									<div class="col s6">										
										<b>Categorías colegiales</b>
										<ul class="browser-default">
											<li>Cadetes 12 años</li>
											<li>Inferior 14 años</li>
											<li>Intermedio 16 años</li>
											<li>Superior 18 años</li>
										</ul>
									</div>
								</div>

								@component('web.components.cardImage')
									{{ asset('img/formacion/torneos.jpg') }}
								@endcomponent

								Este torneo es sin costo de inscripción y el arbitraje tiene un costo por partido entre:
								<br>
								<table class="bordered l4">
									<thead>
										<tr>
											<th>Categorías</th>
											<th>Costo</th>
										</tr>										
									</thead>									
									<tbody>										
										<tr>
											<td><b>Escolares</b></td>
											<td>USD10.00 – USD12.00</td>
										</tr>
										<tr>
											<td><b>Colegiales</b></td>
											<td>USD12.00 – USD14.00</td>
										</tr>
									</tbody>
								</table>
								<br>									  
								Este torneo se organiza entre Junio y Agosto de cada año.
							</li>
							<br>
							<li>
								Torneo Infanto-Juvenil: donde participan equipos barriales, escuelas de fútbol, clubes barriales, ligas cantonales, centros educativos.
								Próximos torneos 2017:
							</li>
						</ul>
					</p>
					<p><b>Información y fechas pendiente</b>
					AQUÍ LA PLANTILLA DE INSCRIPCION A LOS TORNEOS DEL ANFITRION</p>
					
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