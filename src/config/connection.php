<?php
require __DIR__."/./loadenv.php";

$hostname = isset($_ENV["DB_HOST"]) ? $_ENV["DB_HOST"] : "localhost";
$username = isset($_ENV["DB_USERNAME"]) ? $_ENV["DB_USERNAME"] : "root";
$password = isset($_ENV["DB_PASSWORD"]) ? $_ENV["DB_PASSWORD"] : "";
$database = isset($_ENV["DB_NAME"]) ? $_ENV["DB_NAME"] : "crud_php";
$ca_certificate = isset($_ENV["SSL_CERT_PATH"]) ? $_ENV["SSL_CERT_PATH"] : null;

global $mysqli;
try {
    $mysqli = mysqli_init();
    $mysqli->ssl_set(NULL, NULL, $ca_certificate, NULL, NULL);
    $mysqli->real_connect($hostname, $username, $password, $database);

    if ($mysqli->connect_error) {
        echo "Connection Failed" . $mysqli->connect_error;
    }
} catch (\Throwable $th) {
    //throw $th;
    echo "Error Handled " . $th;
}
