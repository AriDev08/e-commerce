<?php
session_start();
include "koneksi.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = (int)$_POST['id'];
    $query = "UPDATE orders SET status='diproses' WHERE id = $id";
    mysqli_query($koneksi, $query);
}

header("Location: tampil_checkout.php");
exit;
