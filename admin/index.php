<?php  
	
	require_once '../app/config.php';
	require_once $base_path.'db/db.php';
	require_once $base_path.'db/films.php';
	
	global $path_admin;

	if ( isset($_GET['newFilm']) ) {

		$film = htmlspecialchars($_POST['film'], ENT_QUOTES, 'UTF-8');
		$descripcion = htmlspecialchars($_POST['descripcion'], ENT_QUOTES, 'UTF-8');
		$author = htmlspecialchars($_POST['author'], ENT_QUOTES, 'UTF-8');

		$film = ingresarPelicula($film, $descripcion, $author);

		if ( $film ) {

			header('Location: .');
			exit();

		}

	}

	if ( isset($_GET['edit']) ) {



	}
	
	if ( isset($_GET['delete']) ) {

		$id = $_POST['id'];

		if ( is_numeric($id) ) {

			borrarPelicula($id);

		}

	}	

	require_once $path_admin.'templates/header.html.php';
	$films = listadoPeliculas();
	require_once $path_admin.'home/main.html.php';

?>