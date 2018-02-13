@extends('layouts.app')

@section('contentheader_title', 'Representantes')
@section('contentheader_description', 'Inicio')

@section('content')
  <!-- Exportable Table -->
  <div class="row clearfix">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="card">
              <div class="header">
                  <h2>
                      REGISTROS DE REPRESENTANTES
                  </h2>
            </div>
            <div class="body">
                  @include('representatives.partials.table')
          </div>
      </div>
  </div>
</div>
@endsection
