@extends('layouts.app')

@section('content')
    <header class="masthead">
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-lg-7 my-auto">
          <div class="header-content mx-auto">
            <h1 class="mb-5">¡Genial {{$puntos->nombre}}! Has acertado, bien hecho</h1>
          
            <a href="{{ url('/game/game' . $puntos->id) }}" class="btn btn-outline btn-xl js-scroll-trigger">¡Sigue jugando!</a>
          </div>
        </div>
        <div class="col-lg-5 my-auto">
          <div class="device-container">
              <div class="device">
                <div class="screen">
                  <p>Puntos: {{ $puntos->puntuacion }}</p>
                  <p>Nivel: {{ $puntos->nivel }}</p>
                  <form class="col-md-12" action="{{ url('/game/final' . $puntos->idrespuesta) }}" method="POST">
                    {{method_field('POST')}}
                    <input name="_method" type="hidden" value="POST">
                    {{ csrf_field() }}

                  <div class="form-group">
                      <input type="hidden" name="puntuacion" id="puntuacion" class="form-control" value="{{ $puntos->puntuacion+10 }}">
                  </div>

                  <div class="form-group">
                      <input type="hidden" name="nivel" id="nivel" class="form-control" value="{{ $puntos->nivel+1 }}">
                  </div>
                  <div class="form-group text-center">
                      <button type="submit" class="btn btn-outline btn-xl js-scroll-trigger" href="{{ url('/game/final2' . $puntos->idrespuesta) }}">
                         ¡Añade tus puntos!
                      </button>
                  </div>

                </form> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </header>
@endsection

