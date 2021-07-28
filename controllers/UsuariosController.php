<?php
include_once "Controller.php";
include_once "models/Usuarios.php";

class UsuariosController extends Controller{

	public function index(){
		$model = new Usuarios();
		$usuarios = $model->getAll();
		echo $this->render('usuarios/index','Ver Usuarios',['usuarios'  => $usuarios]);
	}

	public function importar(){
		$msg = "";
        
		if(!empty($_FILES['json_usuarios']['tmp_name'])){
           try{

           	 $model = new Usuarios();
             $data = file_get_contents($_FILES['json_usuarios']['tmp_name']);
             if(!$model->existNickname($data) && !$model->existRFC($data)){
                 $model->importUsers($data);
                 $msg = "Archivo cargado con éxito";
             }else{
             	   $msg = "No se guardó el usuario porque ya existe";
             }
             
           }catch(Exception $e){
           	 $msg =  "El archivo no pudo ser cargado";
           }
		}

		echo $this->render('usuarios/importar','Importar Usuarios',['msg'=>$msg]);
	}
}