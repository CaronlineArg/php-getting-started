<?php

require('../vendor/autoload.php');

$app = new Silex\Application();
$app['debug'] = true;

// Register the monolog logging service
$app->register(new Silex\Provider\MonologServiceProvider(), array(
  'monolog.logfile' => 'php://stderr',
));

// Register view rendering
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
));

// Our web handlers

$app->get('/', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('index.twig');
});

$app->run();

echo <<<EOT
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet"/>
    <link href="css/carousel.css" rel="stylesheet"/>

    <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="css/navbar-top-fixed.css" rel="stylesheet">
    <link rel="stylesheet" media="only screen and (max-width: 768px)" href="/css/responsive.css">

    <link rel="stylesheet" href="css/animate.css">
    <script src="vendor/components/jquery/jquery.min.js"></script>
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    
    <title>Medina Carolina Estefania - QC manual tester</title>
</head>
<body class="bg-transparent">
    <header>
        <div class="container container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-between fixed-top">
                    <a class="navbar-brand px-2 mr-auto" href="#">
                    <img class="wow animate__animated animate__bounce" src="img/checkbox_yes_png.jpg" alt="" width="30" height="24" class="d-inline-block  align-text-top">
                     Medina Carolina E. - QC Manual Tester
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#home">Inicio</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#portfolio" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Portfolio
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#qa-sec">QA manual tester</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#web-sec">Diseño web</a></li>
                            <li><a class="dropdown-item" href="#com-sec">Community manager</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#me-sec">Sobre mí</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#con-sec">Contacto</a>
                        </li>
                        </ul>
                        <!-- activar searchbar y hacer que sea funcional
                            <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>-->
                     </div>
                </nav>           
        </div>
    </header>
 

  
    <main class="px-5">
    
    

      

        <div id="style2" class="sz  featurette text-center p-5">
           <h1>PORTFOLIO</h1>
          
  
        </div>

       

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">QC testing manual <span class="text-muted">Ejemplos</span></h2>
                <p class="lead">En abril del 2022, comenzo mi carrera de QC manual tester. Me dedico principalmente a las pruebas exploratorias creacion de reportes de bugs con su documentacion correspondiente, tickets de sugerencias de features y validación de requerimientos.</p>
            </div>
            <div class="col-md-5">
                <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                    
                    

                    <div class="carousel-inner ">
                        <div class="carousel-item active">
                            <img src="images/ticket1.png" class="bd-placeholder-img" width="100%" height="100%"  focusable="false"><rect width="100%" height="100%" fill="#777"/>
                            
                        </div>
                        <div class="carousel-item">
                            <img src="images/ticket2.png" class="bd-placeholder-img" width="100%" height="100%"  focusable="false"><rect width="100%" height="100%" fill="#777"/>
                        </div>
                        <div class="container ">
                            <div class="carousel-caption ">
                                
                                <div class="typing-container">
                                    <span id="sentence" class="sentence"><h1>Testing</h1>
                                        <p>Elaboración de reportes de bugs con documentación completa</p> </span>
                                    <span id="feature-text"></span>
                                    <span class="input-cursor"></span>
                                  </div>
                            </div>
                        </div>
                    </div>
                     
     

                </div>    
            </div>
        </div>
    
        <hr class="featurette-divider">
    
        <div class="row featurette">
            
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Desarrollo web<span class="text-muted"> Visita mis páginas</span></h2>
                <p class="lead">Maquetación básica de páginas web simples y creacion de registro y login.</p>
            </div>
            
            <div class="col-md-5 order-md-1">
                <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                   

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/p1.png" class="bd-placeholder-img" width="100%" height="100%"  focusable="false"><rect width="100%" height="100%" fill="#777"/>
                        </div>
                        <div class="carousel-item">
                            <img src="images/p2.png" class="bd-placeholder-img" width="100%" height="100%"  focusable="false"><rect width="100%" height="100%" fill="#777"/>
                        </div>
                        <div class="carousel-item">
                            <img src="images/p4.png" class="bd-placeholder-img" width="100%" height="100%"  focusable="false"><rect width="100%" height="100%" fill="#777"/>
                        </div> 
                        <div class="carousel-item">
                            <img src="images/p5.png" class="bd-placeholder-img" width="100%" height="100%"  focusable="false"><rect width="100%" height="100%" fill="#777"/>
                        </div> 
                        <div class="carousel-item">
                            <img src="images/p6.png" class="bd-placeholder-img" width="100%" height="100%"  focusable="false"><rect width="100%" height="100%" fill="#777"/>
                        </div>
                        <div class="carousel-item">
                            <img src="images/p7.png" class="bd-placeholder-img" width="100%" height="100%"  focusable="false"><rect width="100%" height="100%" fill="#777"/>
                        </div>  
                        <div class="carousel-item">
                            <img src="images/p8.png" class="bd-placeholder-img" width="100%" height="100%"  focusable="false"><rect width="100%" height="100%" fill="#777"/>
                        </div> 
                    </div>

                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Páginas simples</h1>
                            <p>Elaboración de landing pages y páginas simples</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    
        <hr class="featurette-divider">     

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Community manager <span class="text-muted">Explora las redes</span></h2>
                    <p class="lead">Creación de contenido y páginas de facebook e instagram a medida para empresas y emprendedores. Creación de publicidad, posts, historias y comunicación con clientes.</p>
             </div>
            <div class="col-md-5">
                <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                    
                  

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/face-econ.png" class="bd-placeholder-img" width="100%" height="100%"  focusable="false"><rect width="100%" height="100%" fill="#777"/>
                            
                        </div>
                        <div class="carousel-item">
                            <img src="images/insta-econ.png" class="bd-placeholder-img" width="100%" height="100%"  focusable="false"><rect width="100%" height="100%" fill="#777"/>
                        </div>
                        <div class="container">
                            <div class="carousel-caption p-0">
                                <h1>Facebook e Instagram para empresas</h1>
                                <p>Creación de página, contenidos y conexiones con los clientes</p>
                            </div>
                        </div>
                    </div>
                     
                 
                </div>    
            </div>
        </div>
    
            
                    
                
            </div>
        </div>

            <hr class="featurette-divider">
            
    
        <div class="tit featurette-heading text-center">
            <h1>SOBRE MI</h1>
        </div>
            <div id="about" class="container marketing">
        
                <!-- Three columns of text below the carousel -->
                <div class="row">
                    <div class="col-lg-4">
                        <img class="bd-placeholder-img rounded-circle" src="/img/QC.png" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text>
            
                    <h2>Tester manual QC</h2>
                    <p>Experiencia en Testing exploratorio. Uso de Trello, Jira y Github. </p>
                    <p><a class="btn btn-secondary" href="#">Ver detalles &raquo;</a></p>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                    <img class="bd-placeholder-img rounded-circle" src="/img/EL.png" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text>
            
                    <h2>Estudiante</h2>
                    <p>Actualizando los conocimientos en tecnología permanentemente. </p>
                    <p><a class="btn btn-secondary" href="#">Ver detalles &raquo;</a></p>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                    <img class="bd-placeholder-img rounded-circle" src="/img/ISPC.jpeg" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text>
            
                    <h2>Desarrolladora</h2>
                    <p>Cursando la tecnicatura en desarrollo web.</p>
                    <p><a class="btn btn-secondary" href="#">Ver detalles &raquo;</a></p>
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
                <hr class="featurette-divider">
            <div class="jumbotron">
                <h1 class="display-4">Contacto:</h1>
                <br>
                <p class="lead">Email: carolinaestefaniamedina@gmail.com</p>
                <p class="lead">Tel: +54 9 223 6836089</p>
            
                <a class="btn btn-primary btn-lg" href="https://api.whatsapp.com/send?phone=542236836089&text=Buen%20d%C3%ADa,%20requiero%20de%20sus%20servicios." role="button">Click para mensaje de Whatsapp</a>
                </p>
            </div>
            </div>

            <hr class="featurette-divider">

        </div>
       
    </main> 
    
        <!-- FOOTER -->
        <footer class="container">
             <p class="float-end"><a href="#">Back to top</a></p>
             <p>&copy; 2016–2022 Medina Carolina Estefania. &middot; </p>
        </footer>
   
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js></script>
    
   
    <script src="scripts/script.js"></script>
  
    
</body>
</html>
EOT;