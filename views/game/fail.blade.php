@extends('layouts.app')

@section('content')
    <header class="masthead">
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-lg-7 my-auto">
          <div class="header-content mx-auto">
            <h1 class="mb-5">¡Oh! Has fallado o se te ha agotado el tiempo, hay que estudiar más, sigue intentándolo...</h1>
            <a href="{{ url('/game/game') }}" class="btn btn-outline btn-xl js-scroll-trigger">¡Vuelve a intentarlo!</a>
          </div>
        </div>
        <div class="col-lg-5 my-auto">
          <div class="device-container">
              <div class="device">
                <div class="screen">
                
                </div>

                <div class="button">
                  <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
@endsection