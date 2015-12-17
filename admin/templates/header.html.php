<?php
   
    if( !isset($_SESSION['user']) ){
        header("Location: ".$base_path.'error');
        exit();
    }else{
        // Si hay creada una sesión cargamos el nombre de usuario
        $user = $_SESSION['user'];
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Peliculas</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.css">
	<link rel="stylesheet" href="styles/styles.css">
</head>
<body>
	<header>
		<hgroup>
			<h1>Listado de peliculas</h1>
		</hgroup>
	</header>