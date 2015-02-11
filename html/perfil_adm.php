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

      <!--Formulario Central-->
      <div id="formulario">
        <h3>Mi Perfil</h3>
        <br>

         <form method="post" action="reg_adm">
            <label>Nombres</label>
            <br>
            <input type="text" class="nomape" name="nombre" value="" autofocus="autofocus"/>
            <br><br>
            <label>Apellidos</label>
            <br>
            <input type="text" class="nomape" name="apellido" value=""/>
            <br><br>
            <label>Cedula</label>
            <br>
            <input type="text" class="ced" name="cedula" value=""/>
            <br><br>
            <label>Fecha</label>
            <br>
            <input type="text" class="tcal" name="fecha" value="" />
            <br><br>
            <label id="labtel1">Telefono 1</label>
            <label id="labtel2">Telefono 2</label>
            <br>
            <input type="text" class="telf1" name="tel1" value=""/>
            <input type="text" class="telf2" name="tel2" value=""/>
            <br><br>
            <label>Email</label>
            <br>
            <input type="email" class="nomape" name="tel2" value=""/>
            <br><br>
            <label>Usuario</label>
            <br>
            <input type="text" class="usrpwd" name="usr" value=""/>
            <br><br>
            <label>Password</label>
            <br>
            <input type="password" class="usrpwd" name="psw" value=""/>
            <br><br>
            <input type="submit" value="Actualizar" class="boton" />
            <br><br><br>
         </form> 

      </div>

      <!--Lateral derecho-->
      <div class="lateral">
          <!--Carga Usuario-->
          <div class="ingreso">
            <br>
           <img class="imgusr" src="../images/foto_usuario.jpg"  alt=""/> 
   
           <form method="post" action="carga_img">
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