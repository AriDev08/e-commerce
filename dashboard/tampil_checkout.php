<?php
session_start();
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
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-6">

<h2 class="text-2xl font-bold mb-6">Daftar Pesanan Masuk</h2>

<table class="w-full bg-white shadow rounded">
  <thead>
    <tr class="bg-gray-200">
      <th class="p-3 text-left">Nama</th>
      <th class="p-3 text-left">No. Telepon</th>
      <th class="p-3 text-left">Jasa</th>
      <th class="p-3 text-left">Deskripsi</th>
      <th class="p-3 text-left">Deadline</th>
      <th class="p-3 text-left">Status</th>
      <th class="p-3 text-left">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($row = mysqli_fetch_assoc($result)): ?>
    <tr class="border-b">
      <td class="p-3"><?= htmlspecialchars($row['user_name']) ?></td>
      <td class="p-3"><?= htmlspecialchars($row['no_tlp']) ?></td>
      <td class="p-3"><?= htmlspecialchars($row['nama_jasa']) ?></td>
      <td class="p-3"><?= nl2br(htmlspecialchars($row['deskripsi_custom'])) ?></td>
      <td class="p-3"><?= htmlspecialchars($row['deadline']) ?></td>
      <td class="p-3">
        <span class="px-2 py-1 rounded text-white 
          <?= $row['status'] === 'baru' ? 'bg-yellow-500' : 'bg-green-600' ?>">
          <?= ucfirst($row['status']) ?>
        </span>
      </td>
      <td class="p-3">
        <?php if ($row['status'] === 'baru'): ?>
          <form method="POST" action="konfirmasi.php">
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <button class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded" type="submit">
              Konfirmasi
            </button>
          </form>
        <?php else: ?>
          ✔️
        <?php endif; ?>
      </td>
    </tr>
    <?php endwhile; ?>
  </tbody>
</table>

</body>
</html>
