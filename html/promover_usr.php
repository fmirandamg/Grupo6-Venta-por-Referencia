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

      <?php
        include_once("../clases/SegProdCollector.php");
        $productoObj = new SegProdCollector();
        $objprod = $productoObj->readProductos(); 
      ?>

      <!--Busqueda-->
      <div id="repor_convnd">
        <table class="tblbuscar" >
               <caption> <strong> Seleccione Producto a Promover</strong> </caption>
               <thead >
                  <tr >
                     <th class="tbl_cod" >C&oacutedigo</th>
                     <th  >Descripci&oacuten</th>
                  </tr>
               </thead>
             </table> 

             <div class="d_tabl_result">
              <table class="tblbusdet" >
               <tbody>
                 <?php
                 foreach ($objprod as $objprod2){
                  echo "<tr>";
                  echo "<td class='tbl_cod'>".$objprod2->getProd_codigo() ."</td>";
                  echo "<td class='tbl_nombre'>".$objprod2->getDescripcion()."</td>";
                  echo "<td><a href='reg_referencia.php?id=".$objprod2->getProd_codigo()."'>Seleccionar</a></td>";
                  echo "</tr>"; 
                 }
                ?> 
                 
               </tbody>
              </table>
             </div>
            <br><br>
      </div>   
      <br><br><br><br>

      <!--Footer-->
      <?php  include '../plantillas/footer2.html';  ?>

    </div>
   </div>
  </div>

  </div>

 </body>

</html>