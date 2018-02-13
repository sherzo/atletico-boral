<div class="table-responsive">
	<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
        <thead>
            <tr>
                <th>Nº</th>
                <th>ACTIVA</th>
                <th>CLASIFICACIÓN</th>
                <th>NOMBRE</th>
                <th>OPCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach($individuals as $individual)
            	<tr>
                    <td>{{ $number +=1 }}</td>
                    <td>
                        <div class="switch">
                            <label>
                                <input type="checkbox" name="status" class="status notificacion" value="{{ $individual->id }}" data-placement-from="top" data-placement-align="left" 
                                data-animate-enter="animated fadeInDown" data-animate-exit="animated fadeOutDown" data-color-name="bg-black" data-page="{{ mb_strtolower($individual->type, 'UTF-8') }}" {{ $individual->status ? 'checked' : '' }}>
                                <span class="lever switch-col-red"></span>
                            </label>
                        </div>
                    </td>
                    <td>{{ $individual->general->type }}</td>
                    <td>{{ $individual->action }}</td>
                    <td class="col-lg-3 align-center">
                        <a href="{{ route('individuals.show', [$individual]) }}" class="btn btn-primary waves-effect" data-toggle="tooltip" data-placement="top" title="Ver más"><i class="material-icons">visibility</i></a>
                        <a href="{{ route('individuals.edit', [$individual]) }}" class="btn btn-primary waves-effect" data-toggle="tooltip" data-placement="top" title="Modificar"><i class="material-icons">loop</i></a>
                        <a href="" data-toggle="modal" data-target="#deleteStatistics" class="btn btn-primary waves-effect"><i class="material-icons" onclick="eliminar({{$individual->id}})">delete</i></a>
                    </td>
            	</tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Nº</th>
                <th>ACTIVA</th>
                <th>CLASIFICACIÓN</th>
                <th>NOMBRE</th>
                <th>OPCIONES</th>
            </tr>
        </tfoot>
    </table>
</div>