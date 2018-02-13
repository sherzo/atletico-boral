@extends('layouts.app')

@section('content')

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <div class="card">
        <div class="header">
            <h2>
                {{ $tournament->name }}
                
            </h2>
            <ul class="header-dropdown m-r--5">
                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">more_vert</i>
                    </a>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="javascript:void(0);">Action</a></li>
                        <li><a href="javascript:void(0);">Another action</a></li>
                        <li><a href="javascript:void(0);">Something else here</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="body">
            <div class="list-group">
                @forelse($times as $time)
                <a href="{{ route('tournaments.show', $time->id) }}" class="list-group-item">{{ $time->fullName }}</a>
                @empty
                <p><i class="material-icons" style="vertical-align: middle;">error_outline</i> Este torneo no posee datos <a href="{{ route('tournaments.index') }}">Regresar</a></p>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection