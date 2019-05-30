@extends('layouts.app')

@section('content')
    <header class="masthead">
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-lg-7 my-auto">
          <div class="header-content mx-auto">
            @foreach( $puntos as $key => $puntuacion )
            <h1 class="mb-5">¡Genial {{$puntuacion->nombre}}! Has acertado, bien hecho</h1>
            <a href="{{ url('/game/game' . $puntuacion->id) }}" class="btn btn-outline btn-xl js-scroll-trigger">¡Sigue jugando!</a>
          </div>
        </div>
        <div class="col-lg-5 my-auto">
          <div class="device-container">
              <div class="device">
                <div class="screen">
                  <form action="{{ url('/game/final2' . $puntuacion->id) }}" method="PUT" class="side-by-side">
                      {{ method_field('PUT') }}     

                      {{ csrf_field() }}
                    <input type="hidden" name="puntuacion" value="{{ $puntuacion->puntuacion+10 }}">
                    <input type="hidden" name="nivel" value="{{ $puntuacion->nivel+1 }}">
                    <input type="submit" class="btn btn-outline btn-xl js-scroll-trigger" value="Añade tus puntos">
                  </form>           
                </div>
              @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
      </header>
@endsection

