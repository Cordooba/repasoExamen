<?php  

	require_once '../db.php';

	try {

		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$sql = 'CREATE TABLE ussers (
					id_ussers		INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
					ussers			VARCHAR(30) NOT NULL,
					pswd 			VARCHAR(100) NOT NULL,
					created_at		TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
					modified_at		TIMESTAMP NULL DEFAULT NULL
			);';

		$pdo->exec($sql);

		$sql = 'CREATE TABLE films (
					id_film 		INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
					film 			VARCHAR(40) NOT NULL,
					description		VARCHAR(200) NOT NULL,
					author 			VARCHAR(40),
					created_at		TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
					modified_at		TIMESTAMP NULL DEFAULT NULL
			);';

		$pdo->exec($sql);

	} catch (PDOException $e) {
		
		die('Error de conexión a la base de datos : '. $e->getMessage());

	}

?>