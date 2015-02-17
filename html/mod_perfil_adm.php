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

      <!--Busqueda-->

      <div id="resul_cons">
        <h3>Actualizaci&oacuten de Datos</h3>
        <br>

          <?php
          $codigo=$_POST["codigo"];
          $nombres=$_POST["nombre"];
          $apellidos=$_POST["apellido"];
          $cedula=$_POST["cedula"];
          $fecha=$_POST["fecha"];
          $tipo=$_POST["combo_usr"];
          $usuario=$_POST["usr"];
          $password=$_POST["psw"];
          $estado="A";
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
          $usuarioObj->updateusuario($codigo,$nombres,$apellidos,$cedula,$fecha,$estado,
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
          
           <div><a href="perfil_adm.php">Regresar</a>  </br> </br> </div>


          
      </div>
       <!--
      <div class="lateral">>
          <div class="ingreso">
            <br>
           <img id="imgusr" src="../images/foto_usuario.jpg" alt="" /> 
   
           <form method="post" action="carg_img">
              <br>
              <input type="submit" value="Cargar Imagen" class="boton"/>
              <br>             
           </form>

          </div>
      </div>
     -->

     <!--Fin divisón central-->
      <!--Footer-->
      <?php  include '../plantillas/footer2.html';  ?>

    </div>
   </div>
  </div>

  </div>

 </body>

</html>