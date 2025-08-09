<?php
include 'conexao.php';

$sql = "SELECT * FROM Clientes";
$stmt = sqlsrv_query($conn, $sql);
$i = 0;
?>
<!DOCTYPE html>
<html>
<head>
<title>Tabela Clientes</title>
</head>

<body>
<?php
echo "<table>";
while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
	$i++;
	if(($i%2)==0){
		echo "<tr>";
		foreach ($row as $col) {
			echo "<td bgcolor=lightgray>" . utf8_encode($col) . "</td>";
		}
		echo "</tr>";
	}else{
		echo "<tr>";
		foreach ($row as $col) {
			echo "<td bgcolor=white>" . utf8_encode($col) . "</td>";
		}
		echo "</tr>";
	}
    
    
}
echo "</table>";

sqlsrv_close($conn);
?>
</body>