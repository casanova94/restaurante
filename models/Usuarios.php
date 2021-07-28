<?php

class Usuarios{

    private $usuarios;

    function __construct(){
    	
        try{
          $string = file_get_contents("core/usuarios.json");
          $json = json_decode($string);
          $this->usuarios = $json->usuarios;

        }catch(Exception $err){
          echo "Ha ocurrido un error al cargar los usuarios";
          $this->usuarios = array();
        }
    }
    


    public function getAll(){
    	return $this->usuarios;
    }


    public function importUsers($data = array()){

        if(!empty($data)){
            // abrimos el db original
            $string = file_get_contents("core/usuarios.json");
            $json = json_decode($string,true);

            // mezclamos el original y el archivo subido
            $data = json_decode($data,true);
            
            $json['usuarios'] = array_merge($json['usuarios'],$data['usuarios']);
            file_put_contents('core/usuarios.json', json_encode($json));
        }

    }

    public function existNickname($data){
        $exist = false;
        $data = json_decode($data);
        $data = $data->usuarios;
         foreach($this->usuarios AS $usuario){
              foreach($data AS $user_import){
                  if($user_import->nickname == $usuario->nickname)$exist = true;
              }             
         }
         return $exist;
    }

    public function existRFC($data){
        $exist = false;
        $data = json_decode($data);
        $data = $data->usuarios;
         foreach($this->usuarios AS $usuario){
              foreach($data AS $user_import){
                  if($user_import->nickname == $usuario->nickname)$exist = true;
              }             
         }
         return $exist;
    }


}