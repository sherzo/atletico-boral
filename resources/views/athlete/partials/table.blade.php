<div class="table-responsive">
	<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
		<thead>
            <tr>
                <th>CEDULA</th>
                <th>NOMBRES</th>
                <th>APELLIDOS</th>
                <th>EDAD</th>
                <th>TYPE</th>
                <th>FECHA DE NACIMIENTO</th>
                <th>OPCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach($athletes as $athlete)
            	<tr>
            		<td>{{ $athlete->FullDni }}</td>
                    <td>{{ $athlete->name }}</td>
                    <td>{{ $athlete->surname }}</td>
                    <td>{{ $athlete->type }}</td>
            		<td>{{ $athlete->years }}</td>
            		<td>{{ $athlete->birthdate }}</td>
								<td class="col-lg-4 align-center">
										<div class="btn-group" role="group" aria-label="Third group">
												<a href="{{ route('athlete.show', [$athlete]) }}"><button type="button" class="btn btn-primary waves-effect" data-toggle="tooltip" data-placement="top" title="Ver más"><i class="material-icons">visibility</i></button></a>
												<a href="{{ route('athlete.edit', [$athlete]) }}"><button type="button" class="btn btn-primary waves-effect" data-toggle="tooltip" data-placement="top" title="Modificar"><i class="material-icons">loop</i></button></a>
										</div>
								</td>
            	</tr>
            @endforeach
        </tbody>
	</table>
</div>
