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
	
	<!-- Exportable Table -->
   	<div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        EDICIÓN DE PROMOCIÓN DE PROGRAMA: {{ $promotion->page }}
                    </h2>
            	</div>
            	<div class="body">
                    {!! Form::model($promotion, ['route' => ['promotions.update', $promotion], 'method' => 'PUT']) !!}

                        @include('promotions.partials.fields')

                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <button class="btn bg-blue m-t-15 waves-effect" type="submit">ACTUALIZAR</button>
                            </div>
                        </div>

                    {!! Form::close () !!}
		        </div>
		    </div>
		</div>
	</div>
		                 
@endsection

@section('ckeditor')
    <script src="{{ asset('plugins/ckeditor/ckeditor.js') }}"></script>
@endsection

@section('scripts')
    <script src="{{ asset('js/pages/forms/editors.js') }}"></script>
@endsection