<?php
include "../inc/koneksi.php";

// Ambil semua pesanan + join user dan produk
$query = "
SELECT 
    orders.*, 
    users.username AS user_name, 
    users.no_tlp, 
    produks.nama_produk AS nama_jasa 
FROM orders
JOIN users ON orders.user_id = users.id
JOIN produks ON orders.product_id = produks.id
ORDER BY orders.id DESC
";

$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Daftar Pesanan Masuk</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="">

  <div class="shadow-lg rounded-lg bg-white p-3 w-[83%] h-auto ml-64 mt-16">
    <h2 class="text-2xl font-bold mb-4 text-center bg-[#001F3F] text-white py-3 rounded">Daftar Pesanan Masuk</h2>

    <div class="overflow-x-auto">
      <table class="table-auto w-full border border-gray-300 text-sm">
        <thead class="bg-gray-100">
          <tr>
            <th class="border px-4 py-2">Nama</th>
            <th class="border px-4 py-2">No. Telepon</th>
            <th class="border px-4 py-2">Jasa</th>
            <th class="border px-4 py-2">Deskripsi</th>
            <th class="border px-4 py-2">Deadline</th>
            <th class="border px-4 py-2">Status</th>
            <th class="border px-4 py-2 text-center">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($row = mysqli_fetch_assoc($result)): ?>
          <tr class="hover:bg-gray-50">
            <td class="border px-4 py-2"><?= htmlspecialchars($row['user_name']) ?></td>
            <td class="border px-4 py-2"><?= htmlspecialchars($row['no_tlp']) ?></td>
            <td class="border px-4 py-2"><?= htmlspecialchars($row['nama_jasa']) ?></td>
            <td class="border px-4 py-2"><?= nl2br(htmlspecialchars($row['deskripsi_custom'])) ?></td>
            <td class="border px-4 py-2"><?= htmlspecialchars($row['deadline']) ?></td>
            <td class="border px-4 py-2">
              <span class="px-2 py-1 rounded text-white text-xs font-semibold 
                <?= $row['status'] === 'baru' ? 'bg-yellow-500' : 'bg-green-600' ?>">
                <?= ucfirst($row['status']) ?>
              </span>
            </td>
            <td class="border px-4 py-2 text-center">
              <?php if ($row['status'] === 'baru'): ?>
                <form method="POST" action="konfirmasi.php" class="inline-block">
                  <input type="hidden" name="id" value="<?= $row['id'] ?>">
                  <button type="submit"
                    class="bg-blue-500 text-white px-3 py-1 rounded-md hover:bg-blue-600 text-sm">
                    Konfirmasi
                  </button>
                </form>
              <?php else: ?>
                <span class="text-green-600 font-bold text-lg">✔️</span>
              <?php endif; ?>
            </td>
          </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>
  </div>

</body>
</html>
