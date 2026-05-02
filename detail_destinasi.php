<?php
include 'config.php';
$id = $_GET['id'];

$data = mysqli_query($conn, "SELECT * FROM destinasi WHERE id=$id");
$d = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/navbar.css">
<link rel="stylesheet" href="css/detail_destinasi.css">
</head>
<body>

<div class="navbar">
    <h2>Lampung Trip</h2>
    <div>
        <a href="index.php">Beranda</a>
        <a class="active" href="destinasi.php">Destinasi</a>
        <a href="open_trip.php">Open Trip</a>
    </div>
</div>


</body>
</html>