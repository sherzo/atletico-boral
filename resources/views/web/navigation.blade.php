<nav class="nav-extended nav-no-height grey darken-for">
    <div class="nav-wrapper container" style="padding-top: 15px;">
        <a href="#!" id="brand-block" class="brand-logo">
            <img src="{{ asset('img/frozvy.png')}}" alt="" width="130" height="53">
        </a>
        <ul class="right hide-on-med-and-down">
            @if(!Gate::allows('inscription'))
                <li><a href="{{ route('inscription') }}" class="btn waves-effect waves-light red darken-3 clear-text">Inscripción</a></li>
            @else
                <li><a href="{{ route('inscription') }}" class="btn waves-effect waves-light red darken-3 clear-text">Ver solicitud</a></li>
            @endif
            @if(Auth::guest())
                <li><a href="{{ url('/login') }}" class="clear-text">Iniciar sesión</a></li>
            @else
                <li>
                    <a class="dropdown-button" href="#!" data-activates="dropdown1">
                        <div class="chip grey darken-3 white-text">
                            <img src="{{ asset('images/user.png') }}" alt="Contact Person">
                            {{ Auth::user()->name }}
                            <i class="material-icons right" style="height: 30px; line-height: 30px;">arrow_drop_down</i>
                        </div>
                    </a>
                </li>
            @endif
        </ul>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <a href="#" class="brand-logo center"><img src="{{ asset('img/escudo.png') }}" width="115" height="130"></a>
    </div>
    <div class="nav-wrapper header navigation-top nav-top">
        <div class="container">
            <ul class="center hide-on-med-and-down">
                <li><a href="{{ url('/')}}">INICIO</a></li>
                <li><a href="{{ url('/')}}" class="dropdown-button" data-activates="us">NOSOTROS</a></li>
                    <ul id="us" class="dropdown-content">
                        <li><a href="{{ url('/about') }}">ACERCA DE</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ url('/history-us') }}">HISTORIA</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ url('/philosophy') }}">FILOSOFÍA</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ url('/mission') }}">MISIÓN</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ url('/view') }}">VISIÓN</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ url('/objetives') }}">OBJETIVOS</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ url('/goals') }}">METAS</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ url('/staff') }}">STAFF</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ url('/field') }}">INSTALACIONES DEPORTIVAS</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ url('/testimonials') }}">TESTIMONIOS</a></li>
                    </ul>
                <li><a href="{{ url('/formacion') }}" class="dropdown-button" data-activates="formation">FORMACIÓN DEPORTIVA</a></li>
                    <ul id="formation" class="dropdown-content">
                        <li><a href="{{ url('/infanto-juvenil') }}">CATEGORÍAS INFANTO-JUVENIL</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ url('femeninas') }}">CATEGORÍAS FEMENINAS</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ url('/arqueros') }}">ESCUELA DE FORMACIÓN DE ARQUEROS</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ url('/vacacionales') }}">VACACIONALES MULTI-DICIPLINAS</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ url('/adultos') }}">PROGRAMAS PARA ADULTOS</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ url('/torneos') }}">TORNEOS DE ANFITRIÓN (INTER-ESCOLARS, TORNEOS ABIERTOS)</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ url('/torneos') }}">TORNEO INFANTO-JUVENIL</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ url('/becas') }}">BECAS</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ url('/tryouts') }}">TRYOUTS</a></li>
                    </ul>
                <li><a href="{{ url('/resultados') }}">ENCUENTROS & RESULTADOS</a></li>
                <li><a href="">TABLAS DE POSICIONES</a></li> 
                <li><a href="">CATEGORÍAS</a></li> 
                <li><a href="">NOTICIAS</a></li> 
                <li><a href="">ACTIVIDADES EXTRACURRICULARES</a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li><a href="{{ url('/')}}">INICIO</a></li>
                <li><a href="{{ url('/formacion') }}">FORMACIÓN DEPORTIVA</a></li>
                <li><a href="{{ url('/resultados') }}">ENCUENTROS & RESULTADOS</a></li>
                <li><a href="">TABLAS DE POSICIONES</a></li> 
                <li><a href="">CATEGORIAS</a></li> 
                <li><a href="">NOTICIAS</a></li> 
                <li><a href="">ACTIVIDADES EXTRACURRICULARES</a></li>
                <li><a href="">CONTACTO</a></li>
            </ul>
        </div>
    </div>
</nav>
<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">PERFIL</a></li>
  <li><a href="#!">SOLICITUDES</a></li>
  <li><a href="#!">EVENTOS</a></li>
  @if(!Auth::guest())
      @if(Auth::user()->role->id == 1)
        <li><a href="{{ route('home') }}">PANEL</a></li>
      @endif
  @endif
  <li class="divider"></li>
  <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">SALIR</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
  </li>

</ul>