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

      <!-- </div> -->
  <div id="ctr_gen">
  <div class="container">
   <div class="starter-template">   
    <div id="Central">

    <!--Cabecera-->
      <?php  include '../plantillas/logo2.html';  ?>

      <!--Formulario Central-->
      <br>
      <div id="resul_cons">
        <h3>Creaci&oacuten de Usuario</h3>
        <br>
        <?php
          $nombres=$_POST["nombre"];
          $apellidos=$_POST["apellido"];
          $cedula=$_POST["cedula"];
          $fecha=$_POST["fecha"];
          $estado="A";
          $tipo="USR";
          $usuario=$_POST["usr"];
          $password=$_POST["psw"];
          $mail=$_POST["mail"];
          $foto="";
          $tel1=$_POST["tel1"];
          $tel2=$_POST["tel2"];
          /* 
          $fecha=str_replace("/","-",$fecha); 
          $fecha=date("Y-m-d",  strtotime($fecha));
          */

          include_once("../clases/SegUsrCollector.php");

          $usuarioObj = new SegUsrCollector();
          $usuarioObj->createusuario($nombres,$apellidos,$cedula,$fecha,$estado,
                                     $tipo,$usuario,$password,$mail,$foto,
                                     $tel1,$tel2);

          echo "<B> Nombres: </B>" . htmlspecialchars($nombres) . "<br><br>" ;
          echo "<B> Apellidos: </B>" . htmlspecialchars($apellidos) . "<br><br>";
          echo "<B> Cedula: </B>" . htmlspecialchars($cedula) . "<br><br>";
          echo "<B> Fecha: </B>" . htmlspecialchars($fecha). "<br><br>" ;
          echo "<B> Telefono 1: </B>" . htmlspecialchars($tel1). "<br><br>" ;
          echo "<B> Telefono 2: </B>" . htmlspecialchars($tel2). "<br><br>" ;
          echo "<B> Email: </B>" . htmlspecialchars($mail). "<br><br>" ;
          echo "<B> Usuario: </B>" . htmlspecialchars($usuario) . "<br><br>";

          echo "<B> Registro Grabado Exitosamente </B> </br></br>";
          ?>
          
            <div><a href="usuarios_adm.php">Regresar</a>  </br> </br> </div>
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