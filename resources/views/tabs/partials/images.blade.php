@extends('tabs.upload')

@section('images')

	@forelse($tab->imagesUpload as $key => $images)
	                            
	    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
	        <a href="{{ asset('storage/tabs/'. $images->url) }}" target="_blank">
	            <img class="img-responsive thumbnail" src="{{ asset('storage/tabs/'. $images->url) }}">
	        </a>

	        <p class="align-center"><a href="#" class="delete" data-url="{{ $images->url }}" data-id="{{ $tab }}" data-token="{{ csrf_token() }}">ELIMINAR</a></p>
	    </div>

	@empty

	@endforelse

@endsection