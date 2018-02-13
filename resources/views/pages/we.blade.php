@extends('layouts.web')

@section('title', 'Nosotros')

@section('content')

	@component('web.components.header')
		{{ $we->title }}
	@endcomponent

	@php ($i = 1)

	<div class="section-container container">
		<div class="row">
		<hr>
			<div class="col s12 m12 l7 xl7">
				<div class="blog-item-wrapper">
					{!! $we->content !!}
				</div>
				<hr>
					{{ $we->updated_at }}
				<hr>
				<div class="video-container">
				    <iframe width="853" height="480" src="{{ (empty($we->url)) ? '' : $we->url }}" frameborder="0" allowfullscreen></iframe>
			    </div>
			</div>
			<div class="col s12 m12 l7 xl5">
				@foreach($we->imagesUpload as $image)
				<div class="card">
            		<div class="card-image">
              			<img class="materialboxed" data-caption="{{ $we->title }}" width="250" src="{{ asset('storage/tabs/'. $image->url) }}">
            		</div>
            		<div class="card-action">
              			<a href="#">#{{ $i++ }}</a>
            		</div>
          		</div>
          		@endforeach
			</div>
		<hr>
		</div>
	</div>

@endsection

@section('scripts')
<script>	
    $(document).ready(function(){
    	$('.materialboxed').materialbox();
  	});
</script>
@endsection