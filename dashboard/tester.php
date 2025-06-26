<?php
$conn = mysqli_connect("localhost", "root", "", "ecommerce");

// Ambil filter dari query string
$tipe_filters = isset($_GET['tipe']) ? $_GET['tipe'] : [];

// Siapkan WHERE
$where = '';
if (!empty($tipe_filters)) {
  $escaped = array_map(function($t) use ($conn) {
    return mysqli_real_escape_string($conn, $t);
  }, $tipe_filters);

  $like = array_map(fn($t) => "tipe LIKE '%$t%'", $escaped);
  $where = "WHERE " . implode(" OR ", $like);
}

$result = mysqli_query($conn, "SELECT * FROM produks $where");

// Semua tipe yang tersedia
$daftar_tipe = ['PHP', 'Next.js', 'Laravel', 'React'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Filter Multi Tipe</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<div class="max-w-7xl mx-auto px-6 py-8">

  <h1 class="text-3xl font-bold text-blue-900 mb-6 text-center"></h1>

  <!-- Filter Card Button -->
  <div class="gap-5 flex flex-wrap justify-center items-center mb-10 text-[20px] font-semibold">
    <?php foreach ($daftar_tipe as $tipe): ?>
      <?php
        // Cek apakah tipe ini sedang dipilih
        $isSelected = in_array($tipe, $tipe_filters);
        $class = $isSelected ? 'bg-[#757575] text-white' : 'bg-[#D4D4D4] text-black';

        // Bangun link baru (dengan toggle)
        $newFilters = $tipe_filters;

        if ($isSelected) {
          // Hilangkan filter ini
          $newFilters = array_filter($newFilters, fn($f) => $f !== $tipe);
        } else {
          // Tambahkan filter ini
          $newFilters[] = $tipe;
        }

        // Buat URL
        $query = http_build_query(['tipe' => $newFilters]);
        $link = '?' . $query;
      ?>
      <a href="<?= $link ?>">
        <div class="w-[180px] h-[70px] rounded-xl p-4 flex justify-center items-center transition duration-200 hover:scale-105 <?= $class ?>">
          <?= $tipe ?>
        </div>
      </a>
    <?php endforeach; ?>

    <!-- Tombol Reset -->
    <a href="index.php">
      <div class="w-[180px] h-[70px] rounded-xl p-4 bg-red-400 text-white flex justify-center items-center hover:bg-red-500 transition duration-200 hover:scale-105">
        Reset
      </div>
    </a>
  </div>

  <!-- Produk -->
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6">
    <?php while($row = mysqli_fetch_assoc($result)) { ?>
      <div class="bg-white shadow-md rounded-xl overflow-hidden hover:scale-105 transition duration-300">
        <img src="/e-commerce/dashboard/uploads/<?= $row['gambar'] ?>"
             alt="<?= $row['nama_produk'] ?>"
             class="w-full h-[180px] object-cover">

        <div class="p-4">
          <h2 class="text-lg font-bold text-gray-800"><?= $row['nama_produk'] ?></h2>
          <p class="text-sm text-gray-600 truncate"><?= $row['deskripsi'] ?></p>
          <p class="text-xs mt-1 text-blue-500 italic"><?= $row['tipe'] ?></p>
          <p class="text-black font-semibold mt-2">Rp<?= number_format($row['harga'], 0, ',', '.') ?></p>
        </div>
      </div>
    <?php } ?>
  </div>

</div>
</body>
</html>
