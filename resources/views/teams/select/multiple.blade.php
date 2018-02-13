<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
    <label class="form-label">CATEGORÍAS</label>
    <div class="input-group">
        <select class="form-control show-tick" name="categories[]" multiple required>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->category }}</option>
            @endforeach
        </select>
    </div>
</div>