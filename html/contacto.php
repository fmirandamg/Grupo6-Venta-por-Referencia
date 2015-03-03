<?php
 header('Content-Type: text/html; charset=UTF-8');
 session_start();  
?>
<!DOCTYPE HTML>

<html lang = "es">
 <head>
  <?php  include '../plantillas/cabecera2.html';  ?>
 </head>
 <body >   
   <?php  include '../plantillas/fondo2.html';  ?> 
   <?php  include '../plantillas/menu_principal2.html';  ?>

  <div id="ctr_gen">
  <div class="container">
   <div class="starter-template">   
    <div id="Central">

    <!--Cabecera-->
      <?php  include '../plantillas/logo2.html';  ?>

      <!--Formulario Central-->
      <div id="formulario">
        <h3>Correo Electrónico</h3>
        <br>
         <form enctype="multipart/form-data" method="post" action="recibir_correo.php">
            <label>E-mail</label>
            <br>
            <input type="text" class="nomape" name="mail" value="" autofocus="autofocus" maxlength="30" required/>
            <br><br>
            <label>Asunto</label>
            <br>
            <input type="text" class="nomape" name="asunto" value="" maxlength="30" required/>
            <br><br>
	    <label>Mensaje</label>
            <br>
            <textarea rows=5 cols=30 id="msg" name="mensaje" value="Escriba su mensaje aquí"></textarea>
            <br><br>
            <input type="submit" value="Envíar" id="btn_env" />
            <br><br><br>
	    <label>Teléfonos: 0999435375 - 0990232063</label>
	    <label>Lic. Héctor Chimbo Pinargote</label><br>
	    <label>GERENTE DE PROYECTOS</label>
            <br>
         </form> 
      </div id="maps">
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3986.926585146365!2d-79.81627499999999!3d-2.1815569999999993!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x902d6be4fd1fe0ef%3A0x8976ccd0315df87d!2sVENTITAS+S.A.!5e0!3m2!1ses!2sec!4v1425387617550" width="340" height="420" frameborder="1" style="border:2"></iframe>
      <div>
	
      </div>
      
      <!-- 
      <div class="lateral">
          <div class="ingreso">
            <br>
           <img class="imgusr" src="../images/foto_usuario.jpg" alt="" /> 
   
           <form method="post" action="carg_img">
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
