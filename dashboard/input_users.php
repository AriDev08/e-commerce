<?php
include "../inc/koneksi.php";
$alert = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = strtolower(trim($_POST['username']));
    $password = password_hash(trim($_POST['password']), PASSWORD_DEFAULT);
    $role = 'admin';

    $cek = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
    if (mysqli_num_rows($cek) > 0) {
        $alert = "username_terpakai";
    } else {
        $query = "INSERT INTO users (username, password, role) VALUES ('$username', '$password', '$role')";
        if (mysqli_query($conn, $query)) {
            $alert = "sukses";
        } else {
            $alert = "gagal";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register Admin</title>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="">

  <div class="shadow-lg rounded-lg bg-white p-3 w-[83%] h-auto ml-64 mt-16">
    <h2 class="text-center text-xl font-bold mb-4 bg-[#001F3F] text-white p-3 rounded-md">Register Admin Baru</h2>

    <form method="POST" class="space-y-4 w-full max-w-lg mx-auto">
      <div>
        <label class="block font-medium">Username:</label>
        <input type="text" name="username" required class="w-full p-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-400">
      </div>

      <div>
        <label class="block font-medium">Password:</label>
        <input type="password" name="password" required class="w-full p-2 border rounded-md">
      </div>

      <div class="flex justify-end">
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Register</button>
      </div>
    </form>
  </div>

  <?php if ($alert === "sukses"): ?>
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
  <?php endif; ?>

</body>
</html>
