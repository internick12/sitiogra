<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Logistica y transportes GRANADOS</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon1.ico">

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">

</head>
  <body>
    <section class="wellcome_area clearfix">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center">
            <?php 

              $para ='internick10@gmail.com'; //utiliza tu propia dirección email
              $nombre = $_POST['name'];
              $email = $_POST['email'];
              $asunto = "Mensaje de la web granados";
              $mensaje = $_POST['message'];

              //envio de email

              //Construir el mensaje
              $mimensaje = "Nombre: $nombre\n\n";
              $mimensaje .= "Email: $email\n\n";
              $mimensaje .= "Comentario: $mensaje\n\n";
              
              //Limitar tamaño de línea a 70 caracteres
              $mimensaje = wordwrap($mensaje, 70);
              
              //Enviarlo
              $enviarMail = mail ($para, $asunto, $mimensaje);

            ?>
            <br><br><br><br>
            <span class="subheading">Gracias</span>
            <h2 class="mb-4">Mensaje Enviado</h2>
            <p>Gracias por tus comentarios en breve me comunicaré contigo</p>
            <a href="index.html" style="color:#fff;">Volver</a>
          </div>
        </div>
      </div>
    </section>
	
    <!-- Jquery-2.2.4 JS -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap-4 Beta JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins JS -->
    <script src="js/plugins.js"></script>
    <!-- Slick Slider Js-->
    <script src="js/slick.min.js"></script>
    <!-- Footer Reveal JS -->
    <script src="js/footer-reveal.min.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>
    
  </body>
</html>