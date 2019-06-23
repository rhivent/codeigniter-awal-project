<?php
$url = "http://localhost/bagian26/index.php" ;
$host = "localhost";
$username = "root";
$password = "";
$database = "admin_mhs";

$connect = mysql_connect($host, $username, $password);
mysql_select_db($database, $connect) or Die("MySQL Gagal Koneksi");
?>