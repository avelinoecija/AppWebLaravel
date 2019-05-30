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

<!-- Navigation -->

  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Habis & Himilce</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#download">Juego</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#features">Características</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{ url('/contacto') }}">Contacto</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<div class="container fondo">
   <div class="offset-md-3 col-md-6">
      <div class="card">
         <div class="card-header text-center text-warning bg-dark">
            Modificar Usuario
         </div>
         <div class="card-body">

        <form class="col-md-12" action="#" method="POST">
			{{ method_field('PUT') }}			

            {{ csrf_field() }}

            <div class="form-group">
               <label for="name">Nombre</label>
               <input type="text" name="name" id="name" class="form-control" value="{{$usuario['nombre']}}">
            </div>

            <div class="form-group">
               <label for="subname">Apellido</label>
               <input type="text" name="subname" id="subname" class="form-control" value="{{$usuario->apellido}}">
            </div>

            <div class="form-group">
               <label for="email">Email</label>
               <input type="text" name="email" id="email" class="form-control" value="{{$usuario->email}}">
            </div>

            <div class="form-group">
               <label for="password">Password</label>
               <input type="text" name="password" id="password" class="form-control">
            </div>

            <div class="form-group">
                <label for="address">Curso</label>
                <input type="text" name="address" id="address" class="form-control" value="{{$usuario->curso}}">
            </div>
            <input type="hidden" name="admin" id="admin" class="form-control" value="{{$usuario->admin}}">
            <div class="form-group">
               <label for="user">Pregunta</label>
               <input type="text" name="user" id="user" class="form-control" value="{{$usuario->idpregunta}}">
            </div>
            <div class="form-group">
               <label for="user">Respuesta</label>
               <input type="text" name="user" id="user" class="form-control" value="{{$usuario->idrespuesta}}">
            </div>
            <div class="form-group text-center">
               <button type="submit" class="btn btn-warning button">
                   Modificar Usuario
               </button>
            </div>

            </form>

         </div>
      </div>
   </div>
</div>
  <footer>
    <div class="container">
      <p>&copy; Avelino Écija. All Rights Reserved.</p>
      <ul class="list-inline">
        <li class="list-inline-item">
          <a href="#">Privacidad</a>
        </li>
        <li class="list-inline-item">
          <a href="#">Términos y Condiciones</a>
        </li>
        <li class="list-inline-item">
          <a href="#">FAQ</a>
        </li>
      </ul>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="./../../vendor/jquery/jquery.min.js"></script>
  <script src="./../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="./../../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="./../../js/new-age.min.js"></script>

</body>

</html>
@stop