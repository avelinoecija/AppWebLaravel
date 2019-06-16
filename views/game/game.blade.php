@extends('layouts.app')

@section('content')
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-lg-7 my-auto">
          <div class="header-content mx-auto">
            <div class="row">
              <div class="col-12 text-center"><h3>¡Que comience el juego!</h3></div>
              @foreach( $questions as $key => $pregunta )
              <div class="text-center">
                <h4 class="h4Index">
                  {{$pregunta->pregunta}}
                </h4>
              </div>
              <div class="text-center">
                <a href="{{ url('/game/final' . $pregunta->idrespuesta) }}" class="btn btn-outline btn-xl js-scroll-trigger">Aníbal</a>
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
      <div class="col-lg-5 my-auto">
          <div class="device-container">
              <div class="device">
                <div class="screen">
                  <span id="countdown-1">30 segundos</span>
                  <script type="text/javascript">
                    // Initialize clock countdowns by using the total seconds in the elements tag
                    secs       = parseInt(document.getElementById('countdown-1').innerHTML,10);
                    setTimeout("countdown('countdown-1',"+secs+")", 1000);

                    /**
                     * Countdown function
                     * Clock count downs to 0:00 then hides the element holding the clock
                     * @param id Element ID of clock placeholder
                     * @param timer Total seconds to display clock
                     */
                    function countdown(id, timer){
                      timer--;
                      minRemain  = Math.floor(timer / 60);
                      secsRemain = new String(timer - (minRemain * 60));
                      // Pad the string with leading 0 if less than 2 chars long
                      if (secsRemain.length < 2) {
                        secsRemain = '0' + secsRemain;
                      }

                      // String format the remaining time
                      clock      = secsRemain;
                      document.getElementById(id).innerHTML = clock;
                      if ( timer > 0 ) {
                        // Time still remains, call this function again in 1 sec
                        setTimeout("countdown('" + id + "'," + timer + ")", 1000);
                      } else {
                        // Time is out! Hide the countdown
                        document.getElementById(id).style.display = 'none';
                        location.replace("http://habishimilce.test/game/fail");
                      }
                    }
                  </script>
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
