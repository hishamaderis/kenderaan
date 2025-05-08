<?php
$dbName = "kenderaanilp";
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
if (!$conn) {
    die("Pangkalan data tidak dapat disambungkan.");
}