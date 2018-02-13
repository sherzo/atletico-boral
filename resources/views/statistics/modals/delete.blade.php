<div class="modal fade" id="deleteStatistics" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">ELIMINAR REGISTRO DE ESTADÍSTICA</h4>
            </div>
            <div class="modal-body">
                <p>ESTA SEGURO QUE DESEA ELIMINAR ESTA ESTADÍSTICA?... TENGA EN CUENTA QUE SI ELIMINA ESTA ESTADÍSTICA GENERAL TAMBIEN ELIMINARA LAS INDIVIDUALES DEPENDIENTES DE ESTA...</p>
            </div>
            <div class="modal-footer">
                {!! Form::open(['route' => ['generals.destroy', 0133], 'method' => 'DELETE', 'id' => 'submit-form']) !!}
                    <input type="hidden" id="statistic" name="id">
                {!! Form::close() !!}
                <button type="button" onclick="document.getElementById('submit-form').submit()" class="btn btn-link waves-effect">ELIMINAR</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CERRAR</button>
            </div>
        </div>
    </div>
</div>