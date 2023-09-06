<?php 
echo "Ahora<hr>";
// phpinfo();
try {
	$serverName = "sqlserver";
	$databaseName = "dbapi";
	$userName = "sa";
	$pass = "royberT0908*";
	$conn = new PDO("sqlsrv:server=$serverName;database=$databaseName;Encrypt=0;TrustServerCertificate=1", $userName, $pass);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	echo 'Error en la conexion: '.$e->getMessage();
	print_r($e);
}

// consulta
$sql = "SELECT 1 + 1 as result";
$stmt = $conn->prepare($sql);
$stmt->execute();

$res = $stmt->fetchAll(PDO::FETCH_ASSOC);  
echo count($res);
echo "<br>consulta ok";
print_r($res);

?>
