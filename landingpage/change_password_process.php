<?php
session_start();
include '../inc/koneksi.php';
if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit();
}
$id = $_SESSION['id'];
$new_password = $_POST['new_password'];
$confirm_password = $_POST['confirm_password'];
if ($new_password !== $confirm_password) {
    echo "Password konfirmasi tidak cocok.";
    exit();
}
$new_hashed = password_hash($new_password, PASSWORD_DEFAULT);
$query = "UPDATE users SET password = ? WHERE id = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "si", $new_hashed, $id);

if (mysqli_stmt_execute($stmt)) {
    echo "Password berhasil diganti.";
} else {
    echo "Gagal mengganti password.";
}
?>