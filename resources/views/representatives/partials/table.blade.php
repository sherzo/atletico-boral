<div class="table-responsive">
	<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
		<thead>
            <tr>
                <th>CEDULA</th>
                <th>NOMBRES</th>
                <th>APELLIDOS</th>
                <th>TELF. CONVENCIONAL</th>
				<th>TELF. MOVIL</th>
				<th>OPCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach($representatives as $representative)
                <tr>
                    <td>{{ $representative->fullDni }}</td>
                    <td>{{ $representative->name }}</td>
                    <td>{{ $representative->surname }}</td>
					<td>{{ $representative->phone }}</td>
					<td>{{ $representative->movil }}</td>
                    <td class="align-center">
                        <div class="btn-group" role="group" aria-label="Third group">
                            <a href="{{ route('representatives.show', [$representative]) }}"><button type="button" class="btn btn-primary waves-effect" data-toggle="tooltip" data-placement="top" title="Ver más"><i class="material-icons">visibility</i></button></a>
							<a href="{{ route('representatives.edit', [$representative]) }}"><button type="button" class="btn btn-primary waves-effect" data-toggle="tooltip" data-placement="top" title="Modificar"><i class="material-icons">loop</i></button></a>
						</div>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
			<tr>
				<th>CEDULA</th>
				<th>NOMBRES</th>
				<th>APELLIDOS</th>
				<th>TELF. CONVENCIONAL</th>
				<th>TELF. MOVIL</th>
				<th>OPCIONES</th>
			</tr>
        </tfoot>
	</table>
</div>
