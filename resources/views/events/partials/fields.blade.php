<div class="row clearfix">
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <label class="form-label">ACTIVIDAD</label>
        <select class="form-control show-tick" name="activity_id" required>
            <option value="" disabled selected>SELECCIONE</option>
            @foreach($activities as $activity)
            	<option value="{{ $activity->id }}">{{ $activity->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
        <label class="form-label">TÍTULO</label>
        <div class="form-group">
            <div class="form-line">
                <input type="text" class="form-control" name="title" value="{{ $title = isset($events->title) ? $events->title : '' }}" style="text-transform:uppercase;" onblur="this.value = this.value.toUpperCase();" required>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
        <label class="form-label">FECHA DE EVENTO</label>
        <div class="form-group">
            <div class="form-line">
                <input type="date" class="form-control" name="date" value="{{ $date = isset($events->date) ? $events->date : old('date') }}" style="text-transform:uppercase;" onblur="this.value = this.value.toUpperCase();" required>
            </div>
        </div>
    </div>
</div>
<label class="form-label">URL VIDEO</label>
<div class="form-group">
    <div class="form-line">
        <input type="text" class="form-control" name="url" value="{{ $url = isset($events->url) ? $events->url : old('url') }}" maxlength="255" placeholder="https://www.youtube.com/?hl=es-419" />
    </div>
</div>
<textarea name="content" id="ckeditor" rows="10">
    {{ $event = isset($events->content) ? $events->content : old('content') }}
</textarea>