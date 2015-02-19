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
         <h3>Consulta de Usuarios</h3>
         <h4>Criterio de Nombres</h4>
         <form method="post" action="bus_nom">
            <select>
              <option value="tod">Todos</option>
              <option value="Cedula">Cedula</option>
              <option value="Nombres">Nombres</option>
              <option value="Apellidos">Apellidos</option>
            </select>
            <input type="text" name="buscar" class="buscar" />
            <br><br>
            <label id="labtel3">Seleccionar Tipo de Usuario:  &nbsp;  &nbsp; </label>
            <select>
              <option value="tod">Todos</option>
              <option value="usr">Usuario</option>
              <option value="adm">Administrador</option>
              <option value="vnd">Vendedor</option>
            </select>
            <br>
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
                     <th class="tbl_cod_rep2">Código</th>
                     <th class="tbl_nombre_rep2">Nombres</th>
                     <th class="tbl_ced_rep_cab" >Cedula</th>
                     <th class="tbl_ced_rep_cab">Tipo</th>
                     <th >Fecha</th>
                  </tr>
               </thead>
             </table> 

             <div id="d_tabrep2">
              <table class="tblbusdet" >
               <tbody>
                 <tr>
                   <td class="tbl_cod_rep2">1</td>
                   <td class="tbl_nombre_rep2">FRANCISCO RAUL MIRANDA GARCIA</td>
                   <td class="tbl_cedula_rep">0918360745</td>
                   <td class="tbl_cedula_rep">Administrador</td>
                   <td >01/01/2015</td>
                 </tr>
                 <tr>
                   <td >2</td>
                   <td >KARINA CECILIA GUADALUPE CARRIEL</td>
                   <td >0918360798</td>
                   <td >Usuario</td>
                   <td >01/01/2015</td>
                 </tr>  
                 <tr>
                   <td >3</td>
                   <td >JOSE MIGUEL CARRASCO SANCHEZ</td>
                   <td >0918360951</td>
                   <td >Venddor</td>
                   <td >05/01/2015</td>
                 </tr>  
                 <tr>
                   <td >4</td>
                   <td >MARIA CRISTINA GALARZA MARIN</td>
                   <td >0918360473</td>
                   <td >Venddor</td>
                   <td >06/01/2015</td>
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