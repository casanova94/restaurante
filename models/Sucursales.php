<?php

class Sucursales{

    private $sucursales;

    function __construct(){
    	
        try{
          $string = file_get_contents("core/sucursales.json");
          $json = json_decode($string);
          $this->sucursales = $json->sucursales;

        }catch(Exception $err){
          echo "Ha ocurrido un error al cargar los sucursales";
          $this->sucursales = array();
        }
    }

    public function getAll(){
    	return $this->sucursales;
    }


}