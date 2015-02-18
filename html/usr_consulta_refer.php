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
      $texto=$_POST["buscar"];
      $combo=$_POST["combo"];
      $usr_codigo=$_SESSION['codigo'];
      
      include_once("../clases/SegUreCollector.php");

      $usuarioRefer = new SegUreCollector();
      if ($combo == "todos") {
       $obrefer = $usuarioRefer->readReferenciados($usr_codigo);
      } elseif ($combo == "Cedula") {
       $obrefer = $usuarioRefer->ReferXcedula($texto,$usr_codigo);
      } elseif ($combo == "Nombres") {
       $obrefer = $usuarioRefer->ReferXnombres($texto,$usr_codigo);  
      } else {
       $obrefer = $usuarioRefer->ReferXapellidos($texto,$usr_codigo);
      }
      ?>

       <div id="repor_convnd">
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

             <div class="d_tabl_result">
              <table class="tblbusdet" >
               <tbody>
                  <?php
                 foreach ($obrefer as $obrefer2){
                  echo "<tr>";
                  echo "<td class='tbl_cod'>".$obrefer2->getIdUre() ."</td>";
                  echo "<td class='tbl_nombre'>".$obrefer2->getNombre()." ".$obrefer2->getApellido()."</td>";
                  echo "<td>".$obrefer2->getCedula()."</td>";
                  echo "<td><a href='ure_form_editar.php?id=".$obrefer2->getIdUre()."'>&nbsp;&nbsp;&nbsp;&nbsp;Editar</a></td>";
                  echo "<td><a href='ure_elimina.php?id=".$obrefer2->getIdUre()."'>Eliminar</a></td>"; 
                  echo "</tr>"; 
                 }
                ?> 

               </tbody>
              </table>
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