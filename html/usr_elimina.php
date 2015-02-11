<!DOCTYPE HTML>

<html lang = "es">
 <head>
   <?php  include '../plantillas/cabecera2.html';  ?>

 </head>

 <body >
   
   <?php  include '../plantillas/fondo2.html';  ?>  
   

 <!--Menu-->
    <!--<div id="menu">-->
     <?php  include '../plantillas/menu_administrador.html';  ?>

  <div id="ctr_gen">
  <div class="container">
   <div class="starter-template">   
    <div id="Central">

    <!--Cabecera-->
      <?php  include '../plantillas/logo2.html';  ?>

      <!--Busqueda-->

      <div id="resul_cons">
        <h3>Actualizaci&oacuten de Datos</h3>
        <br>

          <?php
            $id=$_GET["id"];
            include_once("../clases/SegUsrCollector.php");
            $UsrCollectObj = new SegUsrCollector();
            $UsrCollectObj->deleteusuario($id);
            echo "Usuario ". htmlspecialchars($id) ."  ha sido eliminado correctamente.";
            ?>
          
           <div><a href="usuarios_adm.php">Regresar</a>  </br> </br> </div>


          
      </div>
     
      <?php  include '../plantillas/footer2.html';  ?>

    </div>
   </div>
  </div>

  </div>

 </body>

</html>