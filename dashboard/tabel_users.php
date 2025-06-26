<?php
include '../inc/koneksi.php';
$alert = '';

if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    if (mysqli_query($conn, "DELETE FROM users WHERE id='$id' AND role='admin'")) {
        $alert = "hapus_sukses";
    } else {
        $alert = "hapus_gagal";
    }
}

$query = "SELECT * FROM users WHERE role = 'admin'";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Data Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="">

    <div class="shadow-lg rounded-lg bg-white p-3 w-[83%] h-auto ml-64 mt-16">
        <h2 class="text-2xl font-bold mb-4 text-center bg-[#001F3F] text-white py-3 rounded">Daftar Admin</h2>

        <table class="table-auto w-full border border-gray-300 text-sm">
            <thead class="bg-gray-100">
                <tr class="text-left">
                    <th class="border px-4 py-2">No</th>
                    <th class="border px-4 py-2">Username</th>
                    <th class="border px-4 py-2">Password (Hash)</th>
                    <th class="border px-4 py-2 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr class="hover:bg-gray-50">
                        <td class="border px-4 py-2"><?= $no++ ?></td>
                        <td class="border px-4 py-2"><?= htmlspecialchars($row['username']) ?></td>
                        <td class="border px-4 py-2 text-xs break-all"><?= htmlspecialchars($row['password']) ?></td>
                        <td class="border px-4 py-2 text-center">
                            <div class="flex justify-center space-x-2">
                                <a href="?page=edit_users&id=<?= $row['id']; ?>"
                                    class="bg-blue-500 text-white px-2 py-1 text-sm rounded-md flex items-center space-x-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11 5h2m2.121 2.121l2.121 2.121m-2.121-2.121L6 18H4v-2l9.243-9.243z" />
                                    </svg>
                                    <span>Edit</span>
                                </a>
                                <a href="?hapus=<?= $row['id']; ?>"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus admin ini?')"
                                    class="bg-red-500 text-white px-2 py-1 text-sm rounded-md flex items-center space-x-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                    <span>Delete</span>
                                </a>
                            </div>
                        </td>
                    </tr>
                <?php }

                if ($no === 1) {
                    echo "<tr><td colspan='4' class='text-center py-4 text-gray-500'>Tidak ada data.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <?php if ($alert === "hapus_sukses"): ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Sukses!',
                text: 'Data admin berhasil dihapus',
                confirmButtonText: 'OK'
            }).then(() => {
                window.location.href = '?page=tabel_users.php';
            });
        </script>
    <?php elseif ($alert === "hapus_gagal"): ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: 'Data admin gagal dihapus',
                confirmButtonText: 'OK'
            });
        </script>
    <?php endif; ?>

</body>

</html>
