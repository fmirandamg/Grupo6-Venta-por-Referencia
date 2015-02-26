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
      include_once("../clases/SegProdCollector.php");
      //include_once("../clases/inv_producto.php");
      $prod_CollectObj = new SegProdCollector();
      $Objproducto = $prod_CollectObj->showProducto($id);
      ?>

      <div id="formulario">
        <h3>Detalle de Producto</h3>
          <form method="post" action="prod_edita.php">
            <label>Código</label>
            <br>
            <input type="text" class="cod" name="codigo" value="<?php echo $Objproducto->getProd_codigo(); ?>" readonly/>
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
           <br><br>

          </div>
      </div>

    <div class="Buscador3">   
      <div><a href="promover_usr.php">Regrese a Seleccionar otro Producto</a>  </br> </br> </div>
       
      <?php
      $usr_codigo=$_SESSION['codigo'];
      
      include_once("../clases/SegUreCollector.php");
      $usuarioRefer = new SegUreCollector();
      $obrefer = $usuarioRefer->readReferenciados_prod($usr_codigo,$id);

      ?>

      <div id="repor_convnd">
        <table class="tblbuscar" >
               <caption> <strong> Seleccione un Referido </strong> </caption>
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
                  echo "<td><a href='reg_referencia_conf.php?id=".$obrefer2->getIdUre()."'>&nbsp;&nbsp;&nbsp;&nbsp;Seleccionar</a></td>";
                  echo "</tr>"; 
                 }
                 $_SESSION['cod_prod'] = $id;
                ?> 

               </tbody>
              </table>
             </div>
            <br><br>       
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