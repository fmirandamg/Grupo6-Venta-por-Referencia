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

    <?php  include '../plantillas/menu_principal2.html';  ?>

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
        <h3>Ingreso de Usuario</h3>
        <br>
        <?php
          $usuario=$_POST["user"];
          $password=$_POST["passw"];
          
          include_once("../clases/SegUsrCollector.php");

          $usuarioObj = new SegUsrCollector();
          $objusr = $usuarioObj->showUsrEnt($usuario);
          
          if ($objusr->getIdusuario() == "") {
            echo "<B> Usuario no Registrado </B> </br></br>";  
            echo "<a href='../index.php'>Volver al Inicio</a> </br> </br>";
          } else  {
              if ($objusr->getPassword() != $password) {
                echo "<B> Clave Incorrecta </B> </br></br>";  
                echo "<a href='../index.php'>Volver al Inicio</a> </br> </br>";
                }
              else {
                echo "Bienvenido  </br>";
                echo $objusr->getNombre()." ".$objusr->getApellido()."</br></br>";
                
                $_SESSION['usuario'] = $usuario;
                $_SESSION['codigo'] = $objusr->getIdusuario();
                
                if ($objusr->getTipo() == "USR"){
                  echo "<a href='perfil_usr.php'><<...Acceder...>></a> </br> </br>";
                }
                if ($objusr->getTipo() == "ADM"){
                  echo "<a href='perfil_adm.php'>...Acceder</a> </br> </br>";
                  echo "Usuario Administrador". "</br></br></br>";
                }
                if ($objusr->getTipo() == "VND"){
                  echo "<a href='perfil_vnd.php'>...Acceder</a> </br> </br>";
                  echo "Usuario Vendedor". "</br></br></br>";
                }

              }
        }
           /*
          echo "<B> Nombres: </B>" . htmlspecialchars($nombres) . "<br><br>" ;
          
          echo "<B> Registro Grabado Exitosamente </B> </br></br>";
          */
          ?>
          
      </div>
      <br><br>
     
       <?php  include '../plantillas/footer2.html';  ?>

    </div>
   </div>
  </div>

  </div>

 </body>

</html>