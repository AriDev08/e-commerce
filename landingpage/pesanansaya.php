<?php
session_start();
include "koneksi.php";


if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$id_user = $_SESSION['user_id'];


$query = "
SELECT orders.*, produks.nama_produk AS nama_jasa, produks.gambar 
FROM orders
JOIN produks ON orders.product_id = produks.id
WHERE orders.user_id = $id_user
ORDER BY orders.id DESC";

$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Pesanan Saya</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen p-8">

  <div class="max-w-6xl mx-auto">
    <h2 class="text-3xl font-bold text-blue-900 mb-6 text-center">Pesanan Saya</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition duration-300">
          
        
          <img src="uploads/<?= htmlspecialchars($row['gambar']) ?>" alt="<?= htmlspecialchars($row['nama_jasa']) ?>" class="w-full h-[180px] object-cover">

         
          <div class="p-5 space-y-2">
            <h3 class="text-xl font-bold text-gray-800"><?= htmlspecialchars($row['nama_jasa']) ?></h3>
            <p class="text-gray-600 text-sm"><?= nl2br(htmlspecialchars($row['deskripsi_custom'])) ?></p>
            <p class="text-sm text-gray-500"><span class="font-semibold">Deadline:</span> <?= htmlspecialchars($row['deadline']) ?></p>

           
            <p class="text-sm">
              <span class="px-2 py-1 rounded-full text-white text-xs 
                <?= $row['status'] === 'baru' ? 'bg-yellow-500' : ($row['status'] === 'diproses' ? 'bg-blue-500' : 'bg-green-600') ?>">
                <?= ucfirst($row['status']) ?>
              </span>
            </p>

          
            <div class="mt-3">
              <?php if ($row['status'] === 'diproses'): ?>
                <form method="POST" action="selesai.php">
                  <input type="hidden" name="id" value="<?= $row['id'] ?>">
                  <button class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded text-sm" type="submit">
                    Tandai Selesai
                  </button>
                </form>
              <?php else: ?>
                <p class="text-green-600 font-semibold">
                  <?= $row['status'] === 'selesai' ? ':heavy_check_mark: Telah Selesai' : '-' ?>
                </p>
              <?php endif; ?>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  </div>

</body>
</html>