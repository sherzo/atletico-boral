<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
	<div class="form-group">
		<label class="form-label">NOMBRE</label>
		<div class="form-line">
			<input type="text" id="name" class="form-control" name="name" style="text-transform:uppercase;" onblur="this.value = this.value.toUpperCase();" required>
		</div>
	</div>
</div>
<div class="col-sm-3 col-lg-4 text-center">
    <div class="demo-switch-title"><b>ANFITRIÓN</b></div>
    <div class="switch">
        <label><input type="checkbox" name="anfitrion" class="anfitrion"><span class="lever switch-col-red"></span></label>
    </div>
</div>
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
	<div class="form-group">
		<label class="form-label">ORGANIZADOR(ES)</label>
		<div class="form-line">
			<input type="text" class="form-control organizer" name="organizer" style="text-transform:uppercase;" onblur="this.value = this.value.toUpperCase();" required>
		</div>
	</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
	<div class="form-group">
		<label class="form-label">CLASIFICACIÓN</label>
	  	{!! Form::select('type', $types, null, ['class' => 'form-control show-tick', 'id' => 'types', 'required']) !!}
	</div> 
</div>
<div class="col-lg-4 col-md-3 col-sm-12 col-xs-12">
	<div class="form-group">
		<label class="form-label">FECHA DE INICIO</label>
	  	<div class="form-line">
		  <input type="text" class="datepicker form-control fechas" name="start_date" required>
	  	</div>
	</div>
</div>
<div class="col-lg-4 col-md-3 col-sm-12 col-xs-12">
	<div class="form-group">
	  	<label class="form-label">FECHA DE CULMINACIÓN</label>
  		<div class="form-line">
	  		<input type="text" class="datepicker form-control fechas" name="end_date" required>
  		</div>
	</div>
</div>
<div class="col-lg-4 col-md-3 col-sm-12 col-xs-12">
	<div class="form-group">
		<label class="form-label">CATEGORÍAS</label>
	    <div class="input-group">
	    	{!! Form::select('categories[]', $categories, null, ['class' => 'form-control show-tick', 'multiple', 'id' => 'categories', 'required']) !!}
	    </div>
    </div>
</div>
