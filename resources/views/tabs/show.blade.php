@extends('layouts.app')

@section('contentheader_title', 'Pestañas')
@section('contentheader_description', 'Ver')

@section('content')
	<div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        VISTA DE PESTAÑA <small>({{ $tab->title }})</small>
                    </h2>
                </div>

                <div class="body">
                	@include('tabs.partials.view')
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Inline Layout | With Floating Label -->
@endsection