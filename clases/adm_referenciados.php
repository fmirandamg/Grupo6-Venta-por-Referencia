<?php

class adm_referenciados
{
    private $ure_codigo;
    private $ure_nombres;
    private $ure_apellidos;
    private $ure_cedula;
    private $ure_email;
    private $ure_telf1;
    private $ure_telf2;
    private $ure_estado;
    private $ure_fecha_reg;
    
     function __construct($ure_codigo, $ure_nombres, $ure_apellidos, $ure_cedula,
                          $ure_email, $ure_telf1, $ure_telf2,
                          $ure_estado,$ure_fecha_reg) {
       $this->ure_codigo = $ure_codigo;
       $this->ure_nombres = $ure_nombres;
       $this->ure_apellidos = $ure_apellidos;
       $this->ure_cedula = $ure_cedula;
       $this->ure_email = $ure_email;
       $this->ure_telf1 = $ure_telf1;
       $this->ure_telf2 = $ure_telf2;
       $this->ure_estado = $ure_estado;
       $this->ure_fecha_reg = $ure_fecha_reg;
     }
    
     function setIdUre($ure_codigo){
       $this->ure_codigo = $ure_codigo;
     } 
     function getIdUre(){
       return $this->ure_codigo;
     } 
     function setNombre($ure_nombres){
       $this->ure_nombres = $ure_nombres;
     } 
     function getNombre(){
       return $this->ure_nombres;
     } 
     function setApellido($ure_apellidos){
       $this->ure_apellidos = $ure_apellidos;
     } 
     function getApellido(){
       return $this->ure_apellidos;
     } 
     function setCedula($ure_cedula){
       $this->ure_cedula = $ure_cedula;
     } 
     function getCedula(){
       return $this->ure_cedula;
     } 
     function setEmail($ure_email){
       $this->ure_email = $ure_email;
     } 
     function getEmail(){
       return $this->ure_email;
     }
     function setTel1($ure_telf1){
       $this->ure_telf1 = $ure_telf1;
     } 
     function getTel1(){
       return $this->ure_telf1;
     } 
     function setTel2($ure_telf2){
       $this->ure_telf2 = $ure_telf2;
     } 
     function getTel2(){
       return $this->ure_telf2;
     }
     function setEstado($ure_estado){
       $this->ure_estado = $ure_estado;
     } 
     function getEstado(){
       return $this->ure_estado;
     }
     function setFecha($usr_fecha){
       $this->usr_fecha = $usr_fecha;
     } 
     function getFecha(){
       return $this->usr_fecha;
     } 
      
}

?> 
