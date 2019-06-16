@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Habis&Himilce</title>

  <!-- Bootstrap core CSS -->
  <link href="./../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="./../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./../../vendor/simple-line-icons/css/simple-line-icons.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

  <!-- Plugin CSS -->
  <link rel="stylesheet" href="./../../device-mockups/device-mockups.min.css">

  <!-- Custom styles for this template -->
  <link href="./../../css/new-age.min.css" rel="stylesheet">

</head>
<body id="page-top">

    <header class="masthead">
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-lg-7 my-auto">
          <div class="header-content mx-auto">
            <h1 class="mb-5">¡Un juego que pondrá a prueba tus conocimientos!</h1>
            @foreach( $usuarios as $key => $usuario )
            <a href="{{ url('/game/select' . $usuario->id) }}" class="btn btn-outline btn-xl js-scroll-trigger">¡Pruébalo!</a>
            @endforeach
          </div>
        </div>
        <div class="col-lg-5 my-auto">
          <div class="device-container">
            <div class="device-mockup iphone6_plus portrait white">
              <div class="device">
                <div class="screen">
                  <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                  <img src="./../../img/app.png" class="img-fluid" alt="">
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
    <section class="download bg-primary text-center" id="download">
    <div class="container">
      <div class="row">
        <div class="col-md-8 mx-auto">
          <h2 class="section-heading">Descubre todo lo que sabes y lo que crees saber</h2>
          <p>Disponible en Google Play (siempre que no seas Huawei)</p>
          <div class="badges">
            <a class="badge-link" href="#"><img src="./../../img/google-play-badge.svg" alt=""></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="features" id="features">
    <div class="container">
      <div class="section-heading text-center">
        <h2>Diviértete y aprende</h2>
        <p class="text-muted">Mira todo lo que puedes hacer con nuestra App</p>
        <hr>
      </div>
      <div class="row">
        <div class="col-lg-4 my-auto">
          <div class="device-container">
            <div class="device-mockup iphone6_plus portrait white">
              <div class="device">
                <div class="screen">
                  <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                  <img src="./../../img/app.png" class="img-fluid" alt="">
                </div>
                <div class="button">
                  <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8 my-auto">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-6">
                <div class="feature-item">
                  <i class="icon-screen-smartphone text-primary"></i>
                  <h3>Compatible con varios dispositivos</h3>
                  <p class="text-muted">Listo para usar en varios dispositivos Android</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="feature-item">
                  <i class="icon-camera text-primary"></i>
                  <h3>Distintos niveles de dificultad</h3>
                  <p class="text-muted">Puede ser usado por alumnos de varios cursos</p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="feature-item">
                  <i class="icon-present text-primary"></i>
                  <h3>¡Totalmente gratuita!</h3>
                  <p class="text-muted">Nuestra app puede descargarse gratis en Google Play</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="feature-item">
                  <i class="icon-lock-open text-primary"></i>
                  <h3>Código Abierto</h3>
                  <p class="text-muted">Encuéntrame en GitHub (avelinoecija)</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="cta">
    <div class="cta-content">
      <div class="container">
        <h2>No esperes más<br>Pruébala gratis</h2>
        <a href="#contact" class="btn btn-outline btn-xl js-scroll-trigger">¡Empecemos!</a>
      </div>
    </div>
    <div class="overlay"></div>
  </section>

  <section class="contact bg-primary" id="contact">
    <div class="container">
      <h2>We
        <i class="fas fa-heart"></i>
        new friends!</h2>
      <ul class="list-inline list-social">
        <li class="list-inline-item social-twitter">
          <a href="#">
            <i class="fab fa-twitter"></i>
          </a>
        </li>
        <li class="list-inline-item social-facebook">
          <a href="#">
            <i class="fab fa-facebook-f"></i>
          </a>
        </li>
        <li class="list-inline-item social-google-plus">
          <a href="#">
            <i class="fab fa-google-plus-g"></i>
          </a>
        </li>
      </ul>
    </div>
  </section>

  <!-- Bootstrap core JavaScript -->
  <script src="./../../vendor/jquery/jquery.min.js"></script>
  <script src="./../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="./../../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="./../../js/new-age.min.js"></script>

</body>

</html>
@endsection

