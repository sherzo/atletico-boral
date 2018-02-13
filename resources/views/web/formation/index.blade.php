@extends('layouts.web')

	@section('title', 'Formación deportiva')

	@section('content')

		@component('web.components.header')
				Formación deportiva
		@endcomponent

		<div class="container justify">
			<div class="row">
				<div class="col m8">
					<div class="carousel carousel-slider">
				    <a class="carousel-item" href="#one!"><img src="{{ asset('img/formacion/index-1.jpg') }}"></a>
				    <a class="carousel-item" href="#two!"><img src="{{ asset('img/formacion/index-1.jpg') }}"></a>
				    <a class="carousel-item" href="#three!"><img src="{{ asset('img/formacion/index-1.jpg') }}"></a>
				  </div>
			
					<p>
				  	Promovemos el progreso de cada estudiante con metas de muy alto nivel.  Los desafíos que los estudiantes tendrán a cada paso, serán sus incentivos de superación, hasta lograr el nivel de alto rendimiento que será la antesala para tomar la decisión más importante de sus vidas: 
					</p>
					
					<ul class="browser-default justify" >
						<li>
							Acceder formalmente al fútbol profesional nacional o extranjero, integrándose a un equipo de primera o segunda categoría, dentro del cual tendrá la oportunidad de demostrar toda su experiencia ganada a lo largo de los años en el Club Atlético Boral junto con toda la documentación de soporte, estadísticas de respaldo y las evidencias de los torneos y campeonatos preparativos y oficiales que desarrolló con la casaca albiroja; ó
						</li>
						<li>
							Calificar por mérito académico y deportivo a una beca deportiva (Athletic Scolarship) en una universidad en el extranjero, donde la representará en sus torneos oficiales.  Para este propósito la universidad exoneraría parcial o totalmente el costo de sus estudios universitarios.  Una vez dentro, tendrá el gran potencial de ser observado constantemente por cazatalentos de otras instituciones educativas o deportivas, e incluso por equipos profesionales de fútbol, todo esto mientras desarrolla su carrera universitaria.
						</li>
					</ul>
					<p>
						Para poder llegar a estos objetivos finales los estudiantes deberán demostrar excelente dotación deportiva SIEMPRE en conjunto con una excelencia académica.  El Club Formativo alentará al estudiante a progresar y evolucionar, no obstante debe quedar entendido de que no depende totalmente del Club el alcanzar estas metas, sino de la predisposición del estudiante a lograrlas.
					</p>				

					<h5>¿Cómo lo hacemos?</h5>

					<ul class="browser-default">
						<li>Partiendo de la inscripción inicial en el Club Formativo, se lo colocará en la respectiva categoría de acuerdo a su edad.</li>
						
						<li>Se abren las fichas estudiantil-deportiva que iremos nutriendo en el transcurso de su vida deportiva.</li>
						
						<li>Se abren registros de fichas médicas con evaluación progresiva de su condición y aptitud física.</li>
						
						<li>Se monitorea el nivel educación, mediante la revisión constante de las notas académicas y libretas de calificaciones.  </li>
						
						<li>Control de la nutrición deportiva, en base a los reportes médicos con el fin de coordinar con sus representantes el adecuado suministro nutricional en casa para alcanzar el biotipo deportista.</li>
						
						<li>En base a sus méritos y logros, una comitiva conformada por el profesor, director deportivo, director general, y presidente del club, decidirá cual estudiante califica para ser parte de los estudiantes élites que cumplen con el perfil de éxito hasta el último nivel.  </li>
						
						<li>Se notifica a los padres o representantes de tal selección y se procede a la formalización de los documentos de compromiso respectivos.</li>
						
						<li>A los estudiantes élite se les supervisará el rendimiento en el idioma inglés que reciban en su centro educativo.  Si el nivel de enseñanza del plantel educativo al que asiste el estudiante no está a la altura de las exigencias internacionales, el Club recomendará a los padres o representantes que opten por reforzar este componente educativo.</li>
					</ul>

					<p>
						Los documentos, historial e información de cada estudiante estarán bajo custodia de los archivos del Club Formativo y no estarán a libre disposición de ninguna institución pública o privada, nacional o extranjera, ni siquiera de sus propios padres.  Deben entenderse como archivos privados y confidenciales del Club Formativo y solo serán utilizados bajo consentimiento del estudiante y/o sus representantes.
					</p>
				</div>

				<div class="col m4 grey-text text-darken-2">
					@component('web.components.aboutUs')
					@endcomponent
					
					@component('web.components.socialMedia')
					@endcomponent
				</div>
			</div>
		</div>
@endsection
@section('scripts')
<script>
	$(document).ready(function(){
		$('.carousel.carousel-slider').carousel({fullWidth: true});
  });
</script>
@endsection