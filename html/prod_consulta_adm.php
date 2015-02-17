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

       <?php
      $texto=$_POST["buscar"];
      $combo=$_POST["combo"];
      
      include_once("../clases/SegProdCollector.php");

      $productoObj = new SegProdCollector();
      if ($combo == "todos") {
       $objprod = $productoObj->readProductos();
      } elseif ($combo == "cod") {
       $objprod = $productoObj->prodXcodigo($texto);
      } elseif ($combo == "descrip") {
       $objprod = $productoObj->prodXdescrip($texto);  
      } 
      ?>

      <!--Busqueda-->
      <div id="repor_convnd">
        <table class="tblbuscar" >
               <caption> <strong> Resultado de la Busqueda</strong> </caption>
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
                  echo "<td><a href='prod_form_editar.php?id=".$objprod2->getProd_codigo()."'>Editar</a></td>";
                  echo "<td><a href='prod_elimina.php?id=".$objprod2->getProd_codigo()."'>Eliminar</a></td>"; 
                  echo "</tr>"; 
                 }
                ?> 
                 
               </tbody>
              </table>
             </div>
            <br><br>
      <div><a href="productos_adm.php"> ..Regresar.. </a>  </br> </br> </div>
      </div>   
      <br><br><br><br>


        <!--
            
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