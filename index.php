
<?php
  include("conexion.php");
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
   
    <meta name="author" content="">

    <title>InBike</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">

    <!-- modal -->
      <link rel="stylesheet" type="text/css" href="login/css/util.css">

    

  </head>
 
    
  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top" style="color:black; ">InBike </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Mision y Vision</a>
            </li>
      
       
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contactos</a>
            </li>
            <li class="nav-item">
           

            </li>
          </ul>

        </div>

      </div>

    </nav>
    <header class="masthead text-center text-white d-flex">

      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong style="color: black;"> Ciclopatas de corazón </strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5" style="color: black;">Brindando lo necesario en ciclas !</p>
            <div class="container">

              <form action="registrar.php" method="POST" class="btn btn-primary btn-xl js-scroll-trigger"  data-toggle="modal" data-target="#myModal">
                <button>Registrate</button>
                
              </form>
            </div><br>

              <div class="container">

                           <form action="contraseña.php" method="POST" class="btn btn-primary btn-xl js-scroll-trigger"  data-toggle="modal" data-target="#myModal">
                <button>Ingresar</button>
                
              </form>
              </div>
          </div>
        </div>
      </div>
    </header>

    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">



            <h2 class="section-heading text-white">Mision</h2>
            <hr class="light my-4">
            <p class="text-faded mb-4">Somos una pagina comprometida con el deporte, la salud, el cuidado y nuestra amiga la bicicleta por lo tanto en esta pagina podrás encontrar guías, rutas , consejos que serán de vital importancia a la hora de emprender con el caballito de acero así que sigue tu camino con InBike y que la aventura comience la aventura.</p>

            <h2 class="section-heading text-white">vision</h2>
            <hr class="light my-4">
            <p class="text-faded mb-4">Somos un grupo de cuatro de jóvenes emprendedores que desde la niñez hemos estado involucrados en un ambiente de ciclas por lo tanto hemos capturado las necesidades que hoy en día no han sido suplidas en este contagioso ambiente por lo que conocemos el campo y queremos lo mejor para el campo.</p>
            
          </div>
        </div>
      </div>
    </section>



    

 

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Contactanos</h2>
            <hr class="my-4">
            <p class="mb-5">Si aun tienes dudas comunicate con nosotros </p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
            <p>300 345 6276</p>
            <p>310 723 5463</p>
            <p>322 412 6734</p>
            <p>305 511 6773</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
            <p>
              <a href="#">Inbikecolombia@hotmail.com</a>
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

    <script src="login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="login/vendor/bootstrap/js/popper.js"></script>
  <script src="login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="login/vendor/daterangepicker/moment.min.js"></script>
  <script src="login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="login/js/main.js"></script>


 

 


  </body>

</html>


<?php
    $correo=$_POST["correo"];
    $usuario=$_POST["usuario"];
    $contrasena=$_POST["contrasena"];
    $resultado="INSERT INTO login(usuario, contrasena, correo) VALUES ('$usuario', '$contrasena','$correo')";
    $res=mysqli_query($conexion, $resultado);
?>