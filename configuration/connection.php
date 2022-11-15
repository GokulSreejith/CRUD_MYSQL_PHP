<?php

$hostname = $_ENV["DB_HOST"];
$username = $_ENV["DB_USERNAME"];
$password = $_ENV["DB_PASSWORD"];
$database = $_ENV["DB_NAME"];
$ca_certificate = $_ENV["SSL_CERT_PATH"];

$mysqli;
try {
    $mysqli = mysqli_init();
    $mysqli->ssl_set(NULL, NULL, $ca_certificate, NULL, NULL);
    $mysqli->real_connect($hostname, $username, $password, $database);

    if ($mysqli->connect_error) {
        echo "Connection Failed" . $mysqli->connect_error;
    }
    echo "Connection Success";
} catch (\Throwable $th) {
    //throw $th;
    echo $th;
}

// $result = $mysqli->query("CREATE TABLE table_name (username varchar(20), password varchar(50)");