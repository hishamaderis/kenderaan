<?php
$dbName = "kenderaanilp";
$dbHost = "db";
$dbUser = "kenderaanilp";
$dbPass = "1";
$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
if (!$conn) {
    die("Pangkalan data tidak dapat disambungkan.");
}
