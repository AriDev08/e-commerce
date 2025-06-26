<?php
session_start();
$id_produk = $_GET['id'] ?? null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <section>
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
    </section>
<section>
  <div class="ml-41 mt-25 p-11 w-[1100px] h-[780px] bg-[#D9D9D9] rounded-[20px]">
    <div class="w-[1011px] h-[266px] bg-white p-10 rounded-[20px]">
      <h1 class="text-[40px] font-bold">Nama Template</h1>
      <p class="text-[24px]">deskripsi template deskripsi template deskripsi template deskripsi template deskripsi template deskripsi template deskripsi template deskripsi template deskripsi template</p>
    </div>

    <div class="flex">
      <form action="proses_checkout.php" method="POST" enctype="multipart/form-data">
    

        <div class="flex">
          <!-- Custom order -->
          <div class="mt-8 w-[680px] h-[288px] bg-white rounded-[20px]">
            <div class="w-full h-8 bg-[#B1B1B1] rounded-t-[12px] pt-1">
              <label class="ml-2 font-bold">Place your custom order</label>
            </div>
            <textarea class="w-full h-[250px]" name="deskripsi" id="deskripsi" placeholder="Enter your custom order.."></textarea>
          </div>

          <!-- Deadline -->
          <div class="ml-2 mt-8 w-[327px] h-[288px] bg-white rounded-[20px] flex flex-col justify-between">
            <div>
              <div class="w-full h-8 bg-[#B1B1B1] rounded-t-[12px] pt-1">
                <label class="ml-2 font-bold">Enter your deadline</label>
              </div>
              <h1 class="ml-3 mt-3 p-2 text-[#757575]">Kapan projek harus selesai?</h1>
              <input class="ml-6 w-70 border border-[#D9D9D9]" type="date" name="deadline" required>
              <div class="flex items-center ml-6 mt-4">
                <input type="checkbox" name="deadline_check" class="mr-2">
                <label class="text-[#757575]">Deadline saya fleksibel</label>
              </div>
            </div>

            <!-- Tombol di dalam kotak -->
            <button type="submit" class="m-2 bg-gray-900/20 hover:bg-gray-900/50 text-black font-semibold py-3 px-6 rounded-xl transition mt-4">
              <h1 class="underline">Checkout</h1>
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>
</body>
</html>