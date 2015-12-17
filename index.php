<?php  
	
	global $base_path;
	global $path_admin;

	require_once $base_path.'db/ussers.php';

	if ( $_POST ) {

		$usser = htmlspecialchars($_POST['ussers'], ENT_QUOTES, 'UTF-8');
		$pswd = htmlspecialchars($_POST['pswd'], ENT_QUOTES, 'UTF-8');

		$usser = usserLogin($usser, $pswd);

		if ( $usser ) {

			session_start();

			$_SESSION['usser'] = $usser;

			header('Location: '.$path_admin);
			exit();

		}

	}

	require_once $base_path.'templates/header.html.php';
	require_once $base_path.'home/index.html.php';
	require_once $base_path.'templates/footer.html.php';


?>