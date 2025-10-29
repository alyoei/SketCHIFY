<?php
$host = "localhost";
$user = "root"; // ubah kalau username MySQL kamu berbeda
$pass = ""; // isi password MySQL kamu
$dbname = "sketchify";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
