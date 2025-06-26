<?php
   session_start();
//    echo "User ID: " . $_SESSION['user_id'];
$conn = mysqli_connect("localhost", "root", "", "ecommerce");


$tipe_filters = isset($_GET['tipe']) ? $_GET['tipe'] : [];


$where = '';
if (!empty($tipe_filters)) {
  $escaped = array_map(function($t) use ($conn) {
    return mysqli_real_escape_string($conn, $t);
  }, $tipe_filters);

  $like = array_map(fn($t) => "tipe LIKE '%$t%'", $escaped);
  $where = "WHERE " . implode(" OR ", $like);
}

$result = mysqli_query($conn, "SELECT * FROM produks $where");

$daftar_tipe = ['PHP', 'Next.js', 'Laravel', 'React'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <section class="w-full h-screen" style="background-position: center bottom; background-image: url('hero.png');">
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
        <div class="flex justify-center items-center -ml-24">
            <h1 class="text-[64px] flex justify-center items-center max-w-ms -ml-40 font-bold">
                Your one-stop Website <span class="mt-40 -ml-110">Maker.</span>
            </h1>
            <a href="costum.php">
                <div
                    class="bg-gray-900/30 rounded-lg w-[160px] h-[57px] flex justify-center items-center -ml-46 mt-80 hover:bg-gray-900/20 duration-700">
                    <h1 class="text-[30px] font-bold">Customize</h1>
                </div>
            </a>
        </div>
    </section>
    <section class="w-full bg-white py-20 px-6 mb-20">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center gap-16">

     
            <div class="flex-1">
                <h2 class="text-5xl font-extrabold text-gray-900 mb-6 leading-tight">Siapa Kami?</h2>
                <p class="text-gray-700 text-lg mb-4">
                    Kami adalah tim kreatif yang suka ngoding, ngedesain, dan bikin web yang bisa bikin kamu bilang,
                    “Gila, ini keren banget!”
                </p>
                <p class="text-gray-700 text-lg mb-4">
                    Dari portofolio personal, company profile, sampai toko online, kami bantu wujudkan semuanya jadi
                    website kece yang ringan, cepat, dan mobile-friendly.
                </p>
                <p class="text-gray-700 text-lg mb-4">
                    Kami bukan sekadar jasa. Kami partner digital kamu. Kami dengerin ide kamu, kasih solusi, dan bikin
                    proses pembuatan website jadi asik tanpa ribet.
                </p>
                <p class="text-gray-700 text-lg italic">
                    Website impian kamu, dibikin sama tim yang juga punya impian.
                </p>

                <div class="mt-8 flex gap-4">
                <a href="https://wa.me/6285179546032" target="_blank"
                        class="bg-black text-white px-6 py-3 rounded-xl text-lg font-semibold hover:bg-gray-800 transition">
                        Hubungi Kami
                    </a>
                    <a href="https://dadteam.vercel.app/" target="_blank" class="text-black font-medium hover:underline text-lg mt-3">
                        Lihat Portofolio
                    </a>
                </div>
            </div>

        
            <div class="flex-1">
                <img src="logotim.png" alt="Ilustrasi Tim" class="w-full max-w-md mx-auto">
            </div>

        </div>
    </section>
    <section class="w-full h-screen pt-10">
        <h1 class="text-[40px] ml-10">Our Expertise,</h1>
        <div id="filter-container" class="gap-5 flex flex-wrap justify-center items-center mb-10 text-[20px] font-semibold">
  <?php foreach ($daftar_tipe as $tipe): ?>
    <?php
      $isSelected = in_array($tipe, $tipe_filters);
      $class = $isSelected ? 'bg-[#757575] text-white' : 'bg-[#D4D4D4] text-black';

      $newFilters = $tipe_filters;
      if ($isSelected) {
        $newFilters = array_filter($newFilters, fn($f) => $f !== $tipe);
      } else {
        $newFilters[] = $tipe;
      }

      $query = http_build_query(['tipe' => $newFilters]);
      $link = '?' . $query;
    ?>
    <button 
      class="filter-btn w-[180px] h-[70px] rounded-xl p-4 flex justify-center items-center transition duration-200 hover:scale-105 <?= $class ?>"
      data-link="<?= $link ?>"
    >
      <?= $tipe ?>
    </button>
  <?php endforeach; ?>

  <button id="reset-btn" class="w-[180px] h-[70px] rounded-xl p-4 bg-red-400 text-white flex justify-center items-center hover:bg-red-500 transition duration-200 hover:scale-105">
    Reset
  </button>
</div>

  </div>
        <h1 class="text-[40px] ml-10 mt-5">Your <span class="font-bold">Choice</span></h1>
        <div class="h-[500px] overflow-y-auto">
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6">
    <?php while($row = mysqli_fetch_assoc($result)) { ?>
      <a href="shopping.php?id=<?= $row['id'] ?>">
        <div class="bg-white shadow-md rounded-xl overflow-hidden hover:scale-105 transition duration-300">
          <img src="/e-commerce/landingpage/uploads/<?= $row['gambar'] ?>"
               alt="<?= $row['nama_produk'] ?>"
               class="w-full h-[180px] object-cover">

          <div class="p-4">
            <h2 class="text-lg font-bold text-gray-800"><?= $row['nama_produk'] ?></h2>
            <p class="text-sm text-gray-600 truncate"><?= $row['deskripsi'] ?></p>
            <p class="text-xs mt-1 text-blue-500 italic"><?= $row['tipe'] ?></p>
            <p class="text-black font-semibold mt-2">Rp<?= number_format($row['harga'], 0, ',', '.') ?></p>
          </div>
        </div>
      </a>
    <?php } ?>
  </div>
</div>


    </section>

    <section class="w-full h-screen bg-gradient-to-b from-[#B1B1B1] to-[#757575]  mt-50">
        <div class="flex pl-15 pt-30">
            <img class="w-[290px] h-[295px]" src="logotim.png" alt="">
            <div class="bg-black h-80 w-[3px] ml-30"></div>
            <div class="flex-col text-[40px] pl-20 pt-10">
                <h1 class="font-bold">Nama Template</h1>
                <p class="max-w-[500px]">deskripsi template deskripsi templatedeskripsi template</p>
            </div>
        </div>
        <div class="mt-10">
            <div class="pl-15 pr-15 mt-10 space-y-6">
                <!-- Baris 1 -->
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-4">
                        <div class="bg-black w-[63px] h-[63px] rounded-xl"></div>
                        <h1 class="font-bold text-[32px]">Nama Template</h1>
                    </div>
                    <h1 class="font-bold text-[32px]">Nama Template</h1>
                </div>

                <!-- Baris 2 -->
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-4">
                        <div class="bg-black w-[63px] h-[63px] rounded-xl"></div>
                        <h1 class="text-[32px]">Deskripsi Template</h1>
                    </div>
                    <h1 class="text-[32px]">Deskripsi Template</h1>
                </div>

                <!-- Baris 3 -->
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-4">
                        <div class="bg-black w-[63px] h-[63px] rounded-xl"></div>
                        <h1 class="text-[32px]">Template</h1>
                    </div>
                    <h1 class="text-[32px]">Template</h1>
                </div>
            </div>


    </section>
</body>
</html>
<script>
  document.querySelectorAll('.filter-btn').forEach(btn => {
    btn.addEventListener('click', function (e) {
      e.preventDefault();
      const url = this.dataset.link;
  
      history.pushState(null, '', url);

 
      location.reload(); 
    });
  });

  document.getElementById('reset-btn').addEventListener('click', function(e) {
    e.preventDefault();
    history.pushState(null, '', 'index.php');
    location.reload(); 
  });
</script>
