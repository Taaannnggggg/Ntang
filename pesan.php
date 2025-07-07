<?php
include 'fungsi.php';

$nama = $_POST['nama'];
$jumlah = (int)$_POST['jumlah'];
$kategori = $_POST['kategori'];

$totalHarga = hitungTotalHarga($jumlah, $kategori);
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Detail Pemesanan</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h2>Detail Pemesanan Tiket</h2>
    <table>
      <tr>
        <td><strong>Nama:</strong></td>
        <td><?= htmlspecialchars($nama) ?></td>
      </tr>
      <tr>
        <td><strong>Jumlah Tiket:</strong></td>
        <td><?= $jumlah ?></td>
      </tr>
      <tr>
        <td><strong>Kategori:</strong></td>
        <td><?= ucfirst($kategori) ?></td>
      </tr>
      <tr>
        <td><strong>Total Harga:</strong></td>
        <td>Rp<?= number_format($totalHarga, 0, ',', '.') ?></td>
      </tr>
    </table>
  </div>
</body>
</html>
