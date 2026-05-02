<?php
include 'config.php';
$id = $_GET['id'];

$query = mysqli_query($conn, "
    SELECT open_trip.*, destinasi.nama, destinasi.lokasi, destinasi.deskripsi
    FROM open_trip
    JOIN destinasi ON open_trip.destinasi_id = destinasi.id
    WHERE open_trip.id = $id
");

$data = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Detail Open Trip</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/detail_trip.css">
</head>
<body>

<div class="navbar">
    <h2>Lampung Trip</h2>
    <div>
        <a href="#">Beranda</a>
        <a href="destinasi.php">Destinasi</a>
        <a class="active" href="open_trip.php">Open Trip</a>
    </div>
</div>

<div class="container">

    <div class="left-area">

        <div class="left-top">

            <div class="left">
                <img id="mainImage" class="main-img" src="/LampungTrip/<?= $data['gambar']; ?>">

                <div class="thumbs">
                    <img src="/LampungTrip/<?= $data['gambar']; ?>" onclick="changeImg(this)">
                    <img src="/LampungTrip/<?= $data['gambar']; ?>" onclick="changeImg(this)">
                    <img src="/LampungTrip/<?= $data['gambar']; ?>" onclick="changeImg(this)">
                    <img src="/LampungTrip/<?= $data['gambar']; ?>" onclick="changeImg(this)">
                </div>
            </div>

    
            <div class="middle">
                <h2><?= $data['nama']; ?></h2>
                <p class="sub">3 hari 2 malam</p>
                <p class="loc">📍 <?= $data['lokasi']; ?></p>

                <p class="desc"><?= $data['deskripsi']; ?></p>

                <div class="fasilitas-box">
                    <div>🚌 Transport</div>
                    <div>📍 Meeting</div>
                    <div>🍽 Makan</div>
                    <div>👥 Group</div>
                </div>
            </div>

        </div>


        <div class="left-bottom">

            <div class="desc-box">
                <h3>Deskripsi</h3>
                <p><?= $data['deskripsi']; ?></p>

                <h3>Highlight</h3>
                <ul>
                    <li>Snorkeling spot terbaik</li>
                    <li>Air laut jernih</li>
                    <li>Spot instagramable</li>
                    <li>Sunset view</li>
                </ul>
            </div>

            <div class="itinerary-box">
                <h3>Itinerary</h3>
                <ul class="timeline">
                    <li><span>Hari 1</span> Berangkat</li>
                    <li><span>Hari 2</span> Snorkeling</li>
                    <li><span>Hari 3</span> Pulang</li>
                </ul>
            </div>

        </div>

    </div>

    <div class="right">


        <div class="card">
            <h3>Rp 450.000 <span>/orang</span></h3>
            <p class="kuota">Kuota 20 / 30</p>

            <label>Tanggal</label>
            <input type="text" value="25 - 26 Juni 2026">

            <button class="btn">Daftar Sekarang</button>
            <button class="btn-wa">WhatsApp</button>
        </div>

        <div class="card pembayaran">
            <h4>Pembayaran</h4>

            <div class="bank">
                <img src="img/bri.png">
                <div>
                    <p>1234 5678 9123</p>
                    <small>a.n Lampung Trip</small>
                </div>
            </div>

            <div class="bank">
                <img src="img/bni.png">
                <div>
                    <p>9876 5432 1234</p>
                    <small>a.n Lampung Trip</small>
                </div>
            </div>
        </div>

    </div>

</div>

</body>
</html>