<?php 
	function empresa($app,$empresa) {
		//Cargar informacion de la empresa
	    $app->render('empresas/index.php', array('empresa' => $empresa));	
	}

	function  cargarAdmin($app,$pagina) {
	    $app->render($pagina.'.php',array('app'=>$app));
	}
 ?>