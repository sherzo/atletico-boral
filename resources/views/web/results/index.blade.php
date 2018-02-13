@extends('layouts.web')

@section('title', 'Encuetros y resultados')

@section('content')
	
	@component('web.components.header')
		Encuentros y Resultados
	@endcomponent
	
	<div class="container">
		<div class="row">
	    <div class="col s12">
	      <ul class="tabs tabs-fixed-width">
	    	@foreach($categories as $category)
	        	<li class="tab col s3"><a href="#{{ $category->id }}">{{ $category->category }}</a></li>
	    	@endforeach
	      </ul>
	    </div>
	    @foreach($categories as $category)
	    	<tournaments :category="{{ $category->toJson() }}" :url="'{{ url('/') }}'"></tournaments>

<!--
	    	<div id="cat{{ $category->id }}" class="col s12 mt-10">
	    		<h4>Torneos de la categoría {{ $category->category }}</h4>
	    		<div class="collection">
	    			@forelse($category->times->unique('tournament_id') as $time)
	    				<a href="#!" class="collection-item red-text text-lighten-2">{{ $time->tournament->name }}
							@if($time->tournament->type->id == 2)
								<span class="material-icons right-align" style="vertical-align: center; font-size: 16px;">flag</span>
							@endif
							<br>
							<small class="grey-text">{{ $time->tournament->type->name }}</small>
	    				</a>
	    			@empty
	    				<h4>Esta categoría no participado en ningún torneo hasta ahora</h4>
	    			@endforelse
	    		</div>		
	    	</div>
-->
	    @endforeach
	    
	  </div>
	</div>
@endsection