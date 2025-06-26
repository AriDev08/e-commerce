<?php
// include "../inc/koneksi.php";
// $alert = '';

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $username = strtolower(trim($_POST['username']));
//     $password = password_hash(trim($_POST['password']), PASSWORD_DEFAULT);
//     $role = 'admin';

//     $cek = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
//     if (mysqli_num_rows($cek) > 0) {
//         $alert = "username_terpakai";
//     } else {
//         $query = "INSERT INTO users (username, password, role) VALUES ('$username', '$password', '$role')";
//         if (mysqli_query($conn, $query)) {
//             $alert = "sukses";
//         } else {
//             $alert = "gagal";
//         }
//     }
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register Admin</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-t from-[#B1B1B1] to-white">
<div class="w-full h-screen flex justify-center items-center h-screen">
  <div class="w-96 p-6 shadow-xl/30 bg-gray-900/20 rounded-xl opacity-100 text-white">
    <h2 class="text-3xl text-center font-semibold mb-4">Register Admin Baru</h2>
    <form method="POST" class="flex flex-col">
      <label>Username:</label>
      <input type="text" name="username" required class="mb-4 p-2 border-b rounded focus:outline-none focus:ring-0 focus:border-gray-600">

      <label>Password:</label>
      <input type="password" name="password" required class="mb-4 p-2 border-b rounded">

      <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Register</button>
    </form>
  </div>
</div>

    <!-- <?php if ($alert === "sukses"): ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Sukses!',
                text: 'Admin berhasil diregistrasi!',
                confirmButtonText: 'OK'
            }).then(() => {
                window.location.href = '../dashboard/index.php';
            });
        </script>
    <?php elseif ($alert === "username_terpakai"): ?>
        <script>
            Swal.fire({
                icon: 'warning',
                title: 'Oops!',
                text: 'Username sudah digunakan!',
                confirmButtonText: 'OK'
            });
        </script>
    <?php elseif ($alert === "gagal"): ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: 'Terjadi kesalahan saat register.',
                confirmButtonText: 'OK'
            });
        </script>
    <?php endif; ?> -->
</body>
</html>
