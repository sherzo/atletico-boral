<div role="tabpanel" class="tab-pane fade {{ ($key == 0) ? 'in active' : '' }}" id="{{ $category->id }}">
	@for($i = 1; $i <= $quantity; $i++)
		<div class="panel-body">
		    <div class="row">
		    	<div class="col-md-12 col-lg-12"><h4>PARTIDO #{{ $i }}</h4></div> 
			    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
			        <label class="form-label">EQUIPO LOCAL</label>
					<div class="form-group">
						<select class="form-control show-tick" name="local_id[]">
			                <option value="">SELECCIONE</option>
						    @forelse($category->teams as $team)
						    	<option value="{{ $team->id }}">
						    	{{ $team->name }} </option>
					    	@empty
					    		<option value="">
					    			No hay equipos en esta categoria
					    		</option>
					    	@endforelse
						</select>
					</div>
			    </div>

				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
					<center>
						<strong>
							<h1>VS</h1>
						</strong>
					</center>
				</div>

			    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
			        <div class="form-group form-float">
			            <label class="form-label">EQUIPO VISITANTE</label>
					    <div class="form-group">
					        <select class="form-control show-tick" name="visitor_id[]">
			            		<option value="">SELECCIONE</option>
					            @forelse($category->teams as $team)
						    		<option value="{{ $team->id }}">{{ $team->name }}</option>
						    	@empty
						    		<option value="">No hay equipos en esta categoría</option>
						    	@endforelse
					        </select>
					    </div>
			        </div>
			    </div>

			    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
			        <div class="form-group form-float">
			            <label class="form-label">FASE</label>
			            <div class="form-group">
					        <select class="form-control show-tick" name="stage[]">
					        	<option value="">SELECCIONE</option>
					            <option value="FASE DE GRUPOS">FASE DE GRUPOS</option>
								<option value="8VOS DE FINAL">8VOS DE FINAL</option>
								<option value="4TOS DE FINAL">4TOS DE FINAL</option>
								<option value="SEMIFINAL">SEMIFINAL</option>
								<option value="FINAL">FINAL</option>		
					        </select>
					    </div>
			        </div>
			    </div>

				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
			        <div class="form-group form-float">
			            <label class="form-label">LUGAR</label>
			            <div class="form-group">
			            	<select class="form-control show-tick" name="place[]">
			            		<option value="">SELECCIONE</option>
					            @forelse($places as $place)
						    		<option value="{{ $place->id }}">{{ $place->place }}</option>
						    	@empty
						    		<option value="">No hay lugares registrados</option>
						    	@endforelse
					        </select>
					    </div>
			        </div>
			    </div>

			    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				    <label class="form-label">FECHA</label>
			        <div class="form-group form-float">
				      <div class="form-line">
				          <input type="text" class="datepicker form-control" name="date[]">
				      </div>
				    </div>
			    </div>

			    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
			        <div class="form-group form-float">
			            <label class="form-label">HORA</label>
			            <div class="form-line">
					        <input type="text" class="timepicker form-control" name="hour[]">
					    </div>
			        </div>
			    </div>
			</div>
		</div>
	@endfor
</div>


