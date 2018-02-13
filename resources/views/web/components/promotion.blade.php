<div class="card">
	<div class="card-content center-align">
	<span class="card-title">{{ $promotion->title }}</span>
		{!! $promotion->content !!}
		
		@if(Gate::allows('promo', $promotion))
			<a href="#" class="btn waves-effect waves-light red darken-2 clear-text center-align">Ver solicitud</a>
		@else
			<a href="{{ route('applications.promotion', $promotion->id) }}" class="btn waves-effect waves-light red darken-2 clear-text center-align">Inscribete aquí</a>
		@endif
	</div>
</div>

