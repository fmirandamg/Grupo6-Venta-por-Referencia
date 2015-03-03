<?php

class inv_producto
{
    private $prod_codigo;
    private $prod_descripcion;
    private $prod_detalle;    
    private $prod_cantidad;
    private $prod_valor_vta;
    private $prod_valor_comis;
    private $prod_estado;
    private $prod_val_costo;
    private $usr_codigo;
    private $prod_foto;
    
     function __construct($prod_codigo, $prod_descripcion, $prod_detalle, $prod_cantidad, 
                          $prod_valor_vta, $prod_valor_comis, $prod_estado, $prod_val_costo, $usr_codigo,$prod_foto) {
       $this->prod_codigo = $prod_codigo;
       $this->prod_descripcion = $prod_descripcion;
       $this->prod_detalle = $prod_detalle;
       $this->prod_cantidad = $prod_cantidad;
       $this->prod_valor_vta = $prod_valor_vta;
       $this->prod_valor_comis = $prod_valor_comis;
       $this->prod_estado = $prod_estado;
       $this->prod_val_costo = $prod_val_costo;
       $this->usr_codigo = $usr_codigo;
       $this->prod_foto = $prod_foto;
     }
    
     function setProd_codigo($prod_codigo){
       $this->prod_codigo = $prod_codigo;
     } 
     function getProd_codigo(){
       return $this->prod_codigo;
     } 
     function setDescripcion($prod_descripcion){
       $this->prod_descripcion = $prod_descripcion;
     } 
     function getDescripcion(){
       return $this->prod_descripcion;
     } 
     function setDetalle($prod_detalle){
       $this->prod_detalle = $prod_detalle;
     } 
     function getDetalle(){
       return $this->prod_detalle;
     } 
     function setCantidad($prod_cantidad){
       $this->prod_cantidad = $prod_cantidad;
     } 
     function getCantidad(){
       return $this->prod_cantidad;
     } 
     function setValor_vta($prod_valor_vta){
       $this->prod_valor_vta = $prod_valor_vta;
     } 
     function getValor_vta(){
       return $this->prod_valor_vta;
     } 
     function setValor_comis($prod_valor_comis){
       $this->prod_valor_comis = $prod_valor_comis;
     } 
     function getValor_comis(){
       return $this->prod_valor_comis;
     } 
     function setEstado($prod_estado){
       $this->prod_estado = $prod_estado;
     } 
     function getEstado(){
       return $this->prod_estado;
     } 
     function setVal_costo($prod_val_costo){
       $this->prod_val_costo = $prod_val_costo;
     } 
     function getVal_costo(){
       return $this->prod_val_costo;
     } 
     function setUsuario($usr_codigo){
       $this->usr_codigo = $usr_codigo;
     } 
     function getUsuario(){
       return $this->usr_codigo;
     } 
     function setfoto($prod_foto){
       $this->prod_foto = $prod_foto;
     } 
     function getfoto(){
       return $this->prod_foto;
     } 
     
}

?> 
