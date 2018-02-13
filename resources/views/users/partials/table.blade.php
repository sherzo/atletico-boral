<div class="table-responsive">
    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
        <thead>
            <tr>
                <th>Nº</th>
                <th>NOMBRE</th>
                <th>CORREO</th>
                <th>OPCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $number +=1 }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td class="align-center">
                        <a href="#" class="btn btn-primary waves-effect" data-toggle="tooltip" data-placement="top" title="Ver más"><i class="material-icons">visibility</i></a>
                        <a href="#" class="btn btn-primary waves-effect" data-toggle="tooltip" data-placement="top" title="Ver más"><i class="material-icons">loop</i></a>
                        <a href="" class="btn btn-primary waves-effect" data-toggle="tooltip" data-placement="top" title="Ver más"><i class="material-icons">delete</i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Nº</th>
                <th>NOMBRE</th>
                <th>CORREO</th>
                <th>OPCIONES</th>
            </tr>
        </tfoot>
    </table>
</div>