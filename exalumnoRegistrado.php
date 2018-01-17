<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DEPARTAMENTO DE INFORMATICA DEL CDP JOSE CABRERA</title>
    <meta name="description" content="Departamento de informatica del CDP Jose Cabrera">
    <meta name="keywords" content="Grado superior, Desarrollo de aplicaciones web, Instituto, Informatica">
    <meta name="author" content="Angel Varela Pruaño">

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.2.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/jasny-bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
<link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <!-- Slider
    ================================================== -->
    <link href="css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="css/owl.theme.css" rel="stylesheet" media="screen">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" type="text/css"  href="css/style2.css">


    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="js/modernizr.custom.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <!-- Custom Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Mrs+Sheppards%7CDosis:300,400,700%7COpen+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800;' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">
    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css">





  </head>
  <style media="screen">


  </style>
  <body>
    <?php
    $nombre=$apellido1=$apellido2=$localidad=$promocion=$fotografia=$bibliografia="";
    $nombreErr=$apellido1Err=$apellido2Err=$localidadErr=$promocionErr=$fotografiaErr=$bibliografiaErr="";


    ?>

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
    	<!-- Brand and toggle get grouped for better mobile display -->
    	<div class="navbar-header">
    		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
    		<span class="sr-only">Toggle navigation</span>
    		<span class="icon-bar"></span>
    		<span class="icon-bar"></span>
    		<span class="icon-bar"></span>
    		</button>
    		<a class="navbar-brand page-scroll" href="index.html"><img src="img/logo.jp" alt="CDP. Jose Cabrera" style="color:black"></a>
    	</div>
    	<!-- Collect the nav links, forms, and other content for toggling -->
    	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    		<ul class="nav navbar-nav navbar-right">
          <!--- Menu -->
              <li><a href="index.html" class="page-scroll">Home</a></li>
              <li><a href="daw.html" class="page-scroll">DAW</a></li>
              <li><a href="portfolio.html" class="page-scroll">Portfolio</a></li>
              <li><a href="profesores.html" class="page-scroll">Profesores</a></li>
              <li><a href="#contacto.html" class="page-scroll">Contacto</a></li>
          </ul><!--- End Menu -->
    	</div>
    	<!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
    </nav>



  <!--   <div class="navmenu navmenu-default navmenu-fixed-left offcanvas">
        <div class="close" data-toggle="offcanvas" data-target=".navmenu">
            <span class="fa fa-close"></span>
        </div>
        <div class="add-margin"></div>
        <ul class="nav navmenu-nav">
            <li><a href="#home" class="page-scroll">Home</a></li>
            <li><a href="#meet-us" class="page-scroll">Overview</a></li>
            <li><a href="#services" class="page-scroll">DAW</a></li>
            <li><a href="#works" class="page-scroll">Portfolio</a></li>
            <li><a href="#about-us" class="page-scroll">Profesores</a></li>
            <li><a href="#contact" class="page-scroll">Contacto</a></li>
        </ul>

    </div>
-->


    <!-- Contact Section -->
<?php



      $target_dir = "imagenes/";
      $target_file = $target_dir . basename($_FILES["fotografia"]["name"]);
      $uploadOk = 1;
      $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
      // Check if image file is a actual image or fake image
      if(isset($_POST["submit"])) {
          $check = getimagesize($_FILES["fotografia"]["tmp_name"]);
          if($check !== false) {
              echo "File is an image - " . $check["mime"] . ".";
              $uploadOk = 1;
          } else {
              echo "File is not an image.";
              $uploadOk = 0;
          }
      }
      // Check if file already exists
      if (file_exists($target_file)) {
        $fotografiaErr="El archivo ya existe.";
          echo "Lo siento, el archivo ya existe.";
          $uploadOk = 0;
      }
      // Check file size
      if ($_FILES["fotografia"]["size"] > 5000000) {
        $fotografiaErr.="<br> El archivo es demasiado grande.";
          echo "Lo siento, el archivo es demasiado grande.";
          $uploadOk = 0;
      }
      // Allow certain file formats
      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
      && $imageFileType != "gif" ) {
        $fotografiaErr.="<br> Solo JPG, JPEG, PNG & GIF.";
          echo "Lo siento, solo JPG, JPEG, PNG & GIF.";
          $uploadOk = 0;
      }
      // Check if $uploadOk is set to 0 by an error
      if ($uploadOk == 0) {
$fotografiaErr.="<br> Lo sentimos, tu archivo no a sido cargado. ";

            echo "Lo siento, tu archivo no a sido cargado.";

      // if everything is ok, try to upload file
      } else {
          if (move_uploaded_file($_FILES["fotografia"]["tmp_name"], $target_file)) {
              echo "El archivo ". basename( $_FILES["fotografia"]["name"]). " ha sido cargado.";
          } else {
$fotografiaErr.="<br> A ocurrido un error en la carga del archivo.";

                echo "lo siento, a ocurrido un error en la carga del archivo.";


          }
      }
if($nombreErr=="" & $apellido1Err=="" & $apellido2Err=="" & $localidadErr=="" & $promocionErr=="" & $fotografiaErr=="" & $bibliografiaErr==""){
require_once('biblioteca/conexion.php');
$conexion=mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME) or die("Problemas con la conexión");

mysqli_query($conexion,"insert into exalumnos(Nombre,Apellido1,Apellido2,Localidad,Foto,Promocion,BiografiaLaboral) values
                     ('$_REQUEST[nombre]','$_REQUEST[apellido1]','$_REQUEST[apellido2]','$_REQUEST[localidad]', '$target_file','$_REQUEST[promocion]','$_REQUEST[bibliografia]')")
or die("Problemas en el select".mysqli_error($conexion));


mysqli_close($conexion);
?>

    <div id="contact">
        <div class="container">
            <div class="section-title text-center">

                <h2>Registro Exalumno</h2>
                <hr>
            </div>
            <div class="space"></div>

            <div class="row">


                <div class="col-md-12">


                    <form autocomplete="off" role="form" id="registro" name="registro" method="post" action="exalumnoRegistrado.php" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Nombre" disabled  value="<?php  echo $_REQUEST['nombre'];  ?>">
                                <input type="text" class="form-control" placeholder="Apellido 1" disabled  value="<?php  echo $_REQUEST['apellido1'];  ?>">
                                <input type="text" class="form-control" placeholder="Apellido 2" disabled  value="<?php  echo $_REQUEST['apellido2'];  ?>">

                            </div>
                            <div class="col-md-6">
                              <input type="text" class="form-control" placeholder="Localidad." disabled value="<?php  echo $_REQUEST['localidad'];  ?>">
                                <input type="text" class="form-control" placeholder="Promocion" disabled  value="<?php  echo $_REQUEST['promocion'];  ?>">



                                  <input type="text" class="form-control" name="fotografia" id="fotografia" placeholder="fotografia" title="Introduzca fotografia" disabled value="<?php echo $target_file ?>"/>
<br>
                            </div>
                        </div>
                        <textarea class="form-control" rows="4" placeholder="Bibliografia Laboral" disabled ><?php  echo $_REQUEST['bibliografia'];  ?></textarea>
                        <div class="text-right">
                          <a  name="volver" href="index.html" class='btn send-btn'>Volver</a><br>

                        </div>
                    </form>

                    <?php
                  }else{
                  echo  "<div id='testimonials' style='height:650px'>";
                  echo      "<div class='overlay'style='height:650px'>";
                    echo       "<div class='container' style='margin-top:150px'>";
                  echo "<div class='section-title'>";
                      echo "<h3 style=color:red> El Exalumno NO se agrego. </h3>";
                      echo $fotografiaErr;
                      echo "<hr>";
                  echo  "</div>";
                  echo  "<div class='text-right'>";
                    echo  "<a  name='volver' href='registro.html' class='btn send-btn'>Volver</a><br>";
                      echo  "</div>";
  echo  "</div>";
    echo  "</div>";

                  }
                    ?>



                </div>
            </div>
        </div>
    </div>











    <nav id="footer">
        <div class="container">
          <hr>
<a class="navbar-brand page-scroll" href="index.html"><img src="img/logo.jpg" alt="CDP. Jose Cabrera" style="color:black"></a>

          <ul class="social" style="float:right">
              <li><a href="#"><span class="fa fa-facebook"></span></a></li>
              <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
              <li><a href="#"><span class="fa fa-twitter"></span></a></li>
              <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
            </ul>
<br><br><br><br><br><br><br>
             <div class="pull-left">
                <p>2018 © CDP Jose Cabrera. All Rights Reserved. Coded & Designed by <a href="http://www.agvarelapru.esy.es">Angel Varela</a></p>
            </div>
            <div class="pull-right">
                <a href="#home" class="page-scroll">Back to Top <span class="fa fa-angle-up"></span></a>
            </div>
        </div>
    </nav>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.1.11.1.js"></script>






    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/SmoothScroll.js"></script>
    <script type="text/javascript" src="js/jasny-bootstrap.min.js"></script>




    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="js/main.js"></script>

  </body>
</html>
