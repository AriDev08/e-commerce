<?php
// include '../inc/koneksi.php';
// $alert = '';
// if (isset($_GET['hapus'])) {
//     $id = $_GET['hapus'];
//     if (mysqli_query($conn, "DELETE FROM users WHERE id='$id' AND role='admin'")) {
//         $alert = "hapus_sukses";
//     } else {
//         $alert = "hapus_gagal";
//     }
// }
// $query = "SELECT * FROM users WHERE role = 'admin'";
// $result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Data Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="bg-gradient-to-t from-[#B1B1B1] to-white min-h-screen p-8">
    <div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6 mt-20">
        <h2 class="text-3xl font-bold text-center mb-6">Data Admin</h2>
        <div class="overflow-x-auto mt-6">
            <table class="min-w-full border border-gray-300">
                <thead>
                    <tr class="bg-gray-800 text-white">
                        <th class="py-2 px-4 border">No</th>
                        <th class="py-2 px-4 border">Username</th>
                        <th class="py-2 px-4 border">Password (Hash)</th>
                        <th class="py-2 px-4 border">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // $no = 1;
                    // while ($row = mysqli_fetch_assoc($result)) {
                    //     echo "<tr class='text-center hover:bg-gray-100'>";
                    //     echo "<td class='py-2 px-4 border'>{$no}</td>";
                    //     echo "<td class='py-2 px-4 border'>{$row['username']}</td>";
                    //     echo "<td class='py-2 px-4 border text-xs break-all'>{$row['password']}</td>";
                    //     echo "<td class='py-2 px-4 border space-x-2'>
                    //        <a href='?page=edit_users&id={$row['id']}' class='bg-yellow-400 text-white px-3 py-1 rounded'>Edit</a>
                    //         <a href='?hapus={$row['id']}' onclick='return confirm(\"Yakin hapus?\")' class='bg-red-500 text-white px-3 py-1 rounded'>Hapus</a>
                    //     </td>";
                    //     echo "</tr>";
                    //     $no++;
                    // }

                    // if ($no === 1) {
                    //     echo "<tr><td colspan='4' class='text-center py-4 text-gray-500'>Tidak ada data.</td></tr>";
                    // }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <?php
    // if ($alert === "hapus_sukses"): 
    ?>
    <script>
        // Swal.fire({
        //     icon: 'success',
        //     title: 'Sukses!',
        //     text: 'Data admin berhasil dihapus',
        //     confirmButtonText: 'OK'
        // }).then(() => {
        //     window.location.href = '?page=tabel_users.php';
        // });
    </script>
    <?php
    // elseif ($alert === "hapus_gagal"): 
    ?>
    <script>
        // Swal.fire({
        //     icon: 'error',
        //     title: 'Gagal!',
        //     text: 'Data admin gagal dihapus',
        //     confirmButtonText: 'OK'
        // });
    </script>
    <?php
    // endif;
    ?>
</body>

</html>