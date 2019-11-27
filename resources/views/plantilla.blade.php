<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Chilanka|Gayathri&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/eeaa0807dc.js"></script>
    <link rel="stylesheet" href="/css/general.css">
    <link rel="stylesheet" href="/css/miPerfil.css">

    <title>Coffee Code</title>
  </head>
<body>
  <header>
<div class="">
  <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
  <nav class="navbar navbar-expand navbar-light bg">
    <div class="collapse navbar-collapse navsuperior" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link">Llamanos!</a>
        </li>
      </ul>
      <ul class="nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link" href="shop.php"><i class="fas fa-shopping-cart"></i></a>
        </li>
        <?php if(!isset($_SESSION) || empty($_SESSION['email'])){?>

        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}"><i class="fas fa-sign-in-alt"></i> Iniciar Sesión</a>
          <a class="nav-link" href="{{route('register')}}"><i class="fas fa-sign-in-alt"></i> Registrarse</a>
        </li>


        <?php } else {?>
        <li class="nav-item">
          Bienvenido <?= $_SESSION['email'] ?? ''?>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="miPerfil.php">Mi Perfil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php"> Logout</a>
        </li>
<?php } ?>


      </ul>
    </div>
</nav>
</div>
</div>



<div class="container navinferior">
  <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

      <nav class="navbar navbar-expand-lg navbar-light bg">
        <a class="navbar-brand" href="index.php">
          <img src="/img/pocilloinicioblanco.png" alt="Coffee">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse navprincipal" id="navbarSupportedContent" >
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Inicio</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="productos.php">Productos</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="shop.php">Tienda</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="nosotros.php">Nosotros</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="faq.php">Preguntas Frecuentes</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="contacto.php">Contacto</a>
            </li>
          </ul>

        </div>
      </nav>

    </div>
    </div>
    </div>

    </header>


@yield('principal')





<footer class='container '>
  <div class="row">


  <div class="col-md-6 footer-identidad">
  <h6>Coffee Code</h6>
  <ul>
    <li><a href="index.php">Inicio</a></li>
    <li><a href="productos.php">Productos</a></li>
    <li><a href="shop.php">Tienda</a></li>
    <li><a href="nosotros.php">Nosotros</a></li>
    <li><a href="faq.php">Preguntas Frecuentes</a></li>
    <li><a href="contacto.php">Contactanos</a></li>
  </ul>
</div>



  <div class="col-md-6 footer-redes">
    <h6>Redes</h6>
    <ul>
      <li><a href=""><i class="fab fa-facebook-square"></i></a></li>
      <li><a href=""><i class="fab fa-instagram"></i></a></li>
    </ul>
  </div>

</div>

<div class="row">


  <div class="col-12">
    <p>Todos los derechos reservados</p>
      </div>
    </div>

</footer>

  </div>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
  </html>
