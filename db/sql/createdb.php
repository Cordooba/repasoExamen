<?php  

	require_once '../db.php';

	try {
		
		$sql = 'CREATE TABLE ussers (
					id_ussers	INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
					ussers		VARCHAR(30) NOT NULL,
					pswd 		VARCHAR(100) NOT NULL,
					created_at	TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
					modified_at	TIMESTAMP NULL DEFAULT NULL
			);';

		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$pdo->exec($sql);

	} catch (PDOException $e) {
		
		die('Error de conexión a la base de datos : '. $e->getMessage());

	}

?>