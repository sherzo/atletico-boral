<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <label class="form-label">CLASIFICACIÓN</label>
    <div class="form-group">
        <div class="form-line">
            <input type="text" class="form-control" name="type" style="text-transform:uppercase;" value="{{ isset($general) ? $general->type : '' }}" onblur="this.value = this.value.toUpperCase();" placeholder="ATAQUE" required>
        </div>
    </div>
</div>
