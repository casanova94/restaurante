<?php
include_once "Controller.php";
include_once "models/Sucursales.php";

class SucursalesController extends Controller{

	public function index(){
		$model = new Sucursales();
		$sucursales = $model->getAll();
		echo $this->render('sucursales/index','Sucursales',['sucursales'  => $sucursales]);
	}
}