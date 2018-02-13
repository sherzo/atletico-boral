<div class="table-responsive">
	<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
        <thead>
            <tr>
                <th>Nº</th>
                <th>LOCALIZACIÓN</th>
                <th>ACCIÓN</th>
                <th>DETALLES</th>
                <th>USUARIO</th>
            </tr>
        </thead>
        <tbody>
            @foreach($history as $history)
            	<tr>
                    <td>{{ $number +=1 }}</td>
                    <td>{{ $history->location }}</td>
            		<td>{{ $history->action }}</td>
            		<td>{{ $history->details }}</td>
            		<td>{{ $history->user }}</td>
            	</tr>
            @endforeach
        </tbody>
    </table>
</div>