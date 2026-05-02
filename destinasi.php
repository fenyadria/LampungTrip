<?php 
include 'config.php'; 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Destinasi</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/destinasi.css">
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

<div class="search">
    <input type="text" id="search" placeholder="Cari destinasi wisata...">
</div>

<div class="container" id="list">

<?php
$query = mysqli_query($conn, "SELECT * FROM destinasi") 
or die(mysqli_error($conn));

while ($d = mysqli_fetch_assoc($query)) {
?>

    <div class="card">
        <img src="<?php echo $d['gambar']; ?>" alt="gambar">

        <div class="card-body">
            <h3><?php echo $d['nama']; ?></h3>
            <p><?php echo $d['lokasi']; ?></p>

            <div class="rating">
                ⭐ <?php echo $d['rating']; ?> (<?php echo $d['review']; ?>)
            </div>

            <a class="btn" href="detail_destinasi.php?id=<?php echo $d['id']; ?>">
                Lihat Detail
            </a>
        </div>
    </div>

<?php } ?>

</div>

</body>
</html>