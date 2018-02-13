@extends('layouts.web')

@section('title', 'Acerca de')

@section('content')

		@component('web.components.header')
				Acerca de nosotros
		@endcomponent
	
		<div class="container justify">
			<div class="row">
				<section>
					<div class="col m5">
						<p>
							El deporte es un componente fundamental en la educación física infantil, seguramente el más importante en la vida de un niño, favoreciendo y estimulando los demás procesos de aprendizaje en forma natural.
						</p>
						
						<p>		
							<b>El Club Especializado Formativo Deportivo Atlético Boral es un centro de formación de jugadores infanto-juveniles, en el que se inculca conocimientos técnicos y disciplinarios combinados con la práctica deportiva y participación en torneos preparativos y oficiales con el fin de proporcionarles una base primordial hacia la inserción en clubes de segunda y primera división del fútbol nacional e internacional.</b>  Abrimos las puertas a todos los niños y jóvenes que quieran potencializar y perfeccionar sus habilidades futbolísticas.
						</p>
					</div>
					
					<div class="col m7">
						<div class="card hoverable">
				      		<div class="card-image">
							<img id="img" src="{{ asset('img/nosotros/acerca-de.jpg') }}" class="responsive-img materialboxed">
							</div>
							<div class="card-content">
				         		<b>Club Especializado Formativo Deportivo Atlético Boral</b> 
							</div>
				     </div>
				   </div>
				</section>
			</div>
		</div>
@endsection

