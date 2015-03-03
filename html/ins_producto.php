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
        <h3>Registro Producto</h3>
        <br>
        <?php
          $prod_codigo="";          
          $descrip=$_POST["descrip"];
          $detalle=$_POST["detalles"];
          $cantidad=$_POST["cantidad"];
          $precio=$_POST["precio"];
          $comis=$_POST["comis"];
          $prod_estado="A";
          $costo=$_POST["costo"];
          $usr_codigo=$_SESSION['codigo'];
          /* 
          $fecha=str_replace("/","-",$fecha); 
          $fecha=date("Y-m-d",  strtotime($fecha));
          */

          include_once("../clases/SegProdCollector.php");

          $prodObj = new SegProdCollector();
          $prodObj->createProducto($prod_codigo,$descrip,$detalle,$cantidad,$precio,$comis,$prod_estado,$costo,$usr_codigo);

          echo "<B> Descrip        : </B>" . htmlspecialchars($descrip) . "<br><br>" ;
          echo "<B> Detalle        : </B>" . htmlspecialchars($detalle) . "<br><br>";
          echo "<B> Cantidad       : </B>" . htmlspecialchars($cantidad) . "<br><br>";
          echo "<B> Precio Producto: </B>" . htmlspecialchars($precio). "<br><br>" ;
          echo "<B> Valor Comision : </B>" . htmlspecialchars($comis). "<br><br>" ;
          echo "<B> Valor Costo    : </B>" . htmlspecialchars($costo). "<br><br>" ;

          echo "<B> Registro Grabado Exitosamente </B> </br></br>";
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