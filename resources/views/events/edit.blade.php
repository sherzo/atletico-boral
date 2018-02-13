@extends('layouts.app')

@section('contentheader_title', 'Eventos')
@section('contentheader_description', 'Editar')


@section('content')

    <!-- Inline Layout | With Floating Label -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                    	EDITAR REGISTRO DE EVENTO REALIZADO
                        <small>({{ $events->activity->name }})</small>
                    </h2>
                </div>

                <div class="body">
                    <div class="demo-masked-input">
                        {!! Form::model($events, ['route' => ['events.update', $events], 'files' => false, 'method' => 'PUT']) !!}
                        
                            @include('events.partials.fields')
                  
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <button class="btn bg-blue m-t-15 waves-effect" type="submit">GUARDAR</button>
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Inline Layout | With Floating Label -->

@endsection

@section('ckeditor')
    <script src="{{ asset('plugins/ckeditor/ckeditor.js') }}"></script>
@endsection

@section('scripts')
    <script src="{{ asset('js/pages/forms/editors.js') }}"></script>
@endsection