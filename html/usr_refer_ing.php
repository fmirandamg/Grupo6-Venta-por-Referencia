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
      <!--Cabecera-->
      <br>
      <div id="resul_cons">
        <h3>Registro Referencia a Producto</h3>
        <br>
        <?php
          $codRefer=$_POST["codRefer"];
          $codProd=$_POST["codProd"];
          $usuario=$_SESSION['codigo'];
          $fecha=date("Y-m-d");;
          $comision="0";
          $des_prod=$_POST["descrip"];
          $nom_refer=$_POST["nombre"]." ".$_POST["apellido"];
          
          include_once("../clases/SegRefCollector.php");

          $referenciaObj = new SegRefCollector();
          $referenciaObj->createReferencia($codRefer,$codProd,$usuario,$fecha,$comision);

          echo "<B> Producto: </B>" . htmlspecialchars($des_prod) . "<br><br>" ;
          echo "<B> Referido A: </B>" . htmlspecialchars($nom_refer) . "<br><br>";
          
          echo "<B> Registro Grabado Exitosamente </B> </br></br>";
          ?>
          
           <div><a href="promover_usr.php">..Regresar...</a>  </br> </br> </div>
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