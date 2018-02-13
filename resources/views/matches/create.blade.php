@extends('layouts.app')

@section('content')

<div class="block-header">
	<h2>REGISTRO DE ENCUENTROS (PARTIDOS)</h2>
</div>

<div class="row clearfix">
	<div class="col-md-12-col-lg-12 col-xs-12">
		<div class="card">
			<div class="header">
            	<h2>{{ $tournament->name }}</h2>
        	</div>
			<div class="body">
            {!! Form::open(['route' => 'matches.store', 'method' => 'POST']) !!}
				<!-- Nav tabs -->
                <ul class="nav nav-tabs nav-justified tab-col-red" role="tablist">
					@foreach($categories as $key => $category)
                        <li role="presentation" class="{{ ($key == 0) ? 'active' : '' }}"><a href="#{{ $category->id }}" data-toggle="tab">{{ $category->category }}</a></li>
                    @endforeach
                </ul>
				
				<!-- Tab panes -->
                <div class="tab-content">
                    @foreach($categories as $key => $category)
                        @include('matches.partials.fields')
                	@endforeach
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                </div>
			 {!! Form::close() !!}
            </div>
		</div>
	</div>
</div>

@endsection

@section('scripts')

<script>
	$('.datepicker').bootstrapMaterialDatePicker({
        format: 'YYYY-M-D',
        clearButton: true,
        weekStart: 1,
        time: false,
        monthNames: [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julilio", "Agosto", "Septiembre", "Octubre", "Noviembre", "" ]
    });
        $('.timepicker').bootstrapMaterialDatePicker({
        format: 'HH:mm',
        clearButton: true,
        date: false
    });
</script>
@endsection