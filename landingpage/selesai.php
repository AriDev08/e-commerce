<?php
session_start();
include "../inc/koneksi.php";

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}


if (isset($_POST['id'])) {
    $order_id = intval($_POST['id']);

  
    $query = "UPDATE orders SET status = 'selesai' WHERE id = $order_id";

    if (mysqli_query($conn, $query)) {
  
        header("Location: pesanansaya.php");
        exit;
    } else {
        echo "Gagal memperbarui status: " . mysqli_error($conn);
    }
} else {
    echo "ID pesanan tidak ditemukan.";
}
