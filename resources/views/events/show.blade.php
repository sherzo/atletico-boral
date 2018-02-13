@extends('layouts.app')

@section('contentheader_title', 'Eventos')
@section('contentheader_description', 'Ver')

@section('content')
	<div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        VISTA DE EVENTO <small>({{ $events->title }})</small>
                    </h2>
                </div>

                <div class="body">
                	@include('events.partials.view')
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Inline Layout | With Floating Label -->
@endsection