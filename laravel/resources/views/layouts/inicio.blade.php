<!DOCTYPE HTML>
<HTML lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>FBX @yield('title')</title>
    </head>
    <body>
<!--         @section('sidebar')            
        @show -->
        <!-- inicia menu -->
        <div class="navbar-wrapper">
              <div class="container">
                <nav class="navbar navbar-inverse navbar-fixed-top">
                  <div class="container">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="#">FBX</a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                      <ul class="nav navbar-nav">
                        <li class="active"><a href="/">Inicio</a></li>
                        <li><a href='infoFBX'>Biografía</a></li>
                        <li><a href="/#trayectoria">Trayectoría Política</a></li>
                        <li><a href="/#regidora">Regiduría</a></li>
                        <li><a href="/#noticias">Noticias</a></li>
                        <li><a href="/#RedSoc">Redes Sociales</a></li>
                        <li><a href="#contact">Contacto</a></li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Eventos<span class="caret"></span></a>
                          <ul class="dropdown-menu">

                            <li class="dropdown-header">2016</li>                            
                            <li><a href="#"><span class="glyphicon glyphicon-picture"></span> Septiembre</a></li>
                            <!-- <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li> -->
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">2017</li>
                                <li><a href="#"><span class="glyphicon glyphicon-facetime-video"></span> Septiembre</a></li>
                            <li role="separator" class="divider"></li>                                
                            <li class="dropdown-header">2018</li>
                                <li><a href="#"><span class="glyphicon glyphicon-picture"></span> Septiembre</a></li>
                            <li role="separator" class="divider"></li>                                
                            <li class="dropdown-header">2019</li>
                                <li><a href="#"><span class="glyphicon glyphicon-facetime-video"></span> Septiembre</a></li>                              
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div>
                </nav>

              </div>
        </div>        
         
<!--     <article class="item">
     @section('sidebar')
     @show
     </article>  -->     
    <div id="container" style="margin-top:0em">    
                @yield('content')
    </div><!-- /.container -->   

    <div id="container" style="margin-top:0em">    
                  <div class="container marketing" style="margin-top:0">                
                    @yield('redesSoc')
                  </div>                           
    </div><!-- /.container -->                                      

                <!-- FOOTER -->
                <footer>
                  <hr>
                  <a class="pull-right" href="#" style="position:absolute:;"><span class="glyphicon glyphicon-circle-arrow-up"></span></a>            
                  <p>&copy; 2016 Fabiola Ballesteros Xiconténcatl <a href="#" class="label label-danger">Política de Privacidad</a>&nbsp;<a href="#" class="label label-danger">Terminos y Condiciones</a></p>
                  <a href="auth" target="_new" class="btn btn-success">@montieliv</a>
                </footer>
    <script type="text/javascript" src="{!! asset('js/jquery.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/holder.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/bootstrap.min.js') !!}"></script>
  </body>
</html>
