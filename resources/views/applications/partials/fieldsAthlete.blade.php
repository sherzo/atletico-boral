<!-- ----------------------------DATOS DEL ESTUDIANTE ---------------------------- -->
<div id="athleteForm" class="@if($promotion->page != 'ADULTO' AND $user->representative == null) hide @endif">	
	<hr>
	<br>
	{!! Form::open(['route'  => ['applications.promotion', $promotion->id], 'id' => 'registerAthlete']) !!}
		<input type="hidden" name="me" value="{{ $promotion->page != 'ADULTO' ? '0' : '1' }}" id="inputMe">
	    <p><i class="material-icons" style="vertical-align: middle; font-size: 30px;">{{ $promotion->page != 'ADULTO' ? 'face' : 'accessibility'}}</i> Datos del Atleta</p><br>

	    <div class="row">
	        <div class="input-field col s12 m3">
	        <select class="browser-default" name="nationality" id="aNationality" required="">
	          <option value="" disabled selected>Seleccione</option>
	          <option value="N">Nacional</option>
	          <option value="E">Extranjero</option>
	        </select>
	      </div>


	        <div class="input-field col s12 m4">
	            <input id="aDni" type="text" name="dnia"  placeholder="Cedula" required="" />
	        </div>

		     <div class="input-field col s12 m4">
		        <i class="material-icons prefix">date_range</i>
		        <input id="birth" type="text" class="datepicker" name="birth" required="" placeholder="Fecha de nacimiento" />
		    </div>
	    </div>

	    <div class="row"> 
	        <div class="input-field col s12 m6">
	            <i class="material-icons prefix">account_circle</i>
	            <input id="name" type="text" name="name"  placeholder="Nombres" required="" />
	        </div>
	        <div class="input-field col s12 m6">
	            <i class="material-icons prefix">account_circle</i>
	            <input id="surname" type="text" name="surname"  placeholder="Apellidos" required="" />
	        </div>
	    </div>
	   

	    <p>
	      <input type="checkbox" name="terms" id="terms" class="filled-in" />
	      <label for="terms">Acepto los <a href="#termsAndCoditions">terminos y condiciones</a></label>
	    </p>
	    <br>

	    <a class="btn waves-effect waves-light clear-text btn-flat" href="{{ url('/') }}">CANCELAR</a>

	    <button class="btn waves-effect waves-light red darken-3 clear-text" type="submit" id="register">Registrar</button>	
	{!! Form::close() !!}	
</div>