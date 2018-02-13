@extends('layouts.app')

@section('content')
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
        <div class="header">
            <h2>
                EDITAR REPRESENTANTE
                <small></small>
            </h2>
        </div>
        <div class="body">
          <div class="demo-masked-input">
              {!! Form::model($representative, ['route' => ['representatives.update', $representative], 'files' => false, 'method' => 'PUT']) !!}

                @include('representatives.partials.fields')

              {!! Form::close() !!}
          </div>
       </div>
    </div>
</div>
@endsection

@section('scripts')
  <script>
      	var $demoMaskedInput = $('.demo-masked-input');
      //Mobile Phone Number
      $demoMaskedInput.find('.mobile-phone-number').inputmask('(99) 999-9999', { placeholder: '(___) ___-____' });
      //Phone Number
      $demoMaskedInput.find('.phone-number').inputmask('(999) 999-9999', { placeholder: '(____) ___-____' });
      //Dni
      $demoMaskedInput.find('.dni').inputmask('999999999-9', { placeholder: '_________-_' });
  </script>
@endsection
