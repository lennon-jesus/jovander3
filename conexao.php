<?php
$serverName = "tcp:lennon.database.windows.net,1433";
$connectionOptions = array(
    "Database" => "lennon",
    "Uid" => "lennon",
    "PWD" => "adsIFSP2025",
    "Encrypt" => true,
    "TrustServerCertificate" => false
);


$conn = sqlsrv_connect($serverName, $connectionOptions);

if (!$conn) {
    die(print_r(sqlsrv_errors(), true));
}
?>