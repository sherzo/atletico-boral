@extends('layouts.app')

@section('content-html')
    <style type="text/css">
        .hr {
            border: 0; 
            border-top: 1px solid #999; 
            border-bottom: 1px solid #BD1A22;; 
            height:0;
        }

        .label {
            padding: .2em .6em .0em;
        }
    </style>
@endsection

@section('content')
	<div class="row clearfix">
		<div class="col-md-12 col-lg-12">
			<div class="card">
				<div class="header bg-red">
                    <h2>
                        {{ $tournament->fullName }} 
                        <small>ORGANIZADO POR: {{ $tournament->organizer }}</small>
                    </h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a data-toggle="modal" data-target="#smallModal" onclick="addTournament({{ $time->id }})">Cargar encuentros</a></li>
                                <li><a href="javascript:void(0);">Ver estadisticas</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                	<p> {{ $time->start_date }} - {{ $time->end_date }} <span class="label label-danger pull-right">{{ $tournament->type->name }}</span></p>

                	<div class="row">
                		<div class="col-md-12 col-xs-12">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs nav-justified tab-col-red" role="tablist">
                                @foreach($time->categories as $key => $category)
                                    <li role="presentation" class="{{ ($key == 0) ? 'active' : '' }}"><a href="#{{ $category->id }}" data-toggle="tab">{{ $category->category }}</a></li>
                                @endforeach
                            </ul>
                            
                            <!-- Tab panes -->
                            <div class="tab-content">
                                @foreach($time->categories as $key => $category)
                                    <div role="tabpanel" class="tab-pane fade {{ ($key == 0) ? 'in active' : '' }}" id="{{ $category->id }}">
                                        @include('tournaments.partials.matches')
                                    </div>
                                @endforeach
                            </div>  			
                		</div>
                	</div>
                </div>
			</div>
		</div>
	</div>	

<!-- Small Size -->
<div class="modal fade" id="smallModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
        {!! Form::open(['route' => 'matches.create', 'method' => 'GET']) !!}
            <div class="modal-header">
                <h4 class="modal-title" id="smallModalLabel">CARGAR PARTIDOS</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="quantity">NÚMERO DE PARTIDOS</label>
                    <div class="form-line">
                        <input type="number" class="form-control" name="quantity" max="10" maxlength="2" value="1">
                        <input type="hidden" name="time" id="id">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-link waves-effect">ACEPTAR</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CANCELAR</button>
            </div>
        {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    function addTournament(id)
    {
        $('#id').attr('value', id);
    }

    // Incremente el número de goles
    $('.goals').on('click', function(){
        var goals = parseInt($(this).val());
        goals++;
        $(this).val(goals);
    });

</script>
@endsection