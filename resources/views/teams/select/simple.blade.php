<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
	<label class="form-label">CATEGORÍA</label>
	<select class="form-control show-tick" name="category" required>
	    @foreach($categories as $category)
            <option value="{{ $category->id }}" {{ ($team->category_id == $category->id) ? 'selected' : '' }}> {{ $category->category }}</option>
        @endforeach
	</select>
</div>