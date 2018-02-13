@extends('layouts.web')

@section('title', 'Register')
    
@section('content')

    @component('web.components.header')
        @slot('title', 'REGISTRO')
    @endcomponent

<div class="container">
    <div class="row">
        <div class="col s12">
            <div class="col m4">
                <div class="carousel">
                    <a class="carousel-item" href="#one!"><img src="https://lorempixel.com/250/250/nature/1"></a>
                    <a class="carousel-item" href="#two!"><img src="https://lorempixel.com/250/250/nature/2"></a>
                    <a class="carousel-item" href="#three!"><img src="https://lorempixel.com/250/250/nature/3"></a>
                    <a class="carousel-item" href="#four!"><img src="https://lorempixel.com/250/250/nature/4"></a>
                    <a class="carousel-item" href="#five!"><img src="https://lorempixel.com/250/250/nature/5"></a>
                </div>
            </div>
            <div class="col m7 offset-m1">
                <div class="margin-top">
                    <form role="form" method="POST" action="{{ route('register') }}"> {{ csrf_field() }}
                        <div class="card-content white">
                            <div class="row">
                                <div class="col m8 offset-m2">
                                    <div class="input-field">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input id="icon_prefix" type="text" class="validate" name="name" required/>
                                        <label for="icon_prefix">Nombre</label>
                                    </div>
                                    <div class="input-field">
                                        <i class="material-icons prefix">mail</i>
                                        <input id="icon_prefix" type="email" name="email" class="validate" required/>
                                        <label for="icon_prefix">E-mail</label>
                                    </div>
                                    <div class="input-field">
                                        <i class="material-icons prefix">lock</i>
                                        <input id="icon_prefix" type="password" name="password" class="validate" required/>
                                        <label for="icon_prefix">Contraseña</label>
                                    </div>
                                    <div class="input-field">
                                        <i class="material-icons prefix">lock</i>
                                        <input id="icon_prefix" type="password" name="password_confirmation" class="validate" required/>
                                        <label for="icon_prefix">Vuelve a escribir la contraseña</label>
                                    </div>
                                </div>
                                <div    class="col m8 offset-m2"><br>
                                    <button type="submit" class="btn-large waves-effect waves-light red darken-1 col m12">REGISTRARME</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="card-content center">
                        <p>No deseo registrarme <a href="{{ route('login') }}" class="red-text darken-4"> Volver atras </a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@section('scripts')
    <script>    
        $(document).ready(function(){
            $('.carousel').carousel();
        });
    </script>
@endsection
