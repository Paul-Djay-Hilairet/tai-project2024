<?php

// if we are in the local environment
$host = "localhost";
$dbname = "tai";
$user = "root";
$pwd = "";

// if we are on the server
if (file_exists("/var/www/")) {
    $host = "localhost";
    $dbname = "tai_app_2023_2024_ant";
    $user = "tai_app_2023_2024_ant";
    $pwd = "Y5I07L0SE2";
}

?>