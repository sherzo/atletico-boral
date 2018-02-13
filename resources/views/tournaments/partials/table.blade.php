<div class="table-responsive">
    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
        <thead>
            <tr>
                <th>TIPO</th>
                <th>NOMBRE</th>
                <th>ORGANIZADOR</th>
                <th>OPCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tournaments as $tournament)
            <tr>
                <td>{{ $tournament->type->name }}</td>
                <td>{{ $tournament->name }}</td>
                <td>{{ $tournament->organizer }}</td>
                <td class="align-center">
                    <a href="{{ route('tournament.list', $tournament->id)}}" class="btn btn-primary waves-effect" data-toggle="tooltip" data-placement="top" title="Ver más"><i class="material-icons">visibility</i></a>
                    @if($tournament->inProgress())
                        <a data-toggle="modal" data-target="#endModal" ><button type="button" class="btn btn-primary waves-effect" data-toggle="tooltip" data-placement="top" title="Terminar" onclick="endTournament('{{ $tournament->name }}', {{ $tournament->id }})"><i class="material-icons"  >stop</i></button>
                        </a>
                    @else
                        <a data-toggle="modal" data-target="#initModal" ><button type="button" class="btn btn-primary waves-effect" data-toggle="tooltip" data-placement="top" title="Iniciar" onclick="initTournament('{{ $tournament->name }}', {{ $tournament->id }})"><i class="material-icons"  >play_arrow</i></button>
                        </a>
                    @endif
                </td>
            </tr>
            @endforeach            
        </tbody>
        <tfoot>
            <tr>
                <th>CATEGORÍA</th>
                <th>NOMBRE</th>
                <th>ORGANIZADOR</th>
                <th>OPCIONES</th>
            </tr>
        </tfoot>
    </table>
</div>