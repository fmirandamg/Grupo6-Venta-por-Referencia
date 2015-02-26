<?php

class adm_referencia
{
    private $ref_secuencia;
    private $ure_codigo;
    private $prod_codigo;    
    private $usr_codigo;
    private $ref_fecha;
    private $ref_valcomision;
    
     function __construct($ref_secuencia, $ure_codigo, $prod_codigo, $usr_codigo, 
                          $ref_fecha, $ref_valcomision) {
       $this->ref_secuencia = $ref_secuencia;
       $this->ure_codigo = $ure_codigo;
       $this->prod_codigo = $prod_codigo;
       $this->usr_codigo = $usr_codigo;
       $this->ref_fecha = $ref_fecha;
       $this->ref_valcomision = $ref_valcomision;;
     }
    
     function setRef_secuencia($ref_secuencia){
       $this->ref_secuencia = $ref_secuencia;
     } 
     function getRef_secuencia(){
       return $this->ref_secuencia;
     } 
     function setUre_codigo($ure_codigo){
       $this->ure_codigo = $ure_codigo;
     } 
     function getUre_codigo(){
       return $this->ure_codigo;
     } 
     function setProd_codigo($prod_codigo){
       $this->prod_codigo = $prod_codigo;
     } 
     function getProd_codigo(){
       return $this->prod_codigo;
     } 
     function setUsr_codigo($usr_codigo){
       $this->usr_codigo = $usr_codigo;
     } 
     function getUsr_codigo(){
       return $this->usr_codigo;
     } 
     function setRef_fecha($ref_fecha){
       $this->ref_fecha = $ref_fecha;
     } 
     function getRef_fecha(){
       return $this->ref_fecha;
     } 
     function setRef_valcomision($ref_valcomision){
       $this->ref_valcomision = $ref_valcomision;
     } 
     function getRef_valcomision(){
       return $this->ref_valcomision;
     } 
     
}

?> 
