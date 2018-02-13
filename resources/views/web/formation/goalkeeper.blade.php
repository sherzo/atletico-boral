@extends('layouts.web')
	
	@section('title', 'Categoría infanto-juvenil')

	@section('content')

		@component('web.components.header')
				Escuela de Arqueros
		@endcomponent
	
		<div class="container">
			<div class="row">
				<div class="col m8 justify">
					<p>
						Dirigido a niños y jóvenes de 6 a 18 años que deseen formarse, prepararse y perfeccionarse en el desarrollo específico de <b>guardameta</b>.  El entrenamiento se basa en técnicas específicas para un golero orientando el entrenamiento al desarrollo de todas las virtudes que éste requiere.
					</p>

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