<?php

class seg_usuario
{
    private $usr_codigo;
    private $usr_nombres;
    private $usr_apellidos;
    private $usr_cedula;
    private $usr_fecha;
    private $usr_estado;
    private $usr_ult_acceso;
    private $tip_codigo;
    private $usr_usuario;
    private $usr_password;
    private $usr_email;
    private $usr_foto;
    private $usr_tel1;
    private $usr_tel2;
    
     function __construct($usr_codigo, $usr_nombres, $usr_apellidos, $usr_cedula, $usr_fecha,
                          $usr_estado, $usr_ult_acceso, $tip_codigo, $usr_usuario, $usr_password,
                          $usr_email, $usr_foto, $usr_tel1, $usr_tel2) {
       $this->usr_codigo = $usr_codigo;
       $this->usr_nombres = $usr_nombres;
       $this->usr_apellidos = $usr_apellidos;
       $this->usr_cedula = $usr_cedula;
       $this->usr_fecha = $usr_fecha;
       $this->usr_estado = $usr_estado;
       $this->usr_ult_acceso = $usr_ult_acceso;
       $this->tip_codigo = $tip_codigo;
       $this->usr_usuario = $usr_usuario;
       $this->usr_password = $usr_password;
       $this->usr_email = $usr_email;
       $this->usr_foto = $usr_foto;
       $this->usr_tel1 = $usr_tel1;
       $this->usr_tel2 = $usr_tel2;
     }
    
     function setIdusuario($usr_codigo){
       $this->usr_codigo = $usr_codigo;
     } 
     function getIdusuario(){
       return $this->usr_codigo;
     } 
     function setNombre($usr_nombres){
       $this->usr_nombres = $usr_nombres;
     } 
     function getNombre(){
       return $this->usr_nombres;
     } 
     function setApellido($usr_apellidos){
       $this->usr_apellidos = $usr_apellidos;
     } 
     function getApellido(){
       return $this->usr_apellidos;
     } 
     function setCedula($usr_cedula){
       $this->usr_cedula = $usr_cedula;
     } 
     function getCedula(){
       return $this->usr_cedula;
     } 
     function setFecha($usr_fecha){
       $this->usr_fecha = $usr_fecha;
     } 
     function getFecha(){
       return $this->usr_fecha;
     } 
     function setEstado($usr_estado){
       $this->usr_estado = $usr_estado;
     } 
     function getEstado(){
       return $this->usr_estado;
     } 
     function setUltAcceso($usr_ult_acceso){
       $this->usr_ult_acceso = $usr_ult_acceso;
     } 
     function getUltAcceso(){
       return $this->usr_ult_acceso;
     } 
     function setTipo($tip_codigo){
       $this->tip_codigo = $tip_codigo;
     } 
     function getTipo(){
       return $this->tip_codigo;
     } 
     function setUsuario($usr_usuario){
       $this->usr_usuario = $usr_usuario;
     } 
     function getUsuario(){
       return $this->usr_usuario;
     } 
     function setPassword($usr_password){
       $this->usr_password = $usr_password;
     } 
     function getPassword(){
       return $this->usr_password;
     } 
     function setEmail($usr_email){
       $this->usr_email = $usr_email;
     } 
     function getEmail(){
       return $this->usr_email;
     } 
     function setFoto($usr_foto){
       $this->usr_foto = $usr_foto;
     } 
     function getFoto(){
       return $this->usr_foto;
     }
     function setTel1($usr_tel1){
       $this->usr_tel1 = $usr_tel1;
     } 
     function getTel1(){
       return $this->usr_tel1;
     } 
     function setTel2($usr_tel2){
       $this->usr_tel2 = $usr_tel2;
     } 
     function getTel2(){
       return $this->usr_tel2;
     } 
}

?> 
