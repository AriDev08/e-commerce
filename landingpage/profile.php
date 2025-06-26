<?php
session_start();
include '../inc/koneksi.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
$username = $_SESSION['username'];
$query = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profil Pengguna</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="overflow-y-hidden bg-gray-100">
<nav class="container mx-auto px-8 mt-3">
    <ul class="flex justify-between items-center">
        <li>
            <ul class="flex items-center gap-6">
                <li class="text-[36px] flex items-center gap-2">
                    Shop <img class="w-[34px] h-[34px] mt-2" src="arrow.png" alt="">
                </li>
                <li class="text-[36px]">About</li>
                <li class="text-[36px]">News</li>
            </ul>
        </li>
        <li>
            <ul class="flex items-center gap-9">
                <li><img class="w-[41px] h-[41px]" src="shopping-chart.png" alt=""></li>
                <li><img class="w-[41px] h-[41px]" src="user.png" alt=""></li>
                <li><img class="w-[36px] h-[36px]" src="search.png" alt=""></li>
            </ul>
        </li>
    </ul>
</nav>
<section class="w-full h-screen flex justify-center items-center">
    <div class="bg-white shadow-lg rounded-lg w-[80%] p-10">
        <h1 class="text-[48px] font-semibold text-center mb-10">WELCOME, <?= htmlspecialchars($data['username']) ?></h1>
        
        <div class="flex text-[24px] justify-between">
            <div class="flex-1 space-y-4">
                <p><span class="font-bold">Username:</span> <?= htmlspecialchars($data['username']) ?></p>
                <p><span class="font-bold">Password:</span> <?= htmlspecialchars($data['password']) ?></p>
                <p><span class="font-bold">Nomor Telepon:</span> <?= htmlspecialchars($data['no_tlp']) ?></p>
            </div>
        </div>
        <a href="ubah_password.php">
            <div class="bg-gray-500 w-60 h-18 rounded-lg mx-auto mt-10 text-center py-3">
                <h1 class="font-semibold text-xl text-white">Change Password</h1>
            </div>
        </a>
    </div>
</section>
</body>
</html>
