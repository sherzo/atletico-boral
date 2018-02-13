@extends('layouts.app')

@section('content-html')
 <!-- Sweet Alert Css -->
    <link href="{{ asset('/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet" />
    <!-- Bootstrap Select Css -->
    <link href="{{ asset('/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />
@endsection 

@section('content')
<div class="block-header">
    <h2>REGISTRO DE TORNEOS</h2>
</div>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    FICHA DE REGISTRO
                    <small>(NUEVO TORNEO)</small>
                </h2>
            </div>
            <div class="body">
                {!! Form::open(['route' => 'tournaments.store', 'id' => 'tournaments']) !!}
                    <div class="row clearfix">
                        @include('tournaments.partials.fields')
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button class="btn btn-primary" type="submit">Guardar</button>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection

@section('modules')
<script>
    $('.anfitrion').on('change', function(){
        var club = 'CLUB DEPORTIVO FORMATIVO ATLETICO BORAL'
        
        if($('.anfitrion').prop("checked")){
            $('.organizer').val('').val(club).attr('disabled', true);
        }else{
            $('.organizer').val('').attr('disabled', false);
        }
    });

    $(function(){
        $('#tournaments').validate({
            rules: {
                'checkbox': {
                    required: true
                },
                'gender': {
                    required: true
                }
            },
            highlight: function (input) {
            // Muestra el error
            $(input).parents('.form-line').addClass('error');
            },
            // Borral el error cuando se llena corectamente
            unhighlight: function (input) {
                $(input).parents('.form-line').removeClass('error');
            },
            // Renderiza el msj de error
            errorPlacement: function (error, element) {
                $(element).parents('.form-group').append(error);
            }
        });
    });
</script>

@endsection