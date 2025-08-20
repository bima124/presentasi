<?php
session_start();
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'db_test';

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

define('BASE_URL', str_replace('/controller', '', dirname($_SERVER['SCRIPT_NAME'])));
?>