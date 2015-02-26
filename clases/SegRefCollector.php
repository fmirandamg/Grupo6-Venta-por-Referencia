<?php

include_once('adm_referencia.php');
include_once('Collector.php');

class SegRefCollector extends Collector
{
  
  function showReferencias() {
    $row = self::$db->getRows("SELECT * FROM venta_refer.adm_referencia " ); 
    $Objreferencia = new adm_referencia($row[0]{'REF_SECUENCIA'},$row[0]{'URE_CODIGO'},$row[0]{'PROD_CODIGO'},
                                  $row[0]{'USR_CODIGO'},$row[0]{'REF_FECHA'},$row[0]{'REF_VALCOMISION'}
                                  );
    return $Objreferencia;
  }                                      
  function showReferProd($id) {
    $rows = self::$db->getRows("SELECT distinct(PROD_CODIGO) as REF_SECUENCIA FROM venta_refer.adm_referencia 
                                where USR_CODIGO = ?", array("{$id}")); 

    $arrayRefere= array();        
    foreach ($rows as $c){
      $aux = new adm_referencia($c{'REF_SECUENCIA'},"","","","","");
      array_push($arrayRefere, $aux);
    }
    return $arrayRefere;  
  }

  function showReferUsrProd($id,$prod) {
    $rows = self::$db->getRows("SELECT URE_CODIGO as REF_SECUENCIA FROM venta_refer.adm_referencia 
                                where USR_CODIGO = ? and PROD_CODIGO = ?", array("{$id}","{$prod}")); 

    $arrayRefere= array();        
    foreach ($rows as $c){
      $aux = new adm_referencia($c{'REF_SECUENCIA'},"","","","","");
      array_push($arrayRefere, $aux);
    }
    return $arrayRefere;  
  }

  function createReferencia($ure_codigo,$prod_codigo,$usr_codigo,$fecha,$comision
                              ) {    
    $insertrow = self::$db->insertRow("INSERT INTO venta_refer.adm_referencia (REF_SECUENCIA,URE_CODIGO, PROD_CODIGO, USR_CODIGO, REF_FECHA,
                                                                            REF_VALCOMISION) 
                                          VALUES (?,?,?,?,?,?)", 
                                          array(null, "{$ure_codigo}", "{$prod_codigo}", "{$usr_codigo}","{$fecha}", 
                                                "{$comision}"));
  }  

}
?>

