<div class="table-responsive">
	<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
		<thead>
            <tr>
                <th>Nº</th>
                <th>TÍTULO</th>
                <th>CONTENIDO</th>
                <th>OPCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
                <tr>
                    <td>{{ $number += 1 }}</td>
                    <td class="col-lg-4">{{ $event->title }}</td>
                    <td class="col-lg-4">{!! substr($event->content, 0, 100) !!}...</td>
                    <td class="col-lg-4 align-center">
                        <div class="btn-group" role="group" aria-label="Third group">
                            <a href="{{ route('events.show', [$event]) }}"><button type="button" class="btn btn-primary waves-effect" data-toggle="tooltip" data-placement="top" title="Ver más"><i class="material-icons">visibility</i></button></a>
                            <a href="{{ route('events.upload', [$event]) }}"><button type="button" class="btn btn-primary waves-effect" data-toggle="tooltip" data-placement="top" title="Subir Imagenes"><i class="material-icons">perm_media</i></button></a>
                            <a href="{{ route('events.edit', [$event]) }}"><button type="button" class="btn btn-primary waves-effect" data-toggle="tooltip" data-placement="top" title="Modificar"><i class="material-icons">loop</i></button></a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Nº</th>
                <th>TÍTULO</th>
                <th>CONTENIDO</th>
                <th>OPCIONES</th>
            </tr>
        </tfoot>
	</table>
</div>