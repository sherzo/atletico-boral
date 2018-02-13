<!-- DATOS DEL REPRESENTANTE -->
<div id="searchForm">  
    <input type="hidden" id="url" value="{{ route('representatives.store') }}">
    <p><i class="material-icons" style="vertical-align: middle; font-size: 30px;">assignment_ind</i> Datos del representante</p><br>
    <div class="row">
        <div class="input-field col s12 m4">
            <select class="browser-default" id="nationality" name="nationality" {{ $user->representative ? 'disabled' : ''}} required=""> 
              <option value="" disabled selected>Seleccione</option>
              <option value="N">Nacional</option>
              <option value="E">Extranjero</option>
            </select>
        </div>

        <div class="input-field col s12 m8">
            <input id="dni" type="text" name="dni"  placeholder="Cedula" value="{{ $user->representative ? $user->representative->dni : ''}}" {{ $user->representative ? 'disabled' : ''}}/>
        </div>
    </div>

    <div class="row"> 
        <div class="input-field col s12 m6">
            <i class="material-icons prefix">account_circle</i>
            <input id="name" type="text" placeholder="Nombres" value="{{ $user->representative ? $user->representative->name : ''}}" {{ $user->representative ? 'disabled' : ''}}/>
        </div>

        <div class="input-field col s12 m6">
            <i class="material-icons prefix">account_circle</i>
            <input id="surname" type="text" placeholder="Apellidos" value="{{ $user->representative ? $user->representative->surname : ''}}" {{ $user->representative ? 'disabled' : ''}}/>
        </div>
    </div>
</div>

<!-- ------------------ FORM REPRESENTANTE ---------------------- -->
@if(!$user->representative)
<div id="representative-form">
    <div class="row">
        <div class="col m2 s6">
            <p>
                <input name="relationship" type="radio" id="test1" value="madre" />
                <label for="test1">Madre</label>
            </p>
        </div>
        <div class="col m10 s6">
            <p>
                <input name="relationship" type="radio" id="test2" valuel="padre"/>
                <label for="test2">Padre</label>
            </p>
        </div>
    </div>

    <div class="row">  
        <div class="input-field col m6 s12">
            <i class="material-icons prefix">phone</i>
            <input id="phone" type="text" name="phone" placeholder="Telefono convencional" />
        </div>

        <div class="input-field col m6 s12">
            <i class="mdi mdi-cellphone-android prefix"></i>
            <input id="movil" type="text" name="movil" placeholder="Telefono movil" />
        </div>
    </div>

    <div class="row">
        <div class="input-field col m12 s12">
            <i class="material-icons prefix">location_on</i>
            <textarea name="direccion" id="address" cols="30" rows="10" class="materialize-textarea" placeholder="Dirección"></textarea>
        </div>
    </div>
    <input type="hidden" value="{{ csrf_token() }}" id="token">

    <a class="btn waves-effect waves-light clear-text btn-flat" href="{{ url('/') }}">CANCELAR</a>
    <a class="btn waves-effect waves-light red darken-3 clear-text" id="registerRepresentative">Registrar</a>
</div>
@endif