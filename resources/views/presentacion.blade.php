@extends('plantilla')
@section("principal")



<div class="container">
 <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">


    <div class= "carrusel">

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/img/cafe1_con_placa.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="/img/cafe2_con_placa.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="/img/cafe3_con placa.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>


    <div id="boton-productos" class="container-fluid">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 inicio-productos">

        <button type="button" class="btn btn-ttc"><a href="{{url('listadoProductos')}}" role="button">Conocé nuestros productos!</a></button>
        </div>
      </div>
    </div>



  </div>
      <div class="row inicio-lista-1">
        <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
          <div class="practicos">
            <span >
              <i class="fas fa-thumbs-up"></i>
              </span>
          <h3>Prácticos</h3>
          <p>Llevá tu café a cualquier lado</p>

          </div>
        </div>
        <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
          <div class="adaptables">
            <span >
              <i class="fas fa-cog"></i>
              </span>
          <h3>Adaptables</h3>
          <p> A todos los modelos de máquinas</p>

          </div>
        </div>
        <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
          <div class="riquisimo">
            <span >
              <i class="far fa-grin-hearts"></i>
              </span>
          <h3>¡Ricos!</h3>
          <p>Productos de primera calidad</p>

        </div>
      </div>
      </div>



      <div class="row inicio-lista-2">
        <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
          <div class="compra">
            <span >
              <i class="fas fa-shopping-basket"></i>
              </span>
          <h3>Comprá</h3>
          <p>Desde nuestra web o teléfono</p>

          </div>
        </div>
        <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
          <div class="paga">
            <span>
              <i class="fas fa-money-check-alt"></i>
            </span>
            <h3>Pagá</h3>
          <p>Con tarjeta de débito o crédito</p>


          </div>
        </div>
        <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
          <div class="recibilo">
            <span >
              <i class="fas fa-truck"></i>
          </span>
            <h3>Recibilo</h3>
          <p>Con Glovo, Rappi o PedidosYa!</p>

          </div>
        </div>
      </div>
</div>
@endsection
