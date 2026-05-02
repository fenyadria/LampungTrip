<?php include 'config.php'; ?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/navbar.css">
<link rel="stylesheet" href="css/open_trip.css">
</head>
<body>

<div class="navbar">
    <h2>Lampung Trip</h2>
    <div>
        <a href="user.php">Beranda</a>
        <a href="destinasi.php">Destinasi</a>
        <a class="active" href="open_trip.php">Open Trip</a>
    </div>
</div>

<div class="container">
<?php
$query = mysqli_query($conn, "
    SELECT open_trip.*, destinasi.nama 
    FROM open_trip 
    JOIN destinasi ON open_trip.destinasi_id = destinasi.id
");

while($o = mysqli_fetch_assoc($query)){
?>
    <div class="card">
        <img src="<?= $o['gambar']; ?>">
        <div class="card-body">
            <h3><?= $o['nama']; ?></h3>
            <p><?= $o['tanggal']; ?></p>
            <b>Rp <?= number_format($o['harga']); ?></b> /orang
            <p>Kuota: <?= $o['kuota_terisi']; ?> / <?= $o['kuota']; ?></p>

            <a class="btn" href="detail_trip.php?id=<?= $o['id']; ?>">Lihat Detail</a>
        </div>
    </div>
<?php } ?>
</div>

</body>
</html>