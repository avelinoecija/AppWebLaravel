@extends('layouts.app')

@section('content')
    <header class="masthead">
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-lg-7 my-auto">
          <div class="header-content mx-auto">
            @foreach( $puntos as $key => $puntuacion )
            <h1 class="mb-5">¡{{$puntuacion->nombre}}, tu puntuación se ha añadido a tu marcador!</h1>
            <a href="{{ url('/game/game' . $puntuacion->id) }}" class="btn btn-outline btn-xl js-scroll-trigger">¡Sigue jugando!</a>
          </div>
        </div>
        <div class="col-lg-5 my-auto">
          <div class="device-container">
              <div class="device">
                <div class="screen">
                    <p>Nueva puntuación: {{$puntuacion->puntuacion}}</p>
                    <p>Nuevo nivel: {{$puntuacion->nivel}}</p>
                    <img src="./../../img/icon-success.png" class="img-fluid" alt="">         
                </div>
              @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
      </header>
@endsection