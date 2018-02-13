@extends('layouts.web')
	
	@section('title', 'Categoría infanto-juvenil')

	@section('content')

		@component('web.components.header')
				Categoría femenina
		@endcomponent
	
		<div class="container">
			<div class="row">
				<div class="col m8 justify">
					
					@component('web.components.cardImage')
						{{ asset('img/formacion/femeninas.jpg') }}
					@endcomponent
					
					<p>
						Las mujeres son pilar fundamental del hogar, la familia, y por supuesto del deporte.  Dirigido a <span class="red-text">
							texto pendiente
						</span>
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