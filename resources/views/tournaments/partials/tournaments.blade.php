@forelse($inProgress as $progress)

<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
    <div class="card">
        <div class="header bg-{{ $progress->tournament->anfitrion ? 'red' : 'teal' }}">
            <h2>
                {{ $progress->tournament->name }} <small>{{ $progress->tournament->organizer }}</small>
            </h2>
            <ul class="header-dropdown m-r--5">
                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">more_vert</i>
                    </a>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="{{ route('tournaments.show', $progress) }}">Ver torneo</a></li>
                        <li><a data-toggle="modal" data-target="#smallModal" onclick="addTournament({{$progress->id}})">Cargar encuentros</a></li>
                        <li><a href="javascript:void(0);">Ver resultados</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="body">
            <ul class="list-group"> 
                <li class="list-group-item">
                    INICIA <span class="badge bg-red">{{ $progress->start_date }}</span>
                </li>
                <li class="list-group-item">
                    CÚLMINA <span class="badge bg-red">{{ $progress->end_date }}</span>
                </li>
            </ul>
        </div>
    </div>
</div>
@empty
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
        <div class="body text-muted">
            No hay torneos en curso actualmente. Active o <a href="{{ route('tournaments.create') }}">registre</a> un nuevo torneo en curso
        </div>
    </div>
</div>
@endforelse