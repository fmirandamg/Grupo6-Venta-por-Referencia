<?php
 session_start();  
?>
<!DOCTYPE HTML>

<html lang = "es">
 <head>
    <?php  include '../plantillas/cabecera2.html';  ?>

 </head>

 <body >

    <?php  include '../plantillas/fondo2.html';  ?>  

 <!--Menu-->
    <!--<div id="menu">-->

    <?php  include '../plantillas/menu_usuario.html';  ?>

  <div id="ctr_gen">
  <div class="container">
   <div class="starter-template">
    <div id="Central">

    <!--Cabecera-->
      <?php  include '../plantillas/logo2.html';  ?>

      <br>
      <div id="resul_cons">
        <h3>Eliminaci&oacuten de Datos</h3>
        <br>
        <?php
            $id=$_GET["id"];
            include_once("../clases/SegUreCollector.php");
            $referObj = new SegUreCollector();
            $referObj->deleteRefer($id);
            echo "Referido ". htmlspecialchars($id) ."  ha sido eliminado correctamente.";
            ?>
          
           <div><a href="referenciado_usr.php">..Regresar..</a>  </br> </br> </div>
      </div>
      <br><br>
      
      <!--Footer-->
      <?php  include '../plantillas/footer2.html';  ?>


    </div>
   </div>
  </div>

  </div>
 </body>

</html>