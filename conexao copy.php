<?php
$serverName = "server_name";
$connectionOptions = array(
    "Database" => "name_database",
    "Uid" => "name_user",
    "PWD" => "password",
    "Encrypt" => true,
    "TrustServerCertificate" => false
);


$conn = sqlsrv_connect($serverName, $connectionOptions);

//OK
if (!$conn) {
    die(print_r(sqlsrv_errors(), true));
}
?>