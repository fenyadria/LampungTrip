<?php
$conn = mysqli_connect("localhost", "root", "", "lampung_trip");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>