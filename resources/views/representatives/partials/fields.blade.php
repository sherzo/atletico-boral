<div class="row">
    <input type="hidden" id="url" value="{{ route('representatives.store') }}">
    <input type="hidden" value="{{ csrf_token() }}" id="token">

    <div class="col-md-4">
        <label class="form-label">NACINALIDAD</label>
        <div class="form-group">
            <div class="form-line">
                <input type="text" class="form-control" value="{{ $representative->nationality }}" readonly>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <label class="form-label">CEDULA</label>
        <div class="form-group">
            <div class="form-line">
                <input type="text" class="form-control dni" id="dni" value="{{ $representative->dni }}" readonly>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <label class="form-label">NOMBRE</label>
        <div class="form-group">
            <div class="form-line">
                <input type="text" class="form-control" id="name" name="name" style="text-transform:uppercase;" onblur="this.value = this.value.toUpperCase();" value="{{ $representative->name }}">
            </div>
        </div>
    </div>
    <div class="col-md-6" >
        <label class="form-label">APELLIDO</label>
        <div class="form-group">
            <div class="form-line">
                <input type="text" class="form-control" id="surname" name="surname" style="text-transform:uppercase;" onblur="this.value = this.value.toUpperCase();" value="{{ $representative->surname }}">
            </div>
        </div>
    </div>
</div>
<div class="row">
  <div class="col-md-6">
      <b>TELEFONO CONVENCIONAL</b>
      <div class="input-group">
          <span class="input-group-addon">
              <i class="material-icons">phone</i>
          </span>
          <div class="form-line">
              <input type="text" class="form-control phone-number" name="phone" placeholder="Ex: +00 (000) 000-00-00" id="phone" value="{{ $representative->phone }}">
          </div>
      </div>
  </div>
  <div class="col-md-6">
      <b>TELEFONO MOVIL</b>
      <div class="input-group">
          <span class="input-group-addon">
              <i class="material-icons">phone_iphone</i>
          </span>
          <div class="form-line">
              <input type="text" class="form-control mobile-phone-number" name="movil" placeholder="Ex: +00 (000) 000-00-00" id="movil" value="{{ $representative->movil }}">
          </div>
      </div>
  </div>
  <div class="col-md-12">
      <div class="form-group">
          <label class="form-label">DIRECCIÓN</label>
          <div class="form-line">
              <textarea id="address" class="form-control" name="address" style="text-transform:uppercase;" onblur="this.value = this.value.toUpperCase();">{{ $representative->address }}</textarea>
          </div>
      </div>
  </div>
</div>
<div class="row">
    <div class="col-md-12">
        <button href="" class="btn btn-primary" id="registerRepresentative" type="submit">GUARDAR</button>
    </div>
</div>
