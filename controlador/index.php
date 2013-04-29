<?php 
	function  cargar($app,$pagina) {
	    $app->render('pagina/'.$pagina.'.php',array('app'=>$app));
	}
 ?>