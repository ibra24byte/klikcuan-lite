index.php
<?php
include "koneksi.php";
$iklan = mysqli_query($koneksi, "SELECT * FROM iklan ORDER BY id DESC LIMIT 10");
?>

<!DOCTYPE html>
<html>
<head>
    <title>KlikCuan Lite</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Selamat datang di KlikCuan Lite</h1>
    <div class="iklan-container">
        <?php while ($row = mysqli_fetch_assoc($iklan)) { ?>
            <div class="iklan">
                <h3><?php echo $row['judul']; ?></h3>
                <p><?php echo $row['deskripsi']; ?></p>
                <a href="<?php echo $row['link']; ?>" target="_blank">Lihat Iklan</a>
            </div>
        <?php } ?>
    </div>
</body>
</html>
<!-- Perubahan kecil dari HP -->
