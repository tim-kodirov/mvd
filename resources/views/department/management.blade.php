@extends('layouts.main')

@section('title')

@section('content')


<h2 class = "color-title">{{ __('app.department_managers') }}</h2>
<hr>
 
<div class="row">
  <div class="col-sm-4 col-xs-3 text-center">
    <img src="{{ asset('images/no_photo.png') }}" width = "80%">
  </div>

  <div class="col-sm-8 col-xs-9">
    <h3><b>Бобожонов Пулат Раззакович</b></h3>
    <h4>Министр внутренних дел Республики Узбекистан</h4>
    <h4><b>Телефон:</b></h4>
    <h4><b>Дни прима: </b>Для граждан, желающих записаться на прием к Министру внутренних дел Республики Узбекистан необходимо обратиться с заявлением в Министерство внутренних дел Республики Узбекистан.</h4>
  </div>
</div>
<hr>

<div class="row">
  <div class="col-sm-4 col-xs-3 text-center">
    <img src="{{ asset('images/no_photo.png') }}" width = "80%">
  </div>

  <div class="col-sm-8 col-xs-9">
    <h3><b>Бобожонов Пулат Раззакович</b></h3>
    <h4>Министр внутренних дел Республики Узбекистан</h4>
    <h4><b>Телефон:</b></h4>
    <h4><b>Дни прима: </b>Для граждан, желающих записаться на прием к Министру внутренних дел Республики Узбекистан необходимо обратиться с заявлением в Министерство внутренних дел Республики Узбекистан.</h4>
  </div>
</div>
<hr>

<div class="row">
  <div class="col-sm-4 col-xs-3 text-center">
    <img src="{{ asset('images/no_photo.png') }}" width = "80%">
  </div>

  <div class="col-sm-8 col-xs-9">
    <h3><b>Бобожонов Пулат Раззакович</b></h3>
    <h4>Министр внутренних дел Республики Узбекистан</h4>
    <h4><b>Телефон:</b></h4>
    <h4><b>Дни прима: </b>Для граждан, желающих записаться на прием к Министру внутренних дел Республики Узбекистан необходимо обратиться с заявлением в Министерство внутренних дел Республики Узбекистан.</h4>
  </div>
</div>
<hr>

<div class="row">
  <div class="col-sm-4 col-xs-3 text-center">
    <img src="{{ asset('images/no_photo.png') }}" width = "80%">
  </div>

  <div class="col-sm-8 col-xs-9">
    <h3><b>Бобожонов Пулат Раззакович</b></h3>
    <h4>Министр внутренних дел Республики Узбекистан</h4>
    <h4><b>Телефон:</b></h4>
    <h4><b>Дни прима: </b>Для граждан, желающих записаться на прием к Министру внутренних дел Республики Узбекистан необходимо обратиться с заявлением в Министерство внутренних дел Республики Узбекистан.</h4>
  </div>
</div>
<hr>




@endsection


@section('sidebar')

@include('partials._department_sidebar')
    
@endsection

@section('scripts')
  <script type="text/javascript">
    $('.news-type-select').change(function()
      { 
        var val = $(this).val();
        window.location.replace('/department/2?region='+val);
      });
  </script>
@endsection

