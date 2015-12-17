<?php  


function usserLogin( $usser, $pswd ){

	global $pdo;
   
    try{

        $sql = 'SELECT * FROM ussers WHERE ussers = :usser AND pswd = :pswd;';

        $ps = $pdo->prepare($sql);
        $ps->bindValue(':usser', $usser);
        $ps->bindValue(':pswd', $pswd);

        $ps->execute();

    }catch(PDOException $e){

        die("No se ha podido extraer información de la base de datos:". $e->getMessage());
    
    }

    $usser = $ps->fetch(PDO::FETCH_ASSOC);

    return $usser;

}

?>