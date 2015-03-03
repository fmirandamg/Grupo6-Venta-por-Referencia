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
     <?php 
      $usuario=$_SESSION['codigo'];
      include_once("../clases/SegRefCollector.php");

      $referObj = new SegRefCollector();
      $objreferencia = $referObj->showReferProd($usuario);
      ?>
      <h3>Consulta de Referidos a Productos</h3>
      <div id="repor_convnd">
        <?php
          foreach ($objreferencia as $objreferencia2){
          include_once("../clases/SegProdCollector.php");
          $prod_CollectObj = new SegProdCollector();
          $Objproducto = $prod_CollectObj->showProducto($objreferencia2->getRef_secuencia());
          echo "<h4>". $objreferencia2->getRef_secuencia()." - ".$Objproducto->getDescripcion()."</h4>"."<br>";  
          echo "<table class='tblbuscar'>";
          echo "
              <thead >
                  <tr >
                     <th class='tbl_cod'>Codigo</th>
                     <th class='tbl_nombre'>Nombres</th>
                     <th >Cedula</th>
                  </tr>
               </thead>
                ";
          echo "</table>";
          
          $objureprod = $referObj->showReferUsrProd($usuario,$objreferencia2->getRef_secuencia());
          echo "<div class='d_tabl_result2'>
                  <table class='tblbusdet' >
                   <tbody>";

          foreach ($objureprod as $objureprod2){
            include_once("../clases/SegUreCollector.php");
            $ure_CollectObj = new SegUreCollector();
            $Objrefer = $ure_CollectObj->showReferenciado($objureprod2->getRef_secuencia());
            
            echo "<tr>";
            echo "<td class='tbl_cod'>".$Objrefer->getIdUre() ."</td>";
            echo "<td class='tbl_nombre'>".$Objrefer->getNombre()." ".$Objrefer->getApellido()."</td>";
            echo "<td>".$Objrefer->getCedula()."</td>";
            echo "</tr>"; 
          }
          echo "</tbody>
              </table>
             </div>";

          }
        ?> 
         <!--Busqueda-
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
           -->

            <br><br>
      </div>   
      <br><br><br><br>
      <!--Fin de Tabla de Resultados-->
      <!--Footer-->
      <?php  include '../plantillas/footer2.html';  ?>

    </div>
   </div>
  </div>

  </div>

 </body>

</html>