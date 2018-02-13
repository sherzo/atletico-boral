<!-- Cargar encuentros -->
<div class="modal fade" id="smallModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
        {!! Form::open(['route' => 'matches.create', 'method' => 'GET']) !!}
            <div class="modal-header">
                <h4 class="modal-title" id="smallModalLabel">CARGAR PARTIDOS</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="quantity">NÚMERO DE PARTIDOS</label>
                    <div class="form-line">
                        <input type="number" class="form-control" name="quantity" max="10" maxlength="2" value="1">
                        <input type="hidden" name="time" id="time">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-link waves-effect">ACEPTAR</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CANCELAR</button>
            </div>
        {!! Form::close() !!}
        </div>
    </div>
</div>


<!-- Iniciar torneo -->
<div class="modal fade" id="initModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        {!! Form::open(['route' => 'tournament.start']) !!}
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">INICIAR <span id="name"></span></h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="form-label">FECHA DE INICIO</label>
                    <div class="form-line">
                      <input type="text" class="datepicker form-control fechas" name="start_date" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label">FECHA DE CULMINACIÓN</label>
                    <div class="form-line">
                        <input type="text" class="datepicker form-control fechas" name="end_date" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label">CATEGORÍAS</label>
                    <div class="input-group">
                        {!! Form::select('categories[]', $categories, null, ['class' => 'form-control show-tick', 'multiple', 'id' => 'categories', 'required']) !!}
                    </div>
                </div>
                <!-- ID DEL TORNEO -->
                <input type="hidden" id="tournament" name="tournament_id">
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-link waves-effect">GUARDAR</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CERRAR</button>
            </div>
        {!! Form::close() !!}
        </div>
    </div>
</div>

<!-- Culminar torneo -->
<div class="modal fade" id="endModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">CULMINAR <span id="end"></span></h4>
            </div>
            <div class="modal-body">
                Esta seguro que deseea culminar el torneo...

                <input type="hidden" id="end_id" name="tournament_id">
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-link waves-effect">SI</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">NO</button>
            </div>
        </div>
    </div>
</div>