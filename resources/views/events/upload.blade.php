@extends('layouts.app')

@section('content')

	<div class="block-header">
        <h2>EDICIÓN DE IMAGENES DE EVENTO</h2>
    </div>

    <!-- Inline Layout | With Floating Label -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        {{ $events->title }}
                        <small>(ATLÉTICO BORAL)</small>
                    </h2>
                </div>
                <div class="body">
                    <div class="demo-masked-input">
                        {!! Form::open(['route' => ['events.file', $events], 'files' => 'true', 'id' => 'frmFileUpload', 'class' => 'dropzone', 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
                        <div class="row clearfix align-center">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <button class="btn btn-block btn-lg btn-primary waves-effect" id="submit-all" type="submit">SUBIR</button>
                            </div>
                        </div>
                        <div class="row clearfix">
                            @include('events.partials.file')
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        IMAGENES SUBIDAS
                    </h2>
                </div>

                <div class="body">
                    @forelse($events->imagesUpload as $images)

                        <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <a href="../../images/image-gallery/1.jpg" data-sub-html="Demo Description" target="_blank">
                                    <img class="img-responsive thumbnail" src="../../images/image-gallery/thumb/thumb-1.jpg">
                                </a>
                            </div>
                        </div>
                        
                    @empty
                        
                        <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                            <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 col-lg-offset-3">
                                <a href="http://www.tea-tron.com/antorodriguez/blog/wp-content/uploads/2016/04/image-not-found-4a963b95bf081c3ea02923dceaeb3f8085e1a654fc54840aac61a57a60903fef-584x276.png" data-sub-html="Not found" target="_blank">
                                    <img class="img-responsive thumbnail" src="http://www.tea-tron.com/antorodriguez/blog/wp-content/uploads/2016/04/image-not-found-4a963b95bf081c3ea02923dceaeb3f8085e1a654fc54840aac61a57a60903fef-584x276.png">
                                </a>
                            </div>
                        </div>

                    @endforelse
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Inline Layout | With Floating Label -->

@endsection
