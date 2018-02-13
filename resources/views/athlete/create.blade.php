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
        <h2>REPRESENTANTE</h2>
    </div>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        BUSQUE AL REPRESENTANTE
                        <small>Inscripción del atleta</small>
                    </h2>
                </div>
                <div class="body">
                <div class="demo-masked-input">
                    <div class="row">
                        <input type="hidden" id="url" value="{{ route('representatives.store') }}">
                        <input type="hidden" value="{{ csrf_token() }}" id="token">

                        <div class="col-md-3">
                            <label class="form-label">NACINALIDAD</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <select name="nationality" id="nationality" class="form-control" required="">
                                        <option value="" disabled="" selected="">SELECCIONE</option>
                                        <option value="N">NACIONAL</option>
                                        <option value="E">EXTRANJERO</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <label class="form-label">CEDULA</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control dni" id="dni" required="">
                                </div> 
                            </div>
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="btn btn-primary" id="search">BUSCAR</a>
                        </div>  
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label">NOMBRE</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" id="name" disabled="" style="text-transform:uppercase;" onblur="this.value = this.value.toUpperCase();">
                                </div> 
                            </div>
                        </div>
                        <div class="col-md-6" >
                            <label class="form-label">APELLIDO</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" id="surname" disabled="" style="text-transform:uppercase;" onblur="this.value = this.value.toUpperCase();">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="representative-form" class="hide">

                        <div class="row">
                                <div class="col-md-6">
                                    <b>TELEFONO CONVENCIONAL</b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control phone-number" id="phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <b>TELEFONO MOVIL</b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control mobile-phone-number" id="movil" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">DIRECCIÓN</label>
                                        <div class="form-line">
                                            <textarea name="" id="address" class="form-control" style="text-transform:uppercase;" onblur="this.value = this.value.toUpperCase();"></textarea>
                                        </div>
                                    </div>  
                                </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="demo-radio-button">
                                    <input name="relationship" type="radio" id="radio_1" checked / class="radio-col-red">
                                    <label for="radio_1">Padre</label>
                                    <input name="relationship" type="radio" id="radio_2" class="radio-col-red"/>
                                    <label for="radio_2">Madre</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <a href="" class="btn btn-primary" id="registerRepresentative">GUARDAR</a>
                            </div>
                        </div>
                    </div>
                </div>
               </div>
            </div>
        </div>
    </div>
    
    <div class="block-header hide" id="title">
        <h2>REGISTRO DE ATLETA</h2>
    </div>

    <!-- Inline Layout | With Floating Label -->
    <div class="row clearfix hide" id="athleteForm">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        FICHA DE REGISTRO
                    </h2>
                </div>

                <div class="body">
                    <div class="demo-masked-input">
                        {!! Form::open(['route' => 'athlete.store', 'files' => true]) !!}
                            <div class="row clearfix">
                                @include('athlete.partials.fields')
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <button class="btn bg-blue m-t-15 waves-effect" type="submit">Guardar</button>
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

@section('modules')

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