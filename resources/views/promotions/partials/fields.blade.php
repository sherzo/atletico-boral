<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
    <div id="image-preview">
        <label for="image-upload" id="image-label">Subir Imagen</label>
        <input type="file" name="img" id="image-upload"/>
    </div>
</div>

<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
	<label class="form-label">TÍTULO</label>
	<div class="form-group">
	    <div class="form-line">
	    	{!! Form::text('title', null, ['class' => 'form-control', 'maxlength' => '255'])!!}
	    </div>
	</div>
	<label class="form-label">PROMOCIÓN</label>
	<div class="form-group">
	    <div class="form-line">
			{!! Form::text('promotion', null, ['class' => 'form-control', 'maxlength' => '255'])!!}
	    </div>
	</div>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<hr>
<label for="content">Contenido de la promoción</label>
	<textarea name="content" id="ckeditor" rows="10">
	{{ $promotion->content }}
	</textarea>
</div>