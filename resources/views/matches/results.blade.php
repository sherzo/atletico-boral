@extends('layouts.app')

@section('content-html')
<style type="text/css">
    
    .vertical {
        position:relative;
        writing-mode: vertical-rl;
        transform: rotate(180deg);
        font-size: 10px;
    }

    th.cell:before {
        content: "XXXXXXXXXXXXXXXXXXX";
        color: white;

    }

</style>
@endsection

@section('content')

<div class="block-header">
	<h2>REGISTRO DE RESULTADO (PARTIDOS)</h2>
</div>

@php ($iteration = 0)

<!-- Advanced Form Example With Validation -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>CARGA DE RESULTADOS DE ENCUENTRO 
                    <small>({{ $match->local->name }} VS {{ $match->visitor->name }})</small>
                </h2>
            </div>
            <div class="body">
                {!! Form::open(['route' => ['results.load', $match], 'method' => 'POST', 'id' => 'wizard_with_validation']) !!}
                    
                    @include('matches.partials.local')

                    @include('matches.partials.visitor')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection
