<div class="row">
    <div class="col-md-6">
        <label class="form-label" for="name">NOMBRE</label>
        <div class="form-group">
            <div class="form-line">
                <input type="text" class="form-control" id="name" name="name" style="text-transform:uppercase;" onblur="this.value = this.value.toUpperCase();" required="">
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <label class="form-label" for="email">EMAIL</label>
        <div class="form-group">
            <div class="form-line">
                <input type="email" class="form-control" id="email" name="email" style="text-transform:uppercase;" onblur="this.value = this.value.toUpperCase();" required="">
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <label class="form-label" for="password">CONTRASEÑA</label>
        <div class="form-group">
            <div class="form-line">
                <input type="password" class="form-control" id="password" name="password" required="" minlength="6">
            </div>
            <small>Debe ser de mínimo 6 caracteres</small>
        </div>
    </div>

    <div class="col-md-6">
        <label class="form-label" for="password_confirmation">CONFIRMAR CONTRASEÑA</label>
        <div class="form-group">
            <div class="form-line">
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required="">
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <label class="form-label" for="password_confirmation">TIPO DE USUARIO</label>
        <div class="form-group">
            <div class="form-line">
            	{!! Form::select('role', $roles, null, ['class' => 'form-control show-tick', 'id' => 'types', 'required']) !!}
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <a href="{{ route('users.index') }}" class="btn bg-red m-t-15 waves-effect" type="submit">VOLVER</a>
        <button class="btn bg-blue m-t-15 pull-right waves-effect" type="submit">GUARDAR</button>
    </div>
</div>