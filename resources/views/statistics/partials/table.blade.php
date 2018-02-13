<div class="table-responsive">
	<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
        <thead>
            <tr>
                <th>Nº</th>
                <th>NOMBRE</th>
                <th>OPCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach($generals as $general)
            	<tr>
                    <td>{{ $number +=1 }}</td>
                    <td>{{ $general->type }}</td>
                    <td class="col-lg-4 align-center">
                        <a href="{{ route('generals.show', [$general]) }}" class="btn btn-primary waves-effect" data-toggle="tooltip" data-placement="top" title="Ver más"><i class="material-icons">visibility</i></a>
                        <a href="{{ route('generals.edit', [$general]) }}" class="btn btn-primary waves-effect" data-toggle="tooltip" data-placement="top" title="Modificar"><i class="material-icons">loop</i></a>
                        <a href="" data-toggle="modal" data-target="#deleteStatistics" class="btn btn-primary waves-effect" onclick="eliminar({{$general->id}})"><i class="material-icons">delete</i></a>
                    </td>
            	</tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Nº</th>
                <th>NOMBRE</th>
                <th>OPCIONES</th>
            </tr>
        </tfoot>
    </table>
</div>