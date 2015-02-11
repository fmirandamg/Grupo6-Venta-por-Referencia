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
      <?php
      //obtener el valor de ID que viene del metodo GET a traves de HTTP
      $id=$_GET["id"];
      include_once("../clases/SegUsrCollector.php");
      include_once("../clases/seg_usuario.php");
      $usr_CollectObj = new SegUsrCollector();
      $Objusuario = $usr_CollectObj->showusuario($id);
      ?>

      <div id="formulario">
        <h3>Actualizaci&oacuten de Datos</h3>
        <br>

          <form method="post" action="usr_edita.php">
            <label>Código</label>
            <br>
            <input type="text" class="cod" name="codigo" value="<?php echo $Objusuario->getIdusuario(); ?>" readonly/>
            <br><br>
            <label>Nombres</label>
            <br>
            <input type="text" class="nomape" name="nombre" value="<?php echo $Objusuario->getNombre(); ?>" autofocus="autofocus"/>
            <br><br>
            <label>Apellidos</label>
            <br>
            <input type="text" class="nomape" name="apellido" value="<?php echo $Objusuario->getApellido(); ?>"/>
            <br><br>
            <label>Cedula</label>
            <br>
            <input type="text" class="ced" name="cedula" value="<?php echo $Objusuario->getCedula(); ?>"/>
            <br><br>
            <label>Fecha</label>
            <br>
            <input type="text" class="tcal" name="fecha" value="<?php echo $Objusuario->getFecha(); ?>" />
            <br><br>
            <label id="labtel1">Telefono 1</label>
            <label id="labtel2">Telefono 2</label>
            <br>
            <input type="text" class="telf1" name="tel1" value="<?php echo $Objusuario->getTel1(); ?>"/>
            <input type="text" class="telf2" name="tel2" value="<?php echo $Objusuario->getTel2(); ?>"/>
            <br><br>
            <label>Email</label>
            <br>
            <input type="email" class="nomape" name="mail" value="<?php echo $Objusuario->getEmail(); ?>"/>
            <br><br>
            <label>Tipos de Usuario</label>
            <br>
            <select name="combo_usr">
              <option value="USR">Usuario</option>
              <option value="ADM">Administrador</option>
              <option value="VND">Vendedor</option>
            </select>
            <br><br>
            <label>Usuario</label>
            <br>
            <input type="text" class="usrpwd" name="usr" value="<?php echo $Objusuario->getUsuario(); ?>"/>
            <br><br>
            <label>Password</label>
            <br>
            <input type="password" class="usrpwd" name="psw" value="<?php echo $Objusuario->getPassword(); ?>"/>
            <br><br>
            <input type="submit" name="grabar" value="Actualizar" class="boton" />
            <br><br>
         </form> 
         <p>Nota: Los usuarios deberán modificar su password al ingresar por primera vez al sitio</p>
         <br>
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