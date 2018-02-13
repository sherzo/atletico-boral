@extends('layouts.app')

@section('content-html')

    <style type="text/css">
        #image-preview {
            height: 200px;
            position: relative;
            overflow: hidden;
            background-image: url("https://www.buscandonomes.com.br/_img/thumb-default.gif");
            background-size: 200px 170px;
            background-repeat: no-repeat;
            background-position: center;
        }
        #image-preview input {
            line-height: 200px;
            font-size: 200px;
            position: absolute;
            opacity: 0;
            z-index: 10;
        }
        #image-preview label {
            position: absolute;
            z-index: 5;
            opacity: 0.8;
            cursor: pointer;
            width: 200px;
            height: 30px;
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
        <h2>REGISTRO DE EQUIPO</h2>
    </div>

    <!-- Inline Layout | With Floating Label -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                	<h2>
                        FICHA DE REGISTRO
                        <small>(ATLÉTICO BORAL)</small>
                    </h2>
                </div>

                <div class="body">
                    <div class="demo-masked-input">
                        {!! Form::open(['route' => 'teams.store', 'files' => true]) !!}
                            <div class="row clearfix">
                                @include('teams.partials.fields')
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <button class="btn bg-red m-t-15 waves-effect" type="submit">VOLVER</button>
                                    <button class="btn bg-blue m-t-15 pull-right waves-effect" type="submit">GUARDAR</button>
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
@endsection