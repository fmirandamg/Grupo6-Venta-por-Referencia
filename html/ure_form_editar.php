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
      $id=$_GET["id"];
      include_once("../clases/SegUreCollector.php");
      include_once("../clases/adm_referenciados.php");
      $ure_CollectObj = new SegUreCollector();
      $Objrefer = $ure_CollectObj->showReferenciado($id);
      ?>

      <div id="formulario">
        <h3>Actualizaci&oacuten de Datos</h3>
        <br>

          <form method="post" action="ure_edita.php">
            <label>Código</label>
            <br>
            <input type="text" class="cod" name="codigo" value="<?php echo $Objrefer->getIdUre(); ?>" readonly/>
            <br><br>
            <label>Nombres</label>
            <br>
            <input type="text" class="nomape" name="nombre" value="<?php echo $Objrefer->getNombre(); ?>" autofocus="autofocus" maxlength="30" required/>
            <br><br>
            <label>Apellidos</label>
            <br>
            <input type="text" class="nomape" name="apellido" value="<?php echo $Objrefer->getApellido(); ?>" maxlength="30" required/>
            <br><br>
            <label>Cedula</label>
            <br>
            <input type="text" class="ced" name="cedula" value="<?php echo $Objrefer->getCedula(); ?>" maxlength="10" onkeypress="return numeros(event)" required/>
            <br><br>
            <label>Fecha</label>
            <br>
            <input type="text" class="tcal" name="fecha" value="<?php echo $Objrefer->getFecha(); ?>" maxlength="10"/>
            <br><br>
            <label id="labtel1">Telefono 1</label>
            <label id="labtel2">Telefono 2</label>
            <br>
            <input type="text" class="telf1" name="tel1" value="<?php echo $Objrefer->getTel1(); ?>" maxlength="10" onkeypress="return numeros(event)"/>
            <input type="text" class="telf2" name="tel2" value="<?php echo $Objrefer->getTel2(); ?>" maxlength="10" onkeypress="return numeros(event)"/>
            <br><br>
            <label>Email</label>
            <br>
            <input type="email" class="nomape" name="email" value="<?php echo $Objrefer->getEmail(); ?>" maxlength="30"/>
            <br><br>
            <input type="submit" name="grabar" value="Actualizar" class="boton" />
            <br><br>
         </form>
      </div>

        <!--
         
      <div class="lateral">
        
          <div class="ingreso">
            <br>
           <img class="imgusr" src="../images/foto_usuario.jpg"  alt="" />

           <form method="post" action="img_refer">
              <br>
              <input type="submit" value="Cargar Imagen" class="boton" />
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