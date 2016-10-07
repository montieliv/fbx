
@extends('layouts.inicio')
@section('title', 'Inicio')
<!-- @section('sidebar')
    @parent
@endsection -->
@section('content')  
    <link rel="stylesheet" type="text/css" href="css/carousel.css">

<!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel" >
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="../images/banners/banner1.png" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
                           <!--  <p>Evento de Aniversario</p>
                            <a class="btn btn btn-small btn-primary" href="#" role="button">Leer más...</a> -->
            </div>
          </div>
        </div>
        <div class="item">
          <img class="Second-slide" src="../images/banners/banner3.png" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
                           <!--  <p>Evento de Aniversario</p>
                            <a class="btn btn btn-small btn-primary" href="#" role="button">Leer más...</a> -->
            </div>
          </div>
        </div>
        <div class="item">
          <img class="Third-slide" src="../images/banners/banner2.png" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <!--  <p>Evento del la Expropiación Petrolera</p>
                            <a class="btn btn btn-small btn-primary" href="#" role="button">Leer más...</a> -->
            </div>
          </div>
        </div>
        <div class="item">
          <img class="fourth-slide" src="../images/banners/banner4.png" alt="fourth slide">
          <div class="container">
            <div class="carousel-caption">
              <!--  <p>Visita del Líder Sindical</p>
                            <a class="btn btn btn-small btn-primary" href="#" role="button">Leer más...</a> -->
            </div>
          </div>
        </div>
      </div>

      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">            
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel --> 
    <h2 class="text-center"><em> “Las ideas y los valores del alma, son nuestras únicas armas; no tenemos otras, pero tampoco hay mejores”. (Manuel Gómez Morín)</em></h2><br>        

     <div class="container marketing">
       <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="../images/eventos/evento1.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Evento 1</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="../images/eventos/evento2.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Evento 2</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="../images/eventos/evento3.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Evento 3</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

     <!-- START THE FEATURETTES -->
      <hr class="featurette-divider" id="trayectoria" name="trayectoria">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Trayectoría Política: <span class="text-muted">  Trabajo, Transparencia y Acción!</span></h2>
          <p class="lead">Ingresé al Partido Acción Nacional en 1998. He sido desde cuidadora de casilla y  RG, así como secretaria de PPM y candidata a Diputada Federal (2003). Actualmente soy Capacitadora SCAN.</p>
          <p><a class="btn btn-info" href="#" role="button">&raquo; Experiencia Laboral en la Iniciativa Privada</a></p>
          <p><a class="btn btn-info" href="#" role="button">&raquo; Trayectoria como Docente &nbsp&nbsp&nbsp</a></p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="../images/trayectoria.jpg" data-src="holder.js/500x500/auto" alt="TRAYECTORIA FBX">          
        </div>
      </div>

      <hr class="featurette-divider" id="regidora" name="regidora">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Tercer Regiduría<span class="text-muted">.- Transporte y Vialidad</span></h2>
          <p class="lead">Funciones, obligaciones, comisiones, trabajos de cabildo, etc…, relacionadas con la tercer regiduría.</p>
          <p><a class="btn btn-info" href="#" role="button">&raquo; Ver detalles&nbsp&nbsp&nbsp</a></p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block"  src="../images/regidora.jpg" data-src="holder.js/500x500/auto" alt="REGIDORA FBX">
        </div>
      </div>}

      <hr class="featurette-divider" id="noticias" name="noticias">
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Últimas Noticias.-<span class="text-muted">Playa del Carmen</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        <p><a class="btn btn-info" href="#" role="button">&raquo; Ver más...&nbsp&nbsp&nbsp</a></p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="../images/solidaridad.jpg" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>
      <hr class="featurette-divider"  id="RedSoc" name="RedSoc">
    </div>                            
@endsection 

@section('redesSoc')  
   <div class="container marketing">
       <div class="row">
        <div class="col-lg-6">
           <h2 >FACEBOOK</h2>
           <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Ffabiolaenaccion%2Fposts%2F1030868163635929&width=500" width="500" height="570" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
        </div>
        <div class="col-lg-6">
            <h2>TWITTER</h2>
                        <a class="twitter-timeline" data-dnt="true" href="https://twitter.com/montieliv" data-widget-id="496672281767071744">Tweets por el @montieliv.</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
          
        </div>
    </div>

      <h2>Enlaces de interés</h2>
        <p>Espero te sea de utilidad los siguientes enlaces</p>
      <div class="container">      
        <div class="panel-group">
          <div class="panel panel-default col-lg-4">
            <div class="panel-heading">Gobierno</div>
            <div class="panel-body">
                <a href="#" class="list-group-item">Gobierno Federal</a>
                <a href="#" class="list-group-item">Gobierno Estatal</a>
                <a href="#"  class="list-group-item">Gobierno Municipal</a>
            </div>
          </div>
          <div class="panel panel-info col-lg-4" style:"margin-top:-10px;">
            <div class="panel-heading">Sociedad</div>
            <div class="panel-body">
                  <a href="#" class="list-group-item">Universidades</a>
                  <a href="#" class="list-group-item">Organizaciones</a>
                  <a href="#" class="list-group-item">Fundaciones</a>
            </div>
          </div>
          <div class="panel panel-primary col-lg-4">
            <div class="panel-heading">Partido Acción Nacional</div>
            <div class="panel-body">
                <a href="#" class="list-group-item">PAN NACIONAL</a>
                <a href="#" class="list-group-item">PAN ESTATAL</a>
                <a href="#" class="list-group-item">PAN MUNICIPAL</a>
            </div>
          </div>
        </div>
      </div>
@endsection
