<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="{{ Auth::user()->url != '' ? Auth::user()->url : asset('images/user.png') }}" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ ucwords(Auth::user()->name)  }}</div>
            <div class="email">{{ strtolower(Auth::user()->email)  }}</div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                    <li><a href="{{ route('profile.index') }}"><i class="material-icons">person</i>Perfil</a></li>
                    <li role="seperator" class="divider"></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">group</i>Visitas</a></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Entradas</a></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Comentarios</a></li>
                    <li role="seperator" class="divider"></li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="material-icons">input</i>Salir</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </ul>
            </div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">NAVEGACIÓN PRINCIPAL</li>
            <li class="active">
                <a href="{{ route('home') }}">
                    <i class="material-icons">home</i>
                    <span>Inicio</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">directions_run</i>
                    <span>Atletas</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="{{ route('athlete.create') }}"> Crear </a>
                    </li>
                    <li>
                        <a href="{{ route('athlete.index') }}"> Mostrar </a>
                    </li>
                    <li>
                        <a href="{{ route('representatives.index') }}"> Representantes </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">turned_in_not</i>
                    <span>Equipos</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="{{ route('teams.create') }}"> Crear </a>
                    </li>
                    <li>
                        <a href="{{ route('teams.index') }}"> Mostrar </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">web_asset</i>
                    <span>Páginas</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="{{ route('tabs.index') }}"> Pestañas </a>
                    </li>
                    <li>
                        <a href="{{ route('events.index') }}"> Eventos </a>
                    </li>
                    <li>
                        <a href="{{ route('promotions.index') }}"> Promociones </a>
                    </li>
                    <li>
                        <a href="{{ route('applications.index') }}"> Solicitudes </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">event</i>
                    <span>Torneos</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="{{ route('tournaments.create') }}"> Crear</a>
                    </li>
                    <li>
                        <a href="{{ route('tournaments.index') }}"> Mostrar </a>
                    </li>
                </ul>
            </li>
            <li class="header">CONFIGURACIÓN</li>
            <li>
                <a href="{{ route('users.index') }}">
                    <i class="material-icons col-light-blue">group</i>
                    <span>Usuarios</span>
                </a>
            </li>
            <li>
                <a href="{{ route('history.index') }}">
                    <i class="material-icons col-red">restore</i>
                    <span>Historial</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">timeline</i>
                    <span>Estadísticas</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="{{ route('generals.index') }}"> Generales </a>
                    </li>
                    <li>
                        <a href="{{ route('individuals.index')}}"> Individuales </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ route('activities.index') }}">
                    <i class="material-icons">date_range</i>
                    <span>Actividades</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">assistant_photo</i>
                    <span>Posiciones</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="{{ route('general.index') }}"> Generales </a>
                    </li>
                    <li>
                        <a href="{{ route('individual.index')}}"> Individuales </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">widgets</i>
                    <span>Categorías</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="#!"> Torneos </a>
                    </li>
                    <li>
                        <a href="#!"> Deportivas </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal">
        <div class="version">
            <b>Version: </b> 1.0
        </div>
    </div>
    <!-- #Footer -->
</aside>
<!-- #END# Left Sidebar -->
