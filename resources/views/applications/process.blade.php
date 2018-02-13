@extends('layouts.app')

@section('content-html')

    <style type="text/css">
        #image-preview {
            height: 200px;
            position: relative;
            overflow: hidden;
            background-image: url("http://base1.dyndns-server.com:8090/asemeh/wp-content/uploads/2015/01/nofoto.png");
            background-size: 200px 200px;
            background-repeat: no-repeat;
            background-position: center;
        }
        #image-preview input {
            line-height: 200px;
            font-size: 200px;
            position: absolute;
            opacity: 0;
        }
        #image-preview label {
            position: absolute;
            z-index: 5;
            opacity: 0.8;
            cursor: pointer;
            width: 200px;
            height: 50px;
            line-height: 50px;
            text-transform: uppercase;
            top: 20;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            text-align: center;
        }
    </style>

@endsection

@section('content')

	<div class="block-header">
        <h2>PROCESANDO INSCRIPCIÓN</h2>
    </div>

    <!-- Inline Layout | With Floating Label -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        {{ $athlete->fullname }}
                        <small>(ATLÉTICO BORAL)</small>
                    </h2>
                </div>

                <div class="body">
                    <div class="demo-masked-input">
                        <div class="row">
                            {!! Form::model($athlete, ['route' => ['athlete.update', $athlete], 'files' => true, 'method' => 'PUT']) !!}

                                @include('applications.partials.fieldsProcess')
                                
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <button class="btn bg-blue m-t-15 waves-effect" type="submit">Guardar</button>
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Inline Layout | With Floating Label -->

@endsection

@section('scripts')
    <!-- uploadPreview Plugin Js -->
    <script src="{{ asset('/plugins/uploadPreview/jquery.uploadPreview.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $.uploadPreview({
                input_field: "#image-upload",   // Default: .image-upload
                preview_box: "#image-preview",  // Default: .image-preview
                label_field: "#image-label",    // Default: .image-label
                label_default: "Subir Imagen",   // Default: Choose File
                label_selected: "",  // Default: Change File
                no_label: false,                // Default: false
                success_callback: null          // Default: null
            });
        });
    </script>
    @include('athlete.partials.js')
@endsection