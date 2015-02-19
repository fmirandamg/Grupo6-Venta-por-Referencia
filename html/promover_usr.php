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

      <!--Productos-->
      <div class="Buscador2">
        <h3>Lista de Productos</h3>
        <h4>Buscar</h4>
         <form method="post" action="bus_prod">
            <select>
              <option value="Codigo">Código</option>
              <option value="Nombres">Descripción</option>
            </select>
            <input type="text" name="buscar" class="buscar" />
            <input type="submit" value="Buscar" class="boton">
         </form>


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

         <!--Imnagen de Referidos-->
      <div class="lateral">
          <div class="ingreso">
            <br>
           <img class="imgusr" src="../images/prod1.jpg"  alt="" />

           <form method="post" action="dato_prod">
              <br>
              <textarea rows="2" cols="20" class="det_nombres" name="nombres" readonly> RELOJ BLUETOOTH </textarea>
              <br> <br>
           </form>

          </div>
      </div>
      <!--Referidos-->
      <div class="Buscador2">
        <h3>Lista de Referidos</h3>
        <h4>Buscar</h4>
         <form method="post" action="cons_refer">
            <select>
              <option value="Cedula">Cedula</option>
              <option value="Nombres">Nombres</option>
              <option value="Apellidos">Apellidos</option>
            </select>
            <input type="text" name="buscar" class="buscar" />
            <input type="submit" value="Buscar" class="boton">
         </form>


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
          <form method="post" action="prom_art">
            <input type="submit" name="promover" value="Promover" class="boton">
         </form>
         </div>

         <!--Imnagen de Referidos-->
      <div class="lateral">
          <div class="ingreso">
            <br>
           <img class="imgusr" src="../images/foto_usuario.jpg"  alt="" />

           <form method="post" action="Cons_Referido">
              <br>
              <textarea rows="2" cols="20" class="det_nombres" name="nombres" readonly> JOSE MIGUEL CARRASCO SANCHEZ </textarea>
              <br> <br>
           </form>

          </div>
      </div>
      <!--Footer-->
      <?php  include '../plantillas/footer2.html';  ?>

    </div>
   </div>
  </div>

  </div>

 </body>

</html>