<header id = "my-header">
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class = "col-sm-4">
          <div class="row margin-top-20">
            {{ Form::open(['route' => 'lang', 'class' => 'pull-left margin-right', 'id' => 'ru-submit']) }}
              <input type = "hidden" name = "lang" value = "ru"/>
              <a type = "submit" onclick = "document.getElementById('ru-submit').submit();" class = "{{ App::isLocale('ru') ? "my-btn-active" : "" }} my-btn btn btn-default"><b>Рус</b></a>
            {{ Form::close() }}

            {{ Form::open(['route' => 'lang', 'class' => 'pull-left', 'id' => 'uz-submit']) }}
              <input type = "hidden" name = "lang" value = "uz"/>
              <a type = "submit" onclick = "document.getElementById('uz-submit').submit();" class = "{{ App::isLocale('uz') ? "my-btn-active" : "" }} my-btn btn btn-default"><b>Ўзб</b></a>
            {{ Form::close() }}

          </div><!-- end of ru/uz -->

          <div class = "row margin-top-20">
            <div class="input-group search-group">
              <input type = "text" placeholder="{{ __('app.search') }}..." class = "form-control search"/>
              <div class="input-group-btn">
                <button class="btn btn-default" type="submit">
                  <i class="glyphicon glyphicon-search"></i>
                </button>
              </div>
            </div>
          </div>
        </div>

        <div class = "col-sm-4 col-xs-12 text-center">
          <img src="{{ asset("images/logo.png")}}" class = "brand-image" height = "240px">
        </div>

        <div class="col-sm-4">
          <div class="pull-right hidden-xs">
                <h4><span class="glyphicon glyphicon-phone-alt"></span> {{ __('app.save_service') }}: 102</h4>

                <h4><span class="glyphicon glyphicon-earphone"></span> {{ __('app.trust_call') }}: 1102</h4>  
          </div>
        </div>
        
      </div><!-- end of header row-->
    </div>
    <h2 class="text-center">{!! __('app.dep_name_part_1') !!}</h2>
    <h1 class = "text-center margin-top-0"> <b>{{ __('app.dep_name_part_2') }}</b></h1>
    <br>
  </div>
</header><!-- end of header-->

