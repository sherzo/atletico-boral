@extends('layouts.app')

@section('content')

	<div class="block-header">
        <h2>EDICIÓN DE IMAGENES DE PESTAÑA</h2>
    </div>

    <input type="hidden" name="id" id="tab" value="{{ $encode }}">

    <!-- Inline Layout | With Floating Label -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        {{ $tab->title }}
                        <small>(ATLÉTICO BORAL)</small>
                    </h2>
                </div>
                <div class="body">
                    <div class="demo-masked-input">
                        {!! Form::open(['route' => ['tabs.file', $tab], 'files' => 'true', 'id' => 'frmFileUpload', 'class' => 'dropzone', 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
                        <div class="row clearfix align-center">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <button class="btn btn-block btn-lg btn-primary waves-effect" id="submit-all" type="submit">SUBIR</button>
                            </div>
                        </div>
                        <div class="row clearfix">
                            @include('tabs.partials.file')
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @if(count($tab->imagesUpload) > 0)

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        IMAGENES SUBIDAS
                    </h2>
                </div>

                <div class="body">
                    <div class="list-unstyled row clearfix" id="images">
                        @yield('images')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Inline Layout | With Floating Label -->

    @endif

@endsection
