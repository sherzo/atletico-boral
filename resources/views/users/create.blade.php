@extends('layouts.app')

@section('contentheader_title', 'Usuarios')
@section('contentheader_description', 'Crear')

@section('content')

	<div class="block-header">
        <h2>REGISTRO DE USUARIOS</h2>
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
                        {!! Form::open(['route' => 'users.store', 'files' => false, 'method' => 'POST', 'class' => 'form_validate']) !!}
                                
                            @include('users.partials.fields')
                            

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Inline Layout | With Floating Label -->
    
@endsection