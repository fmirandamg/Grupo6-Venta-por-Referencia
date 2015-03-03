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

      <!--Busqueda-->
      <div id="Buscador">
        <h3>Consulte Lista de Productos</h3>
        <h4>Buscar</h4>
         <form method="post" action="prod_consulta_adm.php">
            <select name="combo">
              <option value="todos">Todos</option>
              <option value="cod">Codigo</option>
              <option value="descrip">Descripci&oacuten</option>
            </select>
            <input type="text" name="buscar" class="buscar" />
            <input type="submit" value="Buscar" class="boton">
            <br>
         </form> 
         
       <div id="formulario">
        <form method="post" action="prod_ingreso.php">
            <input type="submit" value="Nuevo Producto" class="boton">
         </form> 
         <br><br>
         <br><br>
      </div>   

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

      <div id="formulario">
        <h3>Registro / Actualización</h3>
        <br>

          <form method="post" action="Reg_prod">
            <label>Código</label>
            <br>
            <input type="text" class="cod" name="codigo" value="" readonly/>
            <br><br>
            <label>Descripción</label>
            <br>
            <input type="text" class="nomape" name="descrip" value="" autofocus="autofocus"/>
            <br><br>
            <label>Detalle</label>
            <br>
            <textarea rows="4" cols="25" id="dscprod" name="detalles" > </textarea>
            <br><br>
            <label>Precio Producto</label>
            <br>
            <input type="text" class="fec" name="precio" value=""/>
            <br><br>
            <label>Valor Comisión</label>
            <br>
            <input type="text" class="fec" name="comis" value=""/>
            <br><br>
            <input type="submit" name="nuevo" value="Nuevo" class="boton" />
            <input type="submit" name="grabar" value="Grabar" class="boton" />
            <br><br>
         </form> 
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