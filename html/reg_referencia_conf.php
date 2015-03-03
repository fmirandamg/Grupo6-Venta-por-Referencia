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
      <!--Cabecera-->
      <?php
      //obtener el valor de ID que viene del metodo GET a traves de HTTP
      $id=$_GET["id"];
      $cod_producto=$_SESSION['cod_prod'];
      include_once("../clases/SegProdCollector.php");      
      $prod_CollectObj = new SegProdCollector();
      $Objproducto = $prod_CollectObj->showProducto($cod_producto);

      include_once("../clases/SegUreCollector.php");
      $ure_CollectObj = new SegUreCollector();
      $Objrefer = $ure_CollectObj->showReferenciado($id);
      ?>

      <div id="formulario">
        <h3>Detalle de Producto</h3>
          <form method="post" action="usr_refer_ing.php">
            <label>Código</label>
            <br>
            <input type="text" class="cod" name="codProd" value="<?php echo $Objproducto->getProd_codigo(); ?>" readonly/>
            <br><br>
            <label>Descripción</label>
            <br>
            <input type="text" class="nomape" name="descrip" value="<?php echo $Objproducto->getDescripcion(); ?>" autofocus="autofocus" maxlength="50" readonly/>
            <br><br>
            <label>Detalle</label>
            <br>
            <textarea rows="4" cols="25" id="dscprod" name="detalles"  readonly> <?php echo $Objproducto->getDetalle(); ?></textarea>
            <br><br>
            <label>Precio Producto</label>
            <br>
            <input type="text" class="fec" name="precio" value="<?php echo $Objproducto->getValor_vta(); ?>" onkeypress="return numeros(event)" maxlength="10" readonly />
            <br><br>
            <label>Valor Comisión</label>
            <br>
            <input type="text" class="fec" name="comis" value="<?php echo $Objproducto->getValor_comis(); ?>" onkeypress="return numeros(event)" maxlength="10" readonly/>
            <br><br>
            <label> <h4> Datos del Referenciado </h4></label>
            <br><br>
            <label>Código</label>
            <br>
            <input type="text" class="cod" name="codRefer" value="<?php echo $Objrefer->getIdUre(); ?>" readonly/>
            <br><br>
            <label>Nombres</label>
            <br>
            <input type="text" class="nomape" name="nombre" value="<?php echo $Objrefer->getNombre(); ?>" autofocus="autofocus" maxlength="30" readonly/>
            <br><br>
            <label>Apellidos</label>
            <br>
            <input type="text" class="nomape" name="apellido" value="<?php echo $Objrefer->getApellido(); ?>" maxlength="30" readonly/>
            <br><br>
            <label>Cedula</label>
            <br>
            <input type="text" class="ced" name="cedula" value="<?php echo $Objrefer->getCedula(); ?>" maxlength="10" onkeypress="return numeros(event)" readonly/>
            <br><br>
            <input type="submit" name="grabar" value="Registrar Referencia" class="boton" />
            <br><br>
         </form> 
      </div>
      <!--Footer-->
      <?php  include '../plantillas/footer2.html';  ?>


    </div>
   </div>
  </div>

  </div>
 </body>

</html>