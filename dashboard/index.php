<?php
// session_start();
// if (!isset($_SESSION['username']) || $_SESSION['role'] != "admin") {
//     header("Location: ../dashboard/index.php");
//     exit();
// }

include '../inc/koneksi.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <?php 
   include "../partial/navbar.php"; 
   include "../partial/sidebar.php"; 
   ?>

    <main class="flex-1 p-6">
        <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            switch ($page) {
                case 'users':
                    include "input_users.php";
                    break;
                default:
                    echo "<p>Halaman tidak ditemukan</p>";
                    break;
            }
        } else {
            echo "<h2>Selamat Datang di Dashboard Admin</h2>";
        }
        ?>
    </main>
</body>
</html>
