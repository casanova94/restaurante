<?php

class Reservaciones{

    private $reservaciones;

    function __construct(){
    	
        try{
          $string = file_get_contents("core/reservaciones.json");
          $json = json_decode($string);
          $this->reservaciones = $json->reservaciones;

        }catch(Exception $err){
          echo "Ha ocurrido un error al cargar los reservaciones";
          $this->reservaciones = array();
        }
    }

    public function getAll(){
    	return $this->reservaciones;
    }

    public function saveReservation($data = array()){

        if(!empty($data)){
            // abrimos el db original
            $string = file_get_contents("core/reservaciones.json");
            $json = json_decode($string,true);

            array_push($json['reservaciones'],array('usuario'=>$data['usuario'],'fecha'=>$data['fecha'],'hora'=>$data['hora'],'factura'=>$data['factura']=='on'?'si':'no'));

            file_put_contents('core/reservaciones.json', json_encode($json));
        }

    }


}