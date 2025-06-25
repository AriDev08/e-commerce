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
</head>
<body>
    <h2>Register Admin Baru</h2>
    <form method="POST">
        <label>Username:</label><br>
        <input type="text" name="username" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit">Register</button>
    </form>

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
