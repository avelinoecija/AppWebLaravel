@extends('layouts.app')

@section('content')
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-lg-7 my-auto">
          <div class="header-content mx-auto">
            <div class="row">
              <div class="col-12 text-center"><h3>¡Buena suerte!</h3></div>
              @foreach( $cuestionarios as $key => $cuestionario )
              <div class="text-center">
                <h4 class="h4Index">
                  Ahora selecciona el cuestionario que quieres realizar
                </h4>
              </div>
              <div class="text-center">
                <a href="{{ url('/game/game' . $cuestionario->idtest) }}" class="btn btn-outline btn-xl js-scroll-trigger">Historia antigua</a>
                <br>
                <br>
                <a href="#" class="btn btn-outline btn-xl js-scroll-trigger">Historia del arte</a>
                <br>
                <br>
                <a href="#" class="btn btn-outline btn-xl js-scroll-trigger">Historia militar</a>
                <br>
                <br>
                <a href="#" class="btn btn-outline btn-xl js-scroll-trigger">Historia contemporánea</a>
                <br>
                <br>
              </div>
              @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
@endsection