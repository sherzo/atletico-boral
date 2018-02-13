@if(isset($individual)) @include('statistics.select.loaded') @else @include('statistics.select.simple') @endif
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <label class="form-label">ESTADÍSTICA</label>
    <div class="form-group">
        <div class="form-line">
            <input type="text" class="form-control" name="action" style="text-transform:uppercase;" value="{{ isset($individual) ? $individual->action : '' }}" onblur="this.value = this.value.toUpperCase();" placeholder="ATAQUE" required>
        </div>
    </div>
</div>