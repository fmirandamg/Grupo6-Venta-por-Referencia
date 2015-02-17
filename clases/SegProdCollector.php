<?php

include_once('inv_producto.php');
include_once('Collector.php');

class SegProdCollector extends Collector
{
  
  function showProducto($id) {
    $row = self::$db->getRows("SELECT * FROM venta_refer.inv_producto where PROD_CODIGO = ? ", array("{$id}")); 
    $Objproducto = new inv_producto($row[0]{'PROD_CODIGO'},$row[0]{'PROD_DESCRIPCION'},$row[0]{'PROD_DETALLE'},
                                  $row[0]{'PROD_CANTIDAD'},$row[0]{'PROD_VALOR_VTA'},$row[0]{'PROD_VALOR_COMIS'},
                                  $row[0]{'PROD_ESTADO'},$row[0]{'PROD_VAL_COSTO'},$row[0]{'USR_CODIGO'}
                                  );
    return $Objproducto;
  }

  function createProducto($prod_codigo, $prod_descripcion, $prod_detalle, $prod_cantidad, 
                          $prod_valor_vta, $prod_valor_comis, $prod_estado, $prod_val_costo, $usr_codigo )
                           {    
    $insertrow = self::$db->insertRow("INSERT INTO venta_refer.inv_producto (PROD_CODIGO, PROD_DESCRIPCION, PROD_DETALLE, 
                                                                            PROD_CANTIDAD, PROD_VALOR_VTA, PROD_VALOR_COMIS, 
                                                                            PROD_ESTADO, PROD_VAL_COSTO, USR_CODIGO) 
                                          VALUES (?,?,?,?,?,?,?,?,?)", 
                                          array(null, "{$prod_descripcion}", "{$prod_detalle}",
                                                "{$prod_cantidad}", "{$prod_valor_vta}", "{$prod_valor_comis}",
                                                "{$prod_estado}", "{$prod_val_costo}", "{$usr_codigo}"
                                                ));
  }  

  function readProductos() {
    $rows = self::$db->getRows("SELECT * FROM venta_refer.inv_producto ");        
    $arrayproducto= array();        
    foreach ($rows as $c){
      $aux = new inv_producto($c{'PROD_CODIGO'},$c{'PROD_DESCRIPCION'},"","","","","","","");
      array_push($arrayproducto, $aux);
    }
    return $arrayproducto;        
  }

  function prodXcodigo($codigo) {     
    $rows = self::$db->getRows("SELECT * FROM venta_refer.inv_producto where PROD_CODIGO like  ?", array("%{$codigo}%"));        
    $arrayproducto= array();        
    foreach ($rows as $c){
      $aux = new inv_producto($c{'PROD_CODIGO'},$c{'PROD_DESCRIPCION'},"","","","","","","");
      array_push($arrayproducto, $aux);
    }
    return $arrayproducto;        
  }

  function prodXdescrip($descrip) {
    $rows = self::$db->getRows("SELECT * FROM venta_refer.inv_producto where PROD_DESCRIPCION like ?", array("%{$descrip}%"));        
    $arrayproducto= array();        
    foreach ($rows as $c){
      $aux = new inv_producto($c{'PROD_CODIGO'},$c{'PROD_DESCRIPCION'},"","","","","","","");
      array_push($arrayproducto, $aux);
    }
    return $arrayproducto;        
  }
  
  function updateProducto($prod_codigo, $prod_descripcion, $prod_detalle, $prod_cantidad, 
                          $prod_valor_vta, $prod_valor_comis, $prod_estado, $prod_val_costo, $usr_codigo ) {    
    $insertrow = self::$db->updateRow("UPDATE venta_refer.inv_producto  
                                          SET inv_producto.PROD_DESCRIPCION = ?,
                                              inv_producto.PROD_DETALLE = ?,
                                              inv_producto.PROD_CANTIDAD = ?,
                                              inv_producto.PROD_VALOR_VTA = ?,
                                              inv_producto.PROD_VALOR_COMIS = ?,   
                                              inv_producto.PROD_ESTADO = ?,
                                              inv_producto.PROD_VAL_COSTO = ?,
                                              inv_producto.USR_CODIGO = ?
                                        WHERE inv_producto.PROD_CODIGO = ? ", 
                                        array( "{$prod_descripcion}","{$prod_detalle}","{$prod_cantidad}",
                                               "{$prod_valor_vta}","{$prod_valor_comis}","{$prod_estado}",
                                               "{$prod_val_costo}","{$usr_codigo}",
                                             $prod_codigo));
  }  

  function deleteProducto($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM venta_refer.inv_producto WHERE PROD_CODIGO= ?", array("{$id}"));
  }  

}
?>

