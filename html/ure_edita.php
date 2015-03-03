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
        <h3>Registro Referido</h3>
        <br>
        <?php
          $codigo = $_POST["codigo"];
          $nombres=$_POST["nombre"];
          $apellidos=$_POST["apellido"];
          $cedula=$_POST["cedula"];
          $fecha=$_POST["fecha"];
          $estado="A";
          $tel1=$_POST["tel1"];
          $tel2=$_POST["tel2"];
          $mail=$_POST["email"];
     
          include_once("../clases/SegUreCollector.php");

          $referObj = new SegUreCollector();
          $referObj->updateRefer($codigo,$nombres,$apellidos,$cedula,$mail,$tel1,$tel2,$estado,$fecha
                                        );

          echo "<B> Nombres: </B>" . htmlspecialchars($nombres) . "<br><br>" ;
          echo "<B> Apellidos: </B>" . htmlspecialchars($apellidos) . "<br><br>";
          echo "<B> Cedula: </B>" . htmlspecialchars($cedula) . "<br><br>";
          echo "<B> Email: </B>" . htmlspecialchars($mail). "<br><br>" ;
          echo "<B> Telefono 1: </B>" . htmlspecialchars($tel1). "<br><br>" ;
          echo "<B> Telefono 2: </B>" . htmlspecialchars($tel2). "<br><br>" ;
          echo "<B> Fecha: </B>" . htmlspecialchars($fecha). "<br><br>" ;
          
          echo "<B> Registro Actualizado Exitosamente </B> </br></br>";
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