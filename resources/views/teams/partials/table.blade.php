<div class="table-responsive">
	<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
        <thead>
            <tr>
                <th>Nº</th>
                <th>CÓDIGO</th>
                <th>CATEGORÍA</th>
                <th>NOMBRE</th>
                <th>ENTRENADOR</th>
                <th>OPCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach($teams as $team)
            	<tr>
                    <td>{{ $number +=1 }}</td>
                    <td>{{ $team->code }}</td>
                    <td>{{ $team->category->category }}</td>
            		<td>{{ $team->name }}</td>
            		<td>{{ $team->coach }}</td>
            		<td class="align-center">
            			<a href="{{ route('teams.show', [$team]) }}" class="btn btn-primary waves-effect" data-toggle="tooltip" data-placement="top" title="Ver más"><i class="material-icons">visibility</i></a>
                        <a href="{{ route('teams.edit', [$team]) }}" class="btn btn-primary waves-effect" data-toggle="tooltip" data-placement="top" title="Ver más"><i class="material-icons">loop</i></a>
                        <a href="" class="btn btn-primary waves-effect" data-toggle="tooltip" data-placement="top" title="Ver más"><i class="material-icons">delete</i></a>
            		</td>
            	</tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Nº</th>
                <th>CÓDIGO</th>
                <th>CATEGORÍA</th>
                <th>NOMBRE</th>
                <th>ENTRENADOR</th>
                <th>OPCIONES</th>
            </tr>
        </tfoot>
    </table>
</div>