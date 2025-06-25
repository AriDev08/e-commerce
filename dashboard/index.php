<?php
session_start();
// if (!isset($_SESSION['user_id']) || $_SESSION['role'] != "admin") {
//     header("Location:");
//     exit();
// }
?>

<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <main class="flex-1 p-6">

        <?php
        include "../partial/navbar.php";
        include "../partial/sidebar.php";
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            switch ($page) {
                case '':
                    include "";
                    break;
              

                default:
                    include "";
                    break;
            }
        } else {
            include "";
        }
?>
 </main>
 </div>

</body>

</html>