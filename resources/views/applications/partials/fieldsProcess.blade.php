<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 m-t-50">
    <div id="image-preview">
        <label for="image-upload" id="image-label">Subir Imagen</label>
        <input type="file" name="url" id="image-upload"/>
    </div>
</div>
<div class="col-lg-4 col-md-3 col-sm-6 col-xs-6">
    <label class="form-label">NACINALIDAD</label>
    <div class="form-group">
        <div class="form-line">
            <input type="text" class="form-control" name="surname" style="text-transform:uppercase;" onblur="this.value = this.value.toUpperCase();" value="{{ $athlete->fullnationality }}" disabled="">
        </div>
    </div>
</div>
<div class="col-lg-4 col-md-3 col-sm-6 col-xs-6">
    <label class="form-label">CEDULA</label>
    <div class="form-group">
        <div class="form-line">
            <input type="text" class="form-control dni" name="dni" style="text-transform:uppercase;" onblur="this.value = this.value.toUpperCase();" disabled="" value="{{ $athlete->dni }}">
        </div>
    </div>
</div>
<div class="col-lg-4 col-md-3 col-sm-6 col-xs-6">
    <label class="form-label">NOMBRES</label>
    <div class="form-group">
        <div class="form-line">
            <input type="text" class="form-control" name="name" style="text-transform:uppercase;" onblur="this.value = this.value.toUpperCase();"  value="{{ $athlete->name }}" required="">
        </div>
    </div>
</div>
<div class="col-lg-4 col-md-3 col-sm-6 col-xs-6">
    <label class="form-label">APELLIDOS</label>
    <div class="form-group">
        <div class="form-line">
            <input type="text" class="form-control" name="surname" style="text-transform:uppercase;" onblur="this.value = this.value.toUpperCase();"  value="{{ $athlete->surname }}" required="">
        </div>
    </div>
</div>
<div class="col-lg-4 col-md-3 col-sm-6 col-xs-6">
    <label class="form-label">FECHA DE NACIMIENTO</label>
    <div class="form-group">
        <div class="form-line">
            <input type="date" class="form-control" name="birthdate"  value="{{ $athlete->birthdate }}" required="">
        </div>
    </div>
</div>
<div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
    <label class="form-label">LUGAR DE NACIMIENTO</label>
    <div class="form-group">
        <div class="form-line">
            <input type="text" class="form-control" name="from" style="text-transform:uppercase;" onblur="this.value = this.value.toUpperCase();"  value="{{ $athlete->from }}" required="">
        </div>
    </div>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <h2 class="card-inside-title">DATOS DEPORTIVOS<h2>
</div>



<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
    <label class="form-label">POSICIÓN</label>
    <div class="form-group">
        <div class="form-line">
            <select class="form-control" name="function" id="positions">
                <option value="" disabled selected>SELECCIONE</option>
                @forelse($positions as $position)
                    <option value="{{ $position->id }}">{{ $position->function }}</option>
                @empty
                    <option value="" disabled="">NO HAY POSICIONES CARGADAS</option>
                @endforelse
            </select>
        </div>
    </div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
    <label class="form-label">FUNCIÓN</label>
    <div class="form-group">
        <div class="form-line">
            <select class="form-control" name="position_id" id="functions">
                <option value="" disabled selected>SELECCIONE</option>
            </select>
        </div>
    </div>
</div>


<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
    <label class="form-label">CATEGORÍA</label>
    <div class="form-group">
        <div class="form-line">
            <select class="form-control" name="function" id="categories">
                <option value="" disabled selected>SELECCIONE</option>
                 @forelse($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->category }}</option>
                @empty
                    <option value="" disabled="">NO HAY CATEGORIAS CARGADAS</option>
                @endforelse
            </select>
        </div>
    </div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
    <label class="form-label">EQUIPO</label>
    <div class="form-line">
        <div class="form-group">
            <div class="form-line">            
                <select class="form-control" name="team_id" id="teams">
                    <option value="" disabled selected>SELECCIONE</option>
                </select>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <h2 class="card-inside-title">ACERCA DE MI</h2>
</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
    <label class="form-label">PESO</label>
    <div class="form-group">
        <div class="form-line">
            <input type="number" step="any" min="0" class="form-control" name="weight"  value="{{ $athlete->weight }}" required="">
        </div>
    </div>
</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
    <label class="form-label">ALTURA</label>
    <div class="form-group">
        <div class="form-line">
            <input type="number" step="any" min="0" class="form-control" name="height" value="{{ $athlete->height }}" required="">
        </div>
    </div>
</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
    <label class="form-label">PIE</label>
    <div class="form-group">
        <div class="form-line">        
            <select class="form-control show-tick" name="foot" >
                <option value="DIESTRO">     DIESTRO 
                </option>
                <option value="ZURDO">
                    ZURDO
                </option>
            </select>
        </div>
    </div>
</div>
<div class="col-lg-6 col-md-6 col-sm-5 col-xs-6">
    <label class="form-label">FECHA DE INICIACIACIÓN EN EL FÚTBOL AMATEUR</label>
    <div class="form-group">
        <div class="form-line">
            <input type="text" class="form-control" name="soccer" style="text-transform:uppercase;" onblur="this.value = this.value.toUpperCase();"  required="">
        </div>
    </div>
</div>
<div class="col-lg-6 col-md-6 col-sm-5 col-xs-6">
    <label class="form-label">ARQUERO QUE MÁS ADMIRO</label>
    <div class="form-group">
        <div class="form-line">
            <input type="text" class="form-control" name="goalkeeper" style="text-transform:uppercase;" onblur="this.value = this.value.toUpperCase();"  required="">
        </div>
    </div>
</div>
<div class="col-lg-6 col-md-6 col-sm-7 col-xs-6">
    <label class="form-label">EDAD EN LA QUE COMENZÉ A PRACTICAR DEPORTES</label>
    <div class="form-group">
        <div class="form-line">
            <input type="number" min="4" class="form-control" name="age" value=" required="">
        </div>
    </div>
</div>
<div class="col-lg-6 col-md-6 col-sm-5 col-xs-6">
    <label class="form-label">DEPORTES QUE PRACTICO</label>
    <div class="form-group">
        <div class="form-line">
            <input type="text" class="form-control" name="sports" style="text-transform:uppercase;" onblur="this.value = this.value.toUpperCase();"  required="">
        </div>
    </div>
</div>
<div class="col-lg-6 col-md-6 col-sm-7 col-xs-6">
    <label class="form-label">DEPORTISTAS O FUTBOLISTAS QUE MAS ADMIRO</label>
    <div class="form-group">
        <div class="form-line">
            <input type="text" class="form-control" name="favorites" style="text-transform:uppercase;" onblur="this.value = this.value.toUpperCase();"  required="">
        </div>
    </div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
    <label class="form-label">HINCHA DE QUÉ EQUIPO NACIONAL SOY</label>
    <div class="form-group">
        <div class="form-line">
            <input type="text" class="form-control" name="fanA" style="text-transform:uppercase;" onblur="this.value = this.value.toUpperCase();"  >
        </div>
    </div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
    <label class="form-label">HINCHA DE QUÉ EQUIPO INTERNACIONAL SOY</label>
    <div class="form-group">
        <div class="form-line">
            <input type="text" class="form-control" name="fanI" style="text-transform:uppercase;" onblur="this.value = this.value.toUpperCase();"  required="">
        </div>
    </div>
</div>
<div class="col-lg-6 col-md-6 col-sm-7 col-xs-6">
    <label class="form-label">EN QUÉ PAÍS Y QUÉ EQUIPO DE FÚTBOL ME GUSARÍA JUGAR</label>
    <div class="form-group">
        <div class="form-line">
            <input type="text" class="form-control" name="country_team" style="text-transform:uppercase;" onblur="this.value = this.value.toUpperCase();"  required="">
        </div>
    </div>
</div>
<div class="col-lg-6 col-md-6 col-sm-5 col-xs-6">
    <label class="form-label">CÚAL ES MI APODO/SOBRENOMBRE DEPORTIVO</label>
    <div class="form-group">
        <div class="form-line">
            <input type="text" class="form-control" name="nickname" style="text-transform:uppercase;" onblur="this.value = this.value.toUpperCase();"  required="">
        </div>
    </div>
</div>
<div class="col-lg-6 col-md-5 col-sm-5 col-xs-6">
    <label class="form-label">QUÉ CARRERA UNIVERSITARIA DESEO ESTUDIAR</label>
    <div class="form-group">
        <div class="form-line">
            <input type="text" class="form-control" name="profession" style="text-transform:uppercase;" onblur="this.value = this.value.toUpperCase();" required="">
        </div>
    </div>
</div>
<div class="col-lg-6 col-md-7 col-sm-7 col-xs-6">
    <label class="form-label">DESPUÉS DEL FÚTBOL, QUÉ TRABAJO ME VEO DESEMPEÑANDO EN EL FUTURO?</label>
    <div class="form-group">
        <div class="form-line">
            <input type="text" class="form-control" name="occupation" style="text-transform:uppercase;" onblur="this.value = this.value.toUpperCase();" required="">
        </div>
    </div>
</div>
<div class="col-lg-6 col-md-6 col-sm-5 col-xs-4">
    <label class="form-label">QUÉ ES EL FÚTBOL PARA MI?</label>
    <div class="form-group">
        <div class="form-line">
            <textarea rows="4" class="form-control no-resize" name="description_football" style="text-transform:uppercase;" onblur="this.value = this.value.toUpperCase();" placeholder="Por favor ingresa algo..." required=""></textarea>
        </div>
    </div>
</div>
<div class="col-lg-6 col-md-6 col-sm-7 col-xs-8">
    <label class="form-label">QUÉ ES LO QUE MÁS ME GUSTA DEL CLUB FORMATIVO</label>
    <div class="form-group">
        <div class="form-line">
            <textarea rows="4" class="form-control no-resize" name="description_like" style="text-transform:uppercase;" onblur="this.value = this.value.toUpperCase();" placeholder="Por favor ingresa algo..." required=""></textarea>
        </div>
    </div>
</div>


