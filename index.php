<?php
	
	require_once "core/helpers.php";
	
	if(isset($_GET['c'])){
		
		$controlador = cargarControlador($_GET['c']);
		
		if(isset($_GET['a'])){
			if(isset($_GET['id'])){
				cargarAccion($controlador, $_GET['a'], $_GET['id']);
				} else {
				cargarAccion($controlador, $_GET['a']);
			}
			} else {
			cargarAccion($controlador,'inicio');
		}
		
		} else {
		
		$controlador = cargarControlador('sitio');
		$accionTmp = 'inicio';
		$controlador->$accionTmp();
	}
?>