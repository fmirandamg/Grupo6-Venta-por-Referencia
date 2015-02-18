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

      <div id="formulario">
        <h3>Registro de Referidos</h3>
        <br>

          <form method="post" action="ins_referido.php">
            <!--
            <label>Código</label>
            <br>
            <input type="text" class="cod" name="codigo" value="" readonly/>
            <br><br>
             -->
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
            <input type="email" class="nomape" name="email" value="" maxlength="30"/>
            <br><br>
            <input type="submit" name="grabar" value="Grabar" class="boton" />
            <br><br>
         </form>
      </div>

        <!--
            <table class="tblbuscar" >
               <caption> <strong> Resultado de la Busqueda</strong> </caption>
               <thead >
                  <tr >
                     <th class="tbl_cod">Código</th>
                     <th class="tbl_nombre">Nombres</th>
                     <th >Cedula</th>
                  </tr>
               </thead>
             </table>

             <div class="d_tabla">
              <table class="tblbusdet" >
               <tbody>
                 <tr>
                   <td class="tbl_cod"><a href="#">1</a></td>
                   <td class="tbl_nombre">JOSE MIGUEL CARRASCO SANCHEZ</td>
                   <td >0918360951</td>
                 </tr>
                 <tr>
                   <td ><a href="#">2</a></td>
                   <td >MARIA CRISTINA GALARZA MARIN</td>
                   <td >0918360473</td>
                 </tr>

               </tbody>
              </table>
             </div>
         </div>

      
    
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