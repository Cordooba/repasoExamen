<?php  


	$host = 'localhost';
	$db = 'repaso';
	$usser = 'manolo';
	$pswd = 'manolo';

	//Contraseña
	$salt = 'ZoB[GKL&o5Pa<HHRD5E_3Kr:,VL<pz5J';
	
	//Para establecer la conexión a la base de datos necesitamos un objeto PDO

	try {
	
		$pdo = new PDO('mysql:host='.$host.';dbname='.$db, $usser, $pswd);
    	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	$pdo->exec('SET NAMES utf8');

	} catch (PDOException $e) {
	
		die('Error de conexión a la base de datos : '. $e->getMessage());

	}

?>