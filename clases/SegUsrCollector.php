<?php

include_once('seg_usuario.php');
include_once('Collector.php');

class SegUsrCollector extends Collector
{
  
  function showusuario($id) {
    $row = self::$db->getRows("SELECT * FROM venta_refer.seg_usuario where USR_CODIGO = ? ", array("{$id}")); 
    $Objusuario = new seg_usuario($row[0]{'USR_CODIGO'},$row[0]{'USR_NOMBRES'},$row[0]{'USR_APELLIDOS'},
                                  $row[0]{'USR_CEDULA'},$row[0]{'USR_FECHA'},$row[0]{'USR_ESTADO'},$row[0]{'USR_ULT_ACCESO'},
                                  $row[0]{'TIP_CODIGO'},$row[0]{'USR_USUARIO'},$row[0]{'USR_PASSWORD'},
                                  $row[0]{'USR_EMAIL'},$row[0]{'USR_FOTO'},$row[0]{'USR_TEL1'},
                                  $row[0]{'USR_TEL2'}
                                  );
    return $Objusuario;
  }

   function showUsrEnt($usr) {
    $row = self::$db->getRows("SELECT * FROM venta_refer.seg_usuario where USR_USUARIO = ? ", array("{$usr}")); 
     
    if (empty($row)) {
      $Objusuario = new seg_usuario("","","",
                                    "","","","",
                                    "","","",
                                    "","","",
                                    ""
                                  );

    } else {

    $Objusuario = new seg_usuario($row[0]{'USR_CODIGO'},$row[0]{'USR_NOMBRES'},$row[0]{'USR_APELLIDOS'},
                                  $row[0]{'USR_CEDULA'},$row[0]{'USR_FECHA'},$row[0]{'USR_ESTADO'},$row[0]{'USR_ULT_ACCESO'},
                                  $row[0]{'TIP_CODIGO'},$row[0]{'USR_USUARIO'},$row[0]{'USR_PASSWORD'},
                                  $row[0]{'USR_EMAIL'},$row[0]{'USR_FOTO'},$row[0]{'USR_TEL1'},
                                  $row[0]{'USR_TEL2'}
                                  );
    }
    return $Objusuario;
  }

  function createusuario($nombres,$apellidos,$cedula,$fecha,$estado,
                         $tipo,$usuario,$password,$mail,$foto,
                         $tel1,$tel2) {    
    $insertrow = self::$db->insertRow("INSERT INTO venta_refer.seg_usuario (USR_CODIGO, USR_NOMBRES, USR_APELLIDOS, USR_CEDULA,
                                                                            USR_FECHA, USR_ESTADO, TIP_CODIGO, USR_USUARIO, 
                                                                            USR_PASSWORD, USR_EMAIL, USR_FOTO, USR_TEL1, USR_TEL2) 
                                          VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)", 
                                          array(null, "{$nombres}", "{$apellidos}", "{$cedula}",
                                                "{$fecha}", "{$estado}", "{$tipo}",
                                                "{$usuario}", "{$password}", "{$mail}",
                                                "{$foto}", "{$tel1}", "{$tel2}"
                                                ));
  }  

  function readusuarios() {
    $rows = self::$db->getRows("SELECT * FROM venta_refer.seg_usuario ");        
    $arrayusuario= array();        
    foreach ($rows as $c){
      $aux = new seg_usuario($c{'USR_CODIGO'},$c{'USR_NOMBRES'},$c{'USR_APELLIDOS'},$c{'USR_CEDULA'},
                             "","","","","","","","","","");
      array_push($arrayusuario, $aux);
    }
    return $arrayusuario;        
  }

  function usuariosXcedula($cedula) {     
    $rows = self::$db->getRows("SELECT * FROM venta_refer.seg_usuario where USR_CEDULA like  ?", array("%{$cedula}%"));        
    $arrayusuario= array();        
    foreach ($rows as $c){
      $aux = new seg_usuario($c{'USR_CODIGO'},$c{'USR_NOMBRES'},$c{'USR_APELLIDOS'},$c{'USR_CEDULA'},
                             "","","","","","","","","","");
      array_push($arrayusuario, $aux);
    }
    return $arrayusuario;        
  }

  function usuariosXnombres($nombres) {
    $rows = self::$db->getRows("SELECT * FROM venta_refer.seg_usuario where USR_NOMBRES like ?", array("%{$nombres}%"));        
    $arrayusuario= array();        
    foreach ($rows as $c){
      $aux = new seg_usuario($c{'USR_CODIGO'},$c{'USR_NOMBRES'},$c{'USR_APELLIDOS'},$c{'USR_CEDULA'},
                             "","","","","","","","","","");
      array_push($arrayusuario, $aux);
    }
    return $arrayusuario;        
  }
  
  function usuariosXapellidos($apellidos) {
    $rows = self::$db->getRows("SELECT * FROM venta_refer.seg_usuario where USR_APELLIDOS like ?", array("%{$apellidos}%"));        
    $arrayusuario= array();        
    foreach ($rows as $c){
      $aux = new seg_usuario($c{'USR_CODIGO'},$c{'USR_NOMBRES'},$c{'USR_APELLIDOS'},$c{'USR_CEDULA'},
                             "","","","","","","","","","");
      array_push($arrayusuario, $aux);
    }
    return $arrayusuario;        
  }

  function updateusuario($id,$nombres,$apellidos,$cedula,$fecha,$estado,
                         $tipo,$usuario,$password,$mail,$foto,
                         $tel1,$tel2) {    
    $insertrow = self::$db->updateRow("UPDATE venta_refer.seg_usuario  
                                          SET seg_usuario.USR_NOMBRES = ?,
                                              seg_usuario.USR_APELLIDOS = ?,
                                              seg_usuario.USR_CEDULA = ?,
                                              seg_usuario.USR_FECHA = ?,
                                              seg_usuario.USR_ESTADO = ?,   
                                              seg_usuario.TIP_CODIGO = ?,
                                              seg_usuario.USR_USUARIO = ?,
                                              seg_usuario.USR_PASSWORD = ?,
                                              seg_usuario.USR_EMAIL = ?,
                                              seg_usuario.USR_FOTO = ?,
                                              seg_usuario.USR_TEL1 = ?,
                                              seg_usuario.USR_TEL2 = ?
                                        WHERE seg_usuario.USR_CODIGO = ? ", 
                                        array( "{$nombres}","{$apellidos}","{$cedula}",
                                               "{$fecha}","{$estado}","{$tipo}",
                                               "{$usuario}","{$password}","{$mail}",
                                               "{$foto}","{$tel1}","{$tel2}",
                                             $id));
  }  

  function deleteusuario($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM venta_refer.seg_usuario WHERE USR_CODIGO= ?", array("{$id}"));
  }  

}
?>

