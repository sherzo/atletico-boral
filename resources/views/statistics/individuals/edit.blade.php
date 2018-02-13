@extends('layouts.app')

@section('contentheader_title', 'Estadísticas Individuales')
@section('contentheader_description', 'Edit')

@section('content')
	<div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                	<h2>
                        EDITAR ESTADÍSTICA INDIVIDUAL
                        <small>({{ $individual->action }})</small>
                    </h2>
                </div>

                <div class="body">
                    <div class="demo-masked-input">
                        {!! Form::model($individual, ['route' => ['individuals.update', $individual], 'files' => false, 'method' => 'PUT']) !!}
                            <div class="row clearfix">
                                @include('statistics.individuals.partials.fields')
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <button class="btn bg-red m-t-15 waves-effect" type="submit">VOLVER</button>
                                    <button class="btn bg-blue m-t-15 pull-right waves-effect" type="submit">ACTUALIZAR</button>
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