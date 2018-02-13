<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <label class="form-label">NOMBRE</label>
    <div class="form-group">
        <div class="form-line">
            <input type="text" class="form-control" name="name" placeholder="" value="{{ $activity = isset($activity->name) ? $activity->name : '' }}" style="text-transform:uppercase;" onblur="this.value = this.value.toUpperCase();" required>
        </div>
    </div>
</div>