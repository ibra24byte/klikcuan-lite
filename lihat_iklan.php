<?php
include 'koneksi.php';

// Ambil ID iklan dari parameter URL
$id_iklan = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Cek apakah iklan dengan ID tersebut ada
$query = mysqli_query($koneksi, "SELECT * FROM iklan WHERE id = $id_iklan");

if (mysqli_num_rows($query) == 0) {
    echo "Iklan tidak ditemukan.";
    exit;
}

$iklan = mysqli_fetch_assoc($query);

// Di sini nanti bisa ditambahkan logika simpan view user, tambah poin, dll
echo "<h2>Terima kasih telah melihat iklan</h2>";
echo "<p>Judul: " . htmlspecialchars($iklan['judul']) . "</p>";
echo "<p>Deskripsi: " . htmlspecialchars($iklan['deskripsi']) . "</p>";
echo "<p><a href='" . htmlspecialchars($iklan['link']) . "' target='_blank'>Klik di sini untuk mengunjungi situs iklan</a></p>";
?>
