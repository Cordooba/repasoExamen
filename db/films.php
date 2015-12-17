<?php  

	function ingresarPelicula($film, $description, $author) {

		global $pdo;

		try {

			$sql = 'INSERT INTO films (film, description, author, created_at) VALUES (:film, :description, :author, CURRENT_TIMESTAMP);';

			$ps = $pdo->prepare($sql);

			$ps -> bindValue(':film', $film);
			$ps -> bindValue(':description', $description);
			$ps -> bindValue(':author', $author);

        	$ps->execute();			
			
		} catch (PDOException $e) {
			
			die("No se ha podido ingresar información de la base de datos:". $e->getMessage());

		}

	}

	function borrarPelicula($id) {

		global $pdo;

		try {

			$sql = 'DELETE FROM films WHERE id_film = :id ;';

			$ps = $pdo->prepare($sql);

			$ps -> bindValue(':id', $id);

        	$ps->execute();			
			
		} catch (PDOException $e) {
			
			die("No se ha podido ingresar información de la base de datos:". $e->getMessage());

		}

	}

	function listadoPeliculas() {

		global $pdo;

		try {
			
			$sql = 'SELECT * FROM films;';

        	$ps = $pdo->prepare($sql);

        	$ps->execute();

		} catch (PDOException $e) {
			
			die("No se ha podido extraer información de la base de datos:". $e->getMessage());

		}

		while( $row = $ps->fetch(PDO::FETCH_ASSOC) ){

        $films[] = $row;

    	}

    	return $films;

	} 

?>