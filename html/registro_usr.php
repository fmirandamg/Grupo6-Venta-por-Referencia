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
      <div id="formulario">
        <h3>Registro Usuario</h3>
        <br>
         <form method="post" action="ins_usuario.php">
            <label>Nombres</label>
            <br>
            <input type="text" class="nomape" name="nombre" value="" autofocus="autofocus" maxlength="30" required/>
            <br><br>
            <label>Apellidos</label>
            <br>
            <input type="text" class="nomape" name="apellido" value="" maxlength="30" required/>
            <br><br>
            <label>Cedula</label>
            <br>
            <input type="text" class="ced" name="cedula" value="" maxlength="10" onkeypress="return numeros(event)" required/>
            <br><br>
            <label>Fecha</label>
            <br>
            <input type="text" class="tcal" name="fecha" value="" maxlength="10"/>
            <br><br>
            <label id="labtel1">Telefono 1</label>
            <label id="labtel2">Telefono 2</label>
            <br>
            <input type="text" class="telf1" name="tel1" value="" maxlength="10" onkeypress="return numeros(event)"/>
            <input type="text" class="telf2" name="tel2" value="" maxlength="10" onkeypress="return numeros(event)"/>
            <br><br>
            <label>Email</label>
            <br>
            <input type="email" class="nomape" name="mail" value="" maxlength="30"/>
            <br><br>
            <label>Usuario</label>
            <br>
            <input type="text" class="usrpwd" name="usr" value="" maxlength="10" required/>
            <br><br>
            <label>Password</label>
            <br>
            <input type="password" class="usrpwd" name="psw" value="" maxlength="10" required/>
            <br><br>
            <input type="submit" value="Grabar" id="btn_ing" />
            <br><br><br>
         </form> 

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