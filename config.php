<?php

$server = "localhost";
$user = "Gusrai";
$password = "jonmin123";
$nama_database = "e-brenk";

$db = mysqli_connect($server, $user, $password, $nama_database);
if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>