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

      <!--Pantalla Criterio-->
        <!--Criterio Nombre-->
        <div id="Buscador">
         <h3>Consulta de Referenciados</h3>
         <h4>Criterio de Nombres</h4>
         <form method="post" action="buscar_nom">
            <select>
              <option value="tod">Todos</option>
              <option value="Cedula">Cedula</option>
              <option value="Nombres">Nombres</option>
              <option value="Apellidos">Apellidos</option>
            </select>
            <input type="text" name="buscar" class="buscar" />
         </form>

        </div>
        <!--Rango de Fechas-->
         <div id="rep_fecha">
           <form method="post" action="Buscar_res">
            <br>
            <label id="labtel1">Fecha Desde</label>
            <label id="labtel2">Fecha Hasta</label>
            <br>
            <input type="text" class="tcal" name="fechaD" value="" />
            <input type="text" class="tcal" name="fechaH" value="" />
            <br>
            <input type="submit" value="Buscar" class="boton">
           </form>
        </div>
        <br><br><br><br><br>
      <!--Fin Campos de Criterio-->
      <!--Tabla de Resultados-->
        <div id="repor_cont">
          <table class="tblbuscar" >
               <caption> <strong> Resultado de la Busqueda</strong> </caption>
               <thead >
                  <tr >
                     <th class="tbl_cod_rep" >Código</th>
                     <th class="tbl_nombre_rep" >Nombres</th>
                     <th class="tbl_cedula_rep" >Cedula</th>
                     <th  >Fechas</th>
                  </tr>
               </thead>
             </table>

             <div id="d_tabrep">
              <table class="tblbusdet" >
               <tbody>
                 <tr>
                   <td class="tbl_cod_rep">1</td>
                   <td class="tbl_nombre_rep">FRANCISCO RAUL MIRANDA GARCIA</td>
                   <td class="tbl_cedula_rep">0918360798</td>
                   <td >01/01/2015</td>
                 </tr>
                 <tr>
                   <td >2</td>
                   <td >KARINA CECILIA GUADALUPE CARRIEL</td>
                   <td >0918360798</td>
                   <td >01/01/2015</td>
                 </tr>
                 <tr>
                   <td >2</td>
                   <td >KARINA CECILIA GUADALUPE CARRIEL</td>
                   <td >0918360798</td>
                   <td >01/01/2015</td>
                 </tr>             
               </tbody>
              </table>
             </div>
         </div>
      <!--Fin de Tabla de Resultados-->
      <!--Footer-->
      <?php  include '../plantillas/footer2.html';  ?>

    </div>
   </div>
  </div>

  </div>

 </body>

</html>