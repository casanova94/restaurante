<?php
include_once "Controller.php";
include_once "models/Reservaciones.php";
include_once "models/Usuarios.php";

class ReservacionesController extends Controller{

	public function index(){
		$model = new Reservaciones();
		$reservaciones = $model->getAll();
		echo $this->render('reservaciones/index','Reservaciones',['reservaciones'  => $reservaciones]);
	}

	public function reservar(){
		$msg = "";
        $model = new Usuarios();
		$usuarios = $model->getAll();
		$modelRes = new Reservaciones();

		if(!empty($_POST)){
			$modelRes->saveReservation($_POST);
		}
		echo $this->render('reservaciones/reservar','Reservar',['msg'=>$msg,'usuarios'=>$usuarios]);
	}
}