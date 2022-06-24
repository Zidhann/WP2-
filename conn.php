<?php

$sever = "localhost";
$user = "root";
$pass = "";
$db = "wpb_inventori";

$conn = new mysqli($sever,$user,$pass,$db);

// if($conn->connect_error){
//     echo "Koneksi gagal ".$conn->connect_error;
// }else{
//     echo "koneksi berhasil";
// }