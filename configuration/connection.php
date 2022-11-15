<?php

$hostname = "ap-south.connect.psdb.cloud";
$username = "qyllrz09u1xy11w6jf6h";
$password = "pscale_pw_EbOY4bPrqVTSeQiIkpWER6nzRiO5hD1rdG1FDkksUDz";
$database = "gs_crud_php";

$mysqli;
try {
    $mysqli = mysqli_init();
    $mysqli->ssl_set(NULL, NULL, "/etc/ssl/certs/ca-certificates.crt", NULL, NULL);
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