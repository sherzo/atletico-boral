<div class="table-responsive">
	<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
        <thead>
            <tr>             
                <th>ACTIVA</th>
                <th>PESTAÑA</th>
                <th>TÍTULO</th>
                <th>PROMOCIÓN</th>
                <th>OPCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach($promotions as $promotion)
            	<tr>
                    <td>
                        <div class="switch">
                            <label>
                                <input type="checkbox" name="status" class="status notificacion" {{ $promotion->status ? 'checked' : '' }} value="{{ $promotion->id }}" data-placement-from="top" data-placement-align="left"
                                data-animate-enter="animated fadeInDown" data-animate-exit="animated fadeOutDown" data-color-name="bg-black" data-page="{{ mb_strtolower($promotion->page, 'UTF-8') }}">
                                <span class="lever switch-col-red"></span>
                            </label>
                        </div>
                    </td>
            		<td>{{ $promotion->page }}</td>
                    <td>{{ $promotion->title }}</td>
                    <td>{{ $promotion->promotion }}</td>
                    <td class="align-center">
                        <a href="{{ route('promotions.edit', [$promotion])}}" class="btn btn-primary waves-effect" data-toggle="tooltip" data-placement="top" title="Modificar"><i class="material-icons">loop</i></a>
            		</td>
            	</tr>
            @endforeach
        </tbody>
    </table>
</div>