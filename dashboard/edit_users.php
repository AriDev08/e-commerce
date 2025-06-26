<?php
// include '../inc/koneksi.php';

// $alert = '';
// $id = $_GET['id'];
// $data = mysqli_query($conn, "SELECT * FROM users WHERE id='$id' AND role='admin'");
// $user = mysqli_fetch_assoc($data);

// if (!$user) {
//     die("Data admin tidak ditemukan!");
// }

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $username = strtolower(trim($_POST['username']));
//     $password = trim($_POST['password']);

//     if (!empty($password)) {
//         $hash = password_hash($password, PASSWORD_DEFAULT);
//         $update = "UPDATE users SET username='$username', password='$hash' WHERE id='$id'";
//     } else {
//         $update = "UPDATE users SET username='$username' WHERE id='$id'";
//     }

//     if (mysqli_query($conn, $update)) {
//         $alert = "edit_sukses";
//     } else {
//         $alert = "edit_gagal";
//     }
// }
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-gradient-to-t from-[#B1B1B1] to-white h-screen flex justify-center items-center">
    <div class="w-full max-w-md bg-white p-6 rounded shadow-md">
        <h2 class="text-2xl font-bold mb-4 text-center">Edit Admin</h2>
        <form method="POST" class="space-y-4">
            <div>
                <label class="block mb-1">Username</label>
                <input type="text" name="username" value="<?= $user['username'] ?>" class="w-full p-2 border rounded" required>
            </div>
            <div>
                <label class="block mb-1">Password Baru (opsional)</label>
                <input type="password" name="password" class="w-full p-2 border rounded" placeholder="Kosongkan jika tidak diganti">
            </div>
            <div class="text-center">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Simpan</button>
                <a href="?page=tabel_users" class="ml-3 text-gray-700">Batal</a>
            </div>
        </form>
    </div>

<?php 
// if ($alert === "edit_sukses"): 
?>
<script>
    // Swal.fire({
    //     icon: 'success',
    //     title: 'Berhasil!',
    //     text: 'Data admin berhasil diperbarui.',
    //     confirmButtonText: 'OK'
    // }).then(() => {
    //     window.location.href = '?page=tabel_users.php';
    // });
</script>
<?php 
// elseif ($alert === "edit_gagal"): 
?>
<script>
    // Swal.fire({
    //     icon: 'error',
    //     title: 'Gagal!',
    //     text: 'Terjadi kesalahan saat memperbarui data.',
    //     confirmButtonText: 'OK'
    // });
</script>
<?php 
// endif; 
?>
</body>
</html>
