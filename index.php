<?php 
echo "HOLAmmmmmmmmXDmm	";
try {
	$serverName = 'localhost';
	$databaseName = 'master';
	$userName = 'sa';
	$pass = 'royberT0908*';
	$conn = new PDO("sqlsrv:Server=$serverName;Database=$databaseName", $userName, $pass);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	return true;
} catch (PDOException $e) {
	echo 'Error en la conexion: '.$e->getMessage();
}

// consulta
$sql = "SELECT 1 + 1 as result";
$result = $conn->query($sql);
if($result){
	echo "consulta ok";
	print_r($result);
}else{
	echo $conn->errorInfo()[2];
}
?>
