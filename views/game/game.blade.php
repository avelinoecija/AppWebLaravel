@extends('layouts.app')

@section('content')
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-lg-7 my-auto">
          <div class="header-content mx-auto">
            <div class="row">
              <div class="col-12 text-center"><h3>¡Que comience el juego</h3></div>
              @foreach( $questions as $key => $pregunta )
              <div class="text-center">
                <h4 class="h4Index">
                  {{$pregunta->pregunta}}
                </h4>
              </div>
              <div class="text-center">
                <a href="{{ url('/game/final') }}" class="btn btn-outline btn-xl js-scroll-trigger">Aníbal</a>
                <br>
                <br>
                <a href="{{ url('/game/fail') }}" class="btn btn-outline btn-xl js-scroll-trigger">Napoleon</a>
                <br>
                <br>
                <a href="{{ url('/game/fail') }}" class="btn btn-outline btn-xl js-scroll-trigger">Alejandro Magno</a>
                <br>
                <br>
                <a href="{{ url('/game/fail') }}" class="btn btn-outline btn-xl js-scroll-trigger">Franco</a>
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
