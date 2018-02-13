<label class="form-label">URL VIDEO</label>
<div class="form-group">
    <div class="form-line">
        <input type="text" class="form-control" name="url" maxlength="255" placeholder="https://www.youtube.com/?hl=es-419" />
    </div>
</div>
<textarea name="content" id="ckeditor" rows="10">
    {{ $tab->content }}
</textarea>