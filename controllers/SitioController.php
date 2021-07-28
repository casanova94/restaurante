<?php
include_once "Controller.php";

class SitioController extends Controller{

	public function inicio(){
       echo $this->render('sitio/home','Inicio');
	}
}