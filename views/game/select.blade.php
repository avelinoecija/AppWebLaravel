@extends('layouts.app')

@section('content')
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-lg-7 my-auto">
          <div class="header-content mx-auto">
            <div class="row">
              <div class="col-12 text-center"><h3>¡Que comience el juego</h3></div>
              @foreach( $materias as $key => $materia )
              <div class="text-center">
                <h4 class="h4Index">
                  Selecciona la asignatura
                </h4>
              </div>
              <div class="text-center">
                <a href="{{ url('/game/test' . $materia->idasignatura) }}" class="btn btn-outline btn-xl js-scroll-trigger">Historia</a>
                <br>
                <br>
                <a href="#" class="btn btn-outline btn-xl js-scroll-trigger">Matemáticas</a>
                <br>
                <br>
                <a href="#" class="btn btn-outline btn-xl js-scroll-trigger">Lengua</a>
                <br>
                <br>
                <a href="#" class="btn btn-outline btn-xl js-scroll-trigger">Biología</a>
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