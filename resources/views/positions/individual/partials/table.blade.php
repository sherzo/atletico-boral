<div class="table-responsive">
	<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
        <thead>
            <tr>
                <th>Nº</th>
                <th>POSICIÓN GENERAL</th>
                <th>POSICIÓN INDIVIDUAL</th>
                <th>OPCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach($positions as $position)
            	<tr>
                    <td>{{ $number +=1 }}</td>
                    <td>{{ $position->general->function }}</td>
                    <td>{{ $position->position }}</td>
            		<td class="col-lg-4 align-center">
                        <div class="btn-group" role="group" aria-label="Third group">
                            <a href=""><button type="button" class="btn btn-primary waves-effect" data-toggle="tooltip" data-placement="top" title="Ver más"><i class="material-icons">visibility</i></button></a>
                            <a href=""><button type="button" class="btn btn-primary waves-effect" data-toggle="tooltip" data-placement="top" title="Modificar"><i class="material-icons">loop</i></button></a>
                            <a href="" data-toggle="modal" data-target="#deleteTeam"><button type="button" class="btn btn-primary waves-effect" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="material-icons">delete</i></button></a>
                        </div>
                    </td>
            	</tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Nº</th>
                <th>POSICIÓN GENERAL</th>
                <th>POSICIÓN INDIVIDUAL</th>
                <th>OPCIONES</th>
            </tr>
        </tfoot>
    </table>
</div>