<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
	<label class="form-label">CATEGORÍA</label>
	<select class="form-control show-tick" name="gs_id" required>
	    @foreach($generals as $general)
            <option value="{{ $general->id }}" {{ ($general->id == $individual->gs_id) ? 'selected' : '' }}> {{ $general->type }}</option>
        @endforeach
	</select>
</div>