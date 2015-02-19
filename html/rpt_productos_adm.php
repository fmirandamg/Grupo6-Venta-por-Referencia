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

      <!--Pantalla Criterio-->
        <!--Criterio Nombre-->
        <div id="Buscador">
         <h3>Consulta de Productos</h3>
         <h4>Criterio de Descripción</h4>
         <form method="post" action="bus_nom">
            <select>
              <option value="tod">Todos</option>
              <option value="Cedula">Código</option>
              <option value="Nombres">Descripción</option>
            </select>
            <input type="text" name="buscar" class="buscar"  />
         </form> 

        </div>
        <!--Rango de Fechas-->
         <div id="rep_fecha">
           <form method="post" action="bus_fech">
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
          <table class="rep_cab" >
               <caption> <strong> Resultado de la Busqueda</strong> </caption>
               <thead >
                  <tr >
                     <th class="tbl_cod_rep2" >Código</th>
                     <th class="tbl_nombre_rep3">Descripción</th>
                     <th class="tbl_ced_rep_cab" >($)Cant.Vend.</th>
                     <th class="tbl_ced_rep_cab">($)Val.Ganado</th>
                     <th >Com.Acumulada</th>
                  </tr>
               </thead>
             </table> 

             <div id="d_tabrep2">
              <table class="tblbusdet" >
               <tbody>
                 <tr>
                   <td class="tbl_cod_rep2">1</td>
                   <td class="tbl_nombre_rep3">RELOJ BLUETOOTH</td>
                   <td class="tbl_cedula_rep">120</td>
                   <td class="tbl_cedula_rep">1,250.00</td>
                   <td >800.00</td>
                 </tr>
                 <tr>
                   <td >2</td>
                   <td >SILLAS ERGONÓMICAS</td>
                   <td >285</td>
                   <td >1,450.00</td>
                   <td >722.00</td>
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