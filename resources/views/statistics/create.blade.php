@extends('layouts.app')

@section('contentheader_title', 'Estadísticas Generales')
@section('contentheader_description', 'Edit')

@section('content')
	<div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                	<h2>
                        FICHA DE REGISTRO 
                        <small>(ESTADÍSTICA GENERAL)</small>
                    </h2>
                </div>

                <div class="body">
                    <div class="demo-masked-input">
                        {!! Form::open(['route' => 'generals.store', 'files' => false, 'method' => 'POST']) !!}
                            <div class="row clearfix">
                                @include('statistics.partials.fields')
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