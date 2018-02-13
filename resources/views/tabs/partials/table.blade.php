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
            @foreach($tabs as $tab)
                <tr>
                    <td>{{ $number += 1 }}</td>
                    <td class="col-lg-4">{{ $tab->title }}</td>
                    <td class="col-lg-4">{!! substr($tab->content, 0, 100) !!}...</td>
                    <td class="col-lg-4 align-center">
                        <div class="btn-group" role="group" aria-label="Third group">
                            <a href="{{ route('tabs.show', [$tab]) }}"><button type="button" class="btn btn-primary waves-effect" data-toggle="tooltip" data-placement="top" title="Ver más"><i class="material-icons">visibility</i></button></a>
                            <a href="{{ route('tabs.upload', [$tab]) }}"><button type="button" class="btn btn-primary waves-effect" data-toggle="tooltip" data-placement="top" title="Subir Imagenes"><i class="material-icons">perm_media</i></button></a>
                            <a href="{{ route('tabs.edit', [$tab]) }}"><button type="button" class="btn btn-primary waves-effect" data-toggle="tooltip" data-placement="top" title="Modificar"><i class="material-icons">loop</i></button></a>
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