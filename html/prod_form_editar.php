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
      //obtener el valor de ID que viene del metodo GET a traves de HTTP
      $id=$_GET["id"];
      include_once("../clases/SegProdCollector.php");
      include_once("../clases/inv_producto.php");
      $prod_CollectObj = new SegProdCollector();
      $Objproducto = $prod_CollectObj->showProducto($id);
      ?>

      <div id="formulario">
        <h3>Actualizaci&oacuten de Productos</h3>
        <br>

          <form method="post" action="prod_edita.php">
            <label>Código</label>
            <br>
            <input type="text" class="cod" name="codigo" value="<?php echo $Objproducto->getProd_codigo(); ?>" readonly/>
            <br><br>
            <label>Descripción</label>
            <br>
            <input type="text" class="nomape" name="descrip" value="<?php echo $Objproducto->getDescripcion(); ?>" autofocus="autofocus" maxlength="50" required/>
            <br><br>
            <label>Detalle</label>
            <br>
            <textarea rows="4" cols="25" id="dscprod" name="detalles"  required> <?php echo $Objproducto->getDetalle(); ?></textarea>
            <br><br>
            <label>Cantidad</label>
            <br>
            <input type="text" class="fec" name="cantidad" value="<?php echo $Objproducto->getCantidad(); ?>" onkeypress="return numeros(event)" maxlength="10" required/>
            <br><br>
            <label>Precio Producto</label>
            <br>
            <input type="text" class="fec" name="precio" value="<?php echo $Objproducto->getValor_vta(); ?>" onkeypress="return numeros(event)" maxlength="10" required />
            <br><br>
            <label>Valor Comisión</label>
            <br>
            <input type="text" class="fec" name="comis" value="<?php echo $Objproducto->getValor_comis(); ?>" onkeypress="return numeros(event)" maxlength="10" required/>
            <br><br>
            <label>Costo Producto</label>
            <br>
            <input type="text" class="fec" name="costo" value="<?php echo $Objproducto->getVal_costo(); ?>" onkeypress="return numeros(event)" maxlength="10" required/>
            <br><br>
            <input type="submit" name="grabar" value="Actualizar" class="boton" />
            <br><br>
         </form> 
      </div>
     
      <div class="lateral">
          <div class="ingreso">
            
             <div class="contimgper">

               <?php
                if ($Objproducto->getFoto() == "") {
                  echo "<img class='imgusr2' src='../images/foto_usuario.jpg'  alt=''/>";
                }else {
                  echo  "<img class='imgusr2' src='../images/".$Objproducto->getFoto()."'  alt=''/>" ;
                }
               
              ?>

           </div>

           <form enctype="multipart/form-data" method="post" action="carga_prod_img.php">
              <input type="hidden" class="cod" name="codigo2" value="<?php echo $Objproducto->getProd_codigo(); ?>" readonly/>
              <br>
              <input name="uploadedfile" type="file"  > 
              <br>
              <input type="submit" value="Cargar Imagen" class="boton" />
              <br>             
           </form> 

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