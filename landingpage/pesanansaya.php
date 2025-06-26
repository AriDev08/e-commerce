<?php
session_start();
include "../inc/koneksi.php";


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

$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Pesanan Saya</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen p-8">
<nav class="container mx-auto px-8 mt-3">
        <ul class="flex justify-between items-center">
            <li>
                <ul class="flex items-center gap-6">
                    <!-- Group untuk Shop + Dropdown -->
                    <li class="relative group text-[36px] flex items-center gap-2">
                        Shop
                        <img class="w-[34px] h-[34px] mt-2 group-hover:rotate-180 duration-300" src="arrow.png" alt="">

                        <!-- Dropdown -->
                        <div
                            class="absolute origin-top scale-y-0 transition-transform duration-300 group-hover:scale-y-100 inset-0 ease-out left-0 top-full mt-2 w-[700px] h-[359px] bg-[#D9D9D9] z-10 rounded-lg shadow-xl">
                            <div class="flex items-start py-8 pl-8 ml-3 gap-6">

                                <!-- Kolom Kiri: Daftar Template -->
                                <div class="space-y-6">
                                    <a href="portofolio.html" class="block">
                                        <div class="flex items-center mt-[40px]">
                                            <div class="bg-black w-[44px] h-[44px] rounded-full mr-2"></div>
                                            <h1 class="text-[32px]">Portofolio</h1>
                                        </div>
                                    </a>

                                    <a href="company-profile.html" class="block">
                                        <div class="flex items-center">
                                            <div class="bg-black w-[44px] h-[44px] rounded-full mr-2"></div>
                                            <h1 class="text-[32px]">Company Profile</h1>
                                        </div>
                                    </a>

                                    <a href="commercial.html" class="block">
                                        <div class="flex items-center">
                                            <div class="bg-black w-[44px] h-[44px] rounded-full mr-2"></div>
                                            <h1 class="text-[32px]">Commercial</h1>
                                        </div>
                                    </a>
                                </div>


                                <!-- Garis hitam vertikal -->
                                <div class="bg-black w-[3px] h-80 ml-10"></div>
                                <a href="" class="block">
                                <div class="flex flex-col gap-y-6 mt-[20px] text-[40px]">
                                    <!-- Item 1 -->
                                    <div class="flex items-center gap-4">
                                        <div class="bg-black rounded-full w-[33px] h-[33px]"></div>
                                        <h1 class="text-[32px]">Next.js</h1>
                                    </div>
                                    </a>

                                    <!-- Item 2 -->
                                     <a href="" class="block">
                                    <div class="flex items-center gap-4">
                                        <div class="bg-black rounded-full w-[33px] h-[33px]"></div>
                                        <h1 class="text-[32px]">Php</h1>
                                    </div>

                                    <!-- Item 3 -->
                                     </a>
                                     <a href="" class="block">
                                    <div class="flex items-center gap-4">
                                        <div class="bg-black rounded-full w-[33px] h-[33px]"></div>
                                        <h1 class="text-[32px]">.html</h1>
                                    </div>
                                    </a>

                                    <!-- Item 4 -->
                                     <a href="" class="block">
                                    <div class="flex items-center gap-4">
                                        <div class="bg-black rounded-full w-[33px] h-[33px]"></div>
                                        <h1 class="text-[32px]">tailwind</h1>
                                    </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>

                  
                    <li class="text-[36px]">About</li>
                    <a href="index.php">
                    <li class="text-[36px]">Home</li>
                   </a>
                </ul>

            </li>
            <li>
            <ul class="flex items-center gap-9">
                        <a href="pesanansaya.php">
                        <li>
                            <img class="w-[41px] h-[41px]" src="shopping-chart.png" alt="Cart" />
                        </li>
                        <li>
                        </a>
                            <?php
                         
                            if (isset($_SESSION['username'])) {
                                $link = ($_SESSION['role'] === 'admin') ? '../dashboard/index.php' : 'profile.php';
                                echo '
                                <a href="' . $link . '" class="flex items-center gap-2">
                                    <img src="user.png" alt="User" class="w-8 h-8 rounded-full">
                                    <span class="text-white">' . htmlspecialchars($_SESSION['username']) . '</span>
                                </a>';
                            } else {
                                echo '
                                <a href="login.php">
                                    <button class="w-20 h-10 bg-gray-900/30 text-black font-bold rounded-lg hover:bg-gray-900/20 duration-700">LOGIN</button>
                                </a>';
                            }
                            ?>
                        </li>
                        <li>
                            <img class="w-[36px] h-[36px]" src="search.png" alt="Search" />
                        </li>
                    </ul>
            </li>
        </ul>
    </nav>
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
                   Selesai
                  </button>
                </form>
              <?php else: ?>
                <p class="text-green-600 font-semibold">
                  <?= $row['status'] === 'selesai' ? 'Telah Selesai' : '-' ?>
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