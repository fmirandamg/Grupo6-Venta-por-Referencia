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
    <?php  include '../plantillas/menu_administrador.html';  ?>

  <div id="ctr_gen">
  <div class="container">
   <div class="starter-template">   
    <div id="Central">

    <!--Cabecera-->
       <?php  include '../plantillas/logo2.html';  ?>

      <div id="formulario">
        <h3>Registro Producto</h3>
        <br>

          <form method="post" action="ins_producto.php">
             <!--
            <label>Código</label>
            <br>
            <input type="text" class="cod" name="codigo" value="" readonly/>
            <br><br>
            -->
            <label>Descripción</label>
            <br>
            <input type="text" class="nomape" name="descrip" value="" autofocus="autofocus" maxlength="50" required/>
            <br><br>
            <label>Detalle</label>
            <br>
            <textarea rows="4" cols="25" id="dscprod" name="detalles"  required> </textarea>
            <br><br>
            <label>Cantidad</label>
            <br>
            <input type="text" class="fec" name="cantidad" value="0" onkeypress="return numeros(event)" maxlength="10" required/>
            <br><br>
            <label>Precio Producto</label>
            <br>
            <input type="text" class="fec" name="precio" value="0.00" onkeypress="return numeros(event)" maxlength="10" required />
            <br><br>
            <label>Valor Comisión</label>
            <br>
            <input type="text" class="fec" name="comis" value="0.00" onkeypress="return numeros(event)" maxlength="10" required/>
            <br><br>
            <label>Costo Producto</label>
            <br>
            <input type="text" class="fec" name="costo" value="0.00" onkeypress="return numeros(event)" maxlength="10" required/>
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
                     <th class="tbl_cod" >Código</th>
                     <th  >Descripción</th>
                  </tr>
               </thead>
             </table> 

             <div class="d_tabla">
              <table class="tblbusdet" >
               <tbody>
                 <tr>
                   <td class="tbl_cod"><a href="#">1</a></td>
                   <td >RELOJ BLUETOOTH</td>
                 </tr>
                 <tr>
                    <td ><a href="#">2</a></td>
                   <td >SILLAS ERGONÓMICAS</td>
                 </tr>  
                 
               </tbody>
              </table>
             </div>
         </div>
      
      <div class="lateral">
         
          <div class="ingreso">
            <br>
           <img class="imgusr" src="../images/cuadro_blanco.png" alt="" /> 
   
           <form method="post" action="carga_img">
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