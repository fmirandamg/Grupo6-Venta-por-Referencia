<?php

include_once('adm_referenciados.php');
include_once('Collector.php');

class SegUreCollector extends Collector
{
  
  function showReferenciado($id) {
    $row = self::$db->getRows("SELECT * FROM venta_refer.adm_referenciados where URE_CODIGO = ? ", array("{$id}")); 
    $Objreferenciado = new adm_referenciados($row[0]{'URE_CODIGO'},$row[0]{'URE_NOMBRES'},$row[0]{'URE_APELLIDOS'},
                                  $row[0]{'URE_CEDULA'},$row[0]{'URE_EMAIL'},$row[0]{'URE_TELF1'},
                                  $row[0]{'URE_TELF2'},$row[0]{'URE_ESTADO'},$row[0]{'URE_FECHA_REG'}
                                  );
    return $Objreferenciado;
  }

  function createReferenciado($nombres,$apellidos,$cedula,$mail,$tel1,$tel2,
                              $estado,$fecha
                              ) {    
    $insertrow = self::$db->insertRow("INSERT INTO venta_refer.adm_referenciados (URE_CODIGO, URE_NOMBRES, URE_APELLIDOS, URE_CEDULA,
                                                                            URE_EMAIL, URE_TELF1, URE_TELF2, URE_ESTADO, 
                                                                            URE_FECHA_REG) 
                                          VALUES (?,?,?,?,?,?,?,?,?)", 
                                          array(null, "{$nombres}", "{$apellidos}", "{$cedula}","{$mail}", 
                                                "{$tel1}", "{$tel2}", "{$estado}","{$fecha}"
                                                ));
  }  

  function readReferenciados() {
    $rows = self::$db->getRows("SELECT * FROM venta_refer.adm_referenciados ");        
    $arrayRefere= array();        
    foreach ($rows as $c){
      $aux = new adm_referenciados($c{'URE_CODIGO'},$c{'URE_NOMBRES'},$c{'URE_APELLIDOS'},$c{'URE_CEDULA'},
                                    "","","","","");
      array_push($arrayRefere, $aux);
    }
    return $arrayRefere;        
  }

  function ReferXcedula($cedula) {     
    $rows = self::$db->getRows("SELECT * FROM venta_refer.adm_referenciados where URE_CEDULA like  ?", array("%{$cedula}%"));        
    $arrayRefere= array();        
    foreach ($rows as $c){
      $aux = new adm_referenciados($c{'URE_CODIGO'},$c{'URE_NOMBRES'},$c{'URE_APELLIDOS'},$c{'URE_CEDULA'},
                                    "","","","","");
      array_push($arrayRefere, $aux);
    }
    return $arrayRefere;        
  }

  function ReferXnombres($nombres) {
    $rows = self::$db->getRows("SELECT * FROM venta_refer.adm_referenciados where URE_NOMBRES like ?", array("%{$nombres}%"));        
    $arrayRefere= array();        
    foreach ($rows as $c){
     $aux = new adm_referenciados($c{'URE_CODIGO'},$c{'URE_NOMBRES'},$c{'URE_APELLIDOS'},$c{'URE_CEDULA'},
                                    "","","","","");
      array_push($arrayRefere, $aux);
    }
    return $arrayRefere;        
  }
  
  function ReferXapellidos($apellidos) {
    $rows = self::$db->getRows("SELECT * FROM venta_refer.adm_referenciados where URE_APELLIDOS like ?", array("%{$apellidos}%"));        
    $arrayRefere= array();        
    foreach ($rows as $c){
       $aux = new adm_referenciados($c{'URE_CODIGO'},$c{'URE_NOMBRES'},$c{'URE_APELLIDOS'},$c{'URE_CEDULA'},
                                    "","","","","");
      array_push($arrayRefere, $aux);
    }
    return $arrayRefere;        
  }

  function updateRefer($id,$nombres,$apellidos,$cedula,$mail,$tel1,$tel2,
                              $estado,$fecha
                              ) {    
    $insertrow = self::$db->updateRow("UPDATE venta_refer.adm_referenciados  
                                          SET adm_referenciados.URE_NOMBRES = ?,
                                              adm_referenciados.URE_APELLIDOS = ?,
                                              adm_referenciados.URE_CEDULA = ?,
                                              adm_referenciados.URE_EMAIL = ?,
                                              adm_referenciados.URE_TELF1 = ?,   
                                              adm_referenciados.URE_TELF2 = ?,
                                              adm_referenciados.URE_ESTADO = ?,
                                              adm_referenciados.URE_FECHA_REG = ?
                                        WHERE adm_referenciados.URE_CODIGO = ? ", 
                                        array( "{$nombres}","{$apellidos}","{$cedula}",
                                               "{$mail}","{$tel1}","{$tel2}",
                                               "{$estado}","{$fecha}",
                                             $id));
  }  

  function deleteRefer($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM venta_refer.adm_referenciados WHERE URE_CODIGO= ?", array("{$id}"));
  }  

}
?>

