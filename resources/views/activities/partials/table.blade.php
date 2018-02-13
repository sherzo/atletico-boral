<div class="table-responsive">
	<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
		<thead>
            <tr>
                <th class="col-lg-1">Nº</th>
                <th class="col-lg-4">NOMBRE</th>
                <th class="col-lg-3">OPCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach($activities as $activity)
                <tr>
                    <td>{{ $number += 1 }}</td>
                    <td class="col-lg-4">{{ $activity->name }}</td>
                    <td class="col-lg-4 align-center">
                            <a href="{{ route('activities.edit', [$activity]) }}"><button type="button" class="btn btn-primary waves-effect" data-toggle="tooltip" data-placement="top" title="Modificar"><i class="material-icons">autorenew</i></button></a>
                            <a href=""><button type="button" class="btn btn-primary waves-effect" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="material-icons">delete</i></button></a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th class="col-lg-1">Nº</th>
                <th class="col-lg-4">NOMBRE</th>
                <th class="col-lg-3">OPCIONES</th>
            </tr>
        </tfoot>
	</table>
</div>