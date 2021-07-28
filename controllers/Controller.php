<?php


class Controller{
  

	public function render($view = '',$name = '',$data = array()){

        if(file_exists('views/'.$view.'.php')){
           require_once 'views/sitio/menu.php';
           require_once 'views/'.$view.'.php';
           require_once 'views/sitio/footer.php';
        }else{
           require_once 'views/notFound.php';
        }  

	}
}