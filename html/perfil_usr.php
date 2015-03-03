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

        <?php
      //obtener el valor de ID que viene del metodo GET a traves de HTTP
      $id=$_SESSION['codigo'];
      include_once("../clases/SegUsrCollector.php");
      include_once("../clases/seg_usuario.php");
      $usr_CollectObj = new SegUsrCollector();
      $Objusuario = $usr_CollectObj->showusuario($id);
      ?>

      <!--Formulario Central-->
      <div id="formulario">
        <h3>Mi Perfil</h3>
        <br>

         <form method="post" action="mod_perfil_usr.php">
            <label>C&oacutedigo</label>
            <br>
            <input type="text" class="cod" name="codigo" value="<?php echo $Objusuario->getIdusuario(); ?>" readonly/>
            <br><br>
            <label>Nombres</label>
            <br>
            <input type="text" class="nomape" name="nombre" value="<?php echo $Objusuario->getNombre(); ?>" autofocus="autofocus" maxlength="30" required/>
            <br><br>
            <label>Apellidos</label>
            <br>
            <input type="text" class="nomape" name="apellido" value="<?php echo $Objusuario->getApellido(); ?>" maxlength="30" required/>
            <br><br>
            <label>Cedula</label>
            <br>
            <input type="text" class="ced" name="cedula" value="<?php echo $Objusuario->getCedula(); ?>" maxlength="10" onkeypress="return numeros(event)" required/>
            <br><br>
            <label>Fecha</label>
            <br>
            <input type="text" class="tcal" name="fecha" value="<?php echo $Objusuario->getFecha(); ?>" maxlength="10"/>
            <br><br>
            <label id="labtel1">Telefono 1</label>
            <label id="labtel2">Telefono 2</label>
            <br>
            <input type="text" class="telf1" name="tel1" value="<?php echo $Objusuario->getTel1(); ?>" maxlength="10" onkeypress="return numeros(event)"/>
            <input type="text" class="telf2" name="tel2" value="<?php echo $Objusuario->getTel2(); ?>" maxlength="10" onkeypress="return numeros(event)"/>
            <br><br>
            <label>Email</label>
            <br>
            <input type="email" class="nomape" name="mail" value="<?php echo $Objusuario->getEmail(); ?>" maxlength="30"/>
            <br><br>
            <label>Usuario</label>
            <br>
            <input type="text" class="usrpwd" name="usr" value="<?php echo $Objusuario->getUsuario(); ?>"  maxlength="10" required/>
            <br><br>
            <label>Password</label>
            <br>
            <input type="password" class="usrpwd" name="psw" value="<?php echo $Objusuario->getPassword(); ?>" maxlength="10" required/>
            <input type="hidden" name="combo_usr" value="<?php echo $Objusuario->getTipo(); ?>"/>
            <br><br>
            <input type="submit" value="Actualizar" class="boton" />
            <br><br><br>
         </form>

      </div>

      <div class="lateral">
          <div class="ingreso">
            
             <div class="contimgper">

               <?php
                if ($Objusuario->getFoto() == "") {
                  echo "<img class='imgusr2' src='../images/foto_usuario.jpg' alt=''/>";
                }else {
                  echo  "<img class='imgusr2' src='../images/".$Objusuario->getFoto()."' alt=''/>" ;
                }
               
              ?>

           </div>

           <form enctype="multipart/form-data" method="post" action="carga_usr_img.php">
              <br>
              <input name="uploadedfile" type="file"  > 
              <br>
              <input type="submit" value="Cargar Imagen" class="boton" />
              <br>             
           </form> 

          </div>
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