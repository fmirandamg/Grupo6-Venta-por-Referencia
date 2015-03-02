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
        <h3>Actualizaci&oacuten de Imagen</h3>  |
        <br>

          <?php
      $msg = "";
      $uploadedfileload="true";
      $uploadedfile_size=$_FILES['uploadedfile']['size'];
      echo $_FILES['uploadedfile']['name'];
      //echo $_FILES['uploadedfile']['tmp_name'];
      if ($_FILES['uploadedfile']['size']>200000)
      {$msg=$msg."El archivo es mayor que 200KB, debes reduzcirlo antes de subirlo </br>";
      $uploadedfileload="false";}

      if (!($_FILES['uploadedfile']['type'] =="image/jpeg" OR $_FILES['uploadedfile']['type'] =="image/jpg" OR $_FILES['uploadedfile']['type'] =="image/gif" OR $_FILES['uploadedfile']['type'] =="image/png"))
      {$msg=$msg." Tu archivo tiene que ser JPG o GIF. Otros archivos no son permitidos </br>";
      $uploadedfileload="false";}

      $file_name=$_FILES['uploadedfile']['name'];
      $add="../images/profiles/$file_name";
      if($uploadedfileload=="true"){

      if(move_uploaded_file ($_FILES['uploadedfile']['tmp_name'], $add)){
      echo " Ha sido subido satisfactoriamente </br></br>";
      }else{echo "Error al subir el archivo </br></br>";}

      }else{echo $msg;}

      echo  "<div class='contimgper'><img class='imgusr2' src='../images/profiles/".$_FILES['uploadedfile']['name']."'  alt=''/> </div>" ;

      ?>

      <?php
       $codigo=$_SESSION['codigo'];
      include_once("../clases/SegUsrCollector.php");

          $usuarioObj = new SegUsrCollector();
          $usuarioObj->updatefoto($codigo,$file_name);

      ?>  
          
      <div><a href="perfil_usr.php">Regresar</a>  </br> </br> </div>
      
      </div>
    

     <!--Fin divisón central-->
      <!--Footer-->
      <?php  include '../plantillas/footer2.html';  ?>

    </div>
   </div>
  </div>

  </div>

 </body>

</html>
