<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();
include "koneksi.php";

echo '<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Checkout</title>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
';

if (!isset($_SESSION['user_id'])) {
  echo "<script>
    Swal.fire({
      icon: 'warning',
      title: 'Belum Login',
      text: 'Silakan login terlebih dahulu.',
    }).then(() => {
      window.location.href = 'login.php';
    });
  </script>";
  exit;
}


$id_user    = $_SESSION['user_id'];
$id_produk  = $_POST['id_produk'] ?? null;
$deskripsi  = $_POST['deskripsi'] ?? '';
$deadline   = $_POST['deadline'] ?? '';


if (!$id_produk || !$deskripsi || !$deadline) {
  echo "<script>
    Swal.fire({
      icon: 'error',
      title: 'Gagal!',
      text: 'Semua field wajib diisi.',
    }).then(() => {
      history.back();
    });
  </script>";
  exit;
}


$query = "INSERT INTO orders (user_id, product_id, deskripsi_custom, deadline, status)
          VALUES (?, ?, ?, ?, 'baru')";
$stmt = mysqli_prepare($koneksi, $query);
mysqli_stmt_bind_param($stmt, "iiss", $id_user, $id_produk, $deskripsi, $deadline);

if (mysqli_stmt_execute($stmt)) {
  echo "<script>
    Swal.fire({
      icon: 'success',
      title: 'Berhasil!',
      text: 'Pesanan Anda telah berhasil dikirim.',
    }).then(() => {
      window.location.href = 'index.php';
    });
  </script>";
} else {
  echo "<script>
    Swal.fire({
      icon: 'error',
      title: 'Gagal!',
      text: 'Terjadi kesalahan saat menyimpan pesanan.',
    }).then(() => {
      history.back();
    });
  </script>";
}
?>
</body>
</html>
