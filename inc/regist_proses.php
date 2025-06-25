<?php
include 'inc/koneksi.php';

$username = strtolower(trim($_POST['username']));
$password = password_hash(trim($_POST['password']), PASSWORD_DEFAULT);
$no_telp = $_POST['no_tlp'];
$role = 'customer'; 

$query = "INSERT INTO users (username, password, no_tlp, role)
          VALUES ('$username', '$password', '$no_telp', '$role')";
mysqli_query($conn, $query);

header("Location: ../landingpage/login.php");
exit();
?>
