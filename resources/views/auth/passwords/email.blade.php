@extends('layouts.web')

@section('title', 'Reset')
    
@section('content')

    @component('web.components.header')
        @slot('title', 'RESTABLECER CONTRASEÑA')
    @endcomponent 

<div class="container">
    <div class="row">
        <div class="col s12">
            <div class="col m6 offset-m3">
                <div class="margin-top">
                    <form role="form" method="POST" action="{{ route('password.email') }}"> {{ csrf_field() }}
                        <div class="card-content white">
                            <div class="row">
                                <div class="col m8 offset-m2">
                                    <div class="input-field">
                                        <i class="material-icons prefix">mail</i>
                                        <input id="icon_prefix" type="email" class="validate" value="{{ old('email') }}" name="email" required/>
                                        <label for="icon_prefix">E-mail</label>
                                    </div>
                                </div>
                                <div class="col m8 offset-m2"><br>
                                    <button type="submit" class="btn-large waves-effect waves-light red darken-1 col m12">ENVIAR LINK PARA RESTABLECER CONTRASEÑA</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="card-content center">
                        <p>¿Recordaste tu contraseña? <a href="{{ route('login') }}" class="red-text darken-4"> Volver atras </a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

