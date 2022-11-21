<?php
require_once __DIR__ . '/../../vendor/autoload.php';

$prod_env = ".env.production";
$dev_env = ".env.development";

if (file_exists(__DIR__ . "/../../" . $prod_env)) {
    $dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__ . "/../../", $prod_env);
    $dotenv->load();
}
if (file_exists(__DIR__ . "/../../" . $dev_env)) {
    $dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__ . "/../../", $dev_env);
    $dotenv->load();
}
