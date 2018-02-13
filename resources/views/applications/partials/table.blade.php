<div class="table-responsive">
	<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
        <thead>
            <tr>
                <th>CODIGO</th>             
                <th>C. ATLETA</th>
                <th>ATLETA</th>
                <th>C. REPRESENTANTE</th>
                <th>REPRESENTANTE</th>
                <th>FECHA</th>
                <th>PROMOCIÓN</th>
                <th>OPCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach($applications as $application)
            	<tr>
                    <td>{{ $application->code }}</td>
                    <td>{{ $application->athlete->identification }}</td>
                    <td>{{ $application->athlete->fullName }}</td>
                    <td>{{ $application->athlete->representative()->first() ? $application->athlete->representative()->first()->fullDni : '' }}</td>
                    <td>{{ $application->athlete->representative()->first() ? $application->athlete->representative()->first()->name : 'No tiene' }}</td>
                    <td>{{ $application->created_at }}</td>
                    <td>{{ $application->promotion->page }}</td>
                    <td class="align-center">
                        @if($application->status)
                            <a href="{{ route('process', $application->id)}}" class="btn btn-primary waves-effect" data-toggle="tooltip" data-placement="top" title="Procesar"><i class="material-icons">done</i></a>
                        @endif
            		</td>
            	</tr>
            @endforeach
        </tbody>
    </table>
</div>