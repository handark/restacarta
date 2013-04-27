<?php 
	function empresa($app,$empresa) {

		//Cargar informacion de la empresa

	    $app->render('empresas/index.php', array('empresa' => $empresa));
	
	}
 ?>