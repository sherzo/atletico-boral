<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
    <div id="image-preview">
        <label for="image-upload" id="image-label">Subir Imagen</label>
        <input type="file" name="url" id="image-upload"/>
    </div>
</div>
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
    <label class="form-label">CÓDIGO</label>
    <div class="form-group">
        <div class="form-line">
            <span class="form-control">{{ isset($code) ? $code : $team->code }}</span>
        </div>
    </div>
</div>

<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
    <label class="form-label">NOMBRE</label>
    <div class="form-group">
        <div class="form-line">
            <input type="text" class="form-control" name="name" value="{{ isset($team->name) ? $team->name : '' }}" style="text-transform:uppercase;" onblur="this.value = this.value.toUpperCase();" required>
        </div>
    </div>
</div>
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
    <label class="form-label">ENTRENADOR</label>
    <div class="form-group">
        <div class="form-line">
            <input type="text" class="form-control" name="coach" value="{{ isset($team->coach) ? $team->coach : '' }}" style="text-transform:uppercase;" onblur="this.value = this.value.toUpperCase();" required>
        </div>
    </div>
</div>

@if(isset($team)) @include('teams.select.simple') @else @include('teams.select.multiple') @endif
