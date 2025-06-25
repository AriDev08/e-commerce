<?php
session_start();
include "inc/koneksi.php";

$username = strtolower(trim($_POST['username']));
$password = trim($_POST['password']);

$query = "SELECT * FROM users WHERE LOWER(username) = '$username'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);

    if (password_verify($password, $row['password'])) {
        $_SESSION['username'] = $row['username'];
        $_SESSION['role'] = $row['role'];

        if ($row['role'] === 'admin') {
            header("Location: ../dashboard/index.php");
        } else {
            header("Location: ../landingpage/index.php");
        }
        exit();
    } else {
        $_SESSION['error'] = "Password salah";
    }
} else {
    $_SESSION['error'] = "Akun tidak ditemukan";
}
header("Location: ../landingpage/login.php");
exit();
?>
