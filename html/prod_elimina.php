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
    <?php  include '../plantillas/menu_administrador.html';  ?>

  <div id="ctr_gen">
  <div class="container">
   <div class="starter-template">   
    <div id="Central">

    <!--Cabecera-->
       <?php  include '../plantillas/logo2.html';  ?>

      <div id="resul_cons">
        <h3>Eliminaci&oacuten de Productos</h3>
        <br>
        <?php
          $prod_codigo=$_GET["id"];          
          include_once("../clases/SegProdCollector.php");

          $prodObj = new SegProdCollector();
          $prodObj->deleteProducto($prod_codigo);

          echo "<B> Registro Eliminado Exitosamente </B> </br></br>";
          ?>
          
           <div><a href="productos_adm.php"> ..Regresar.. </a>  </br> </br> </div>
      </div>
      <br><br>

          
     <!--Fin divisón central-->
      <!--Footer-->
      <?php  include '../plantillas/footer2.html';  ?>

    </div>
   </div>
  </div>

  </div>

 </body>

</html>