<?php
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
        <nav class="container mx-auto">
            <ul class="flex justify-between items-center mt-5">
                <li>
                    <ul class="flex items-center gap-6">
                        <li class="text-[36px] flex items-center gap-2">
                            Shop <img class="w-[34px] h-[34px] mt-2" src="arrow.jpg" alt="">
                        </li>
                        <li class="text-[36px]">About</li>
                        <li class="text-[36px]">News</li>
                    </ul>
                </li>

                <li>
                    <ul class="flex items-center gap-9">
                        <li><img class="w-[41px] h-[41px]" src="shopping-chart.jpg" alt=""></li>
                        <li>
                            <?php
    session_start(); 
    if (isset($_SESSION['username'])) {
        // Sudah login
        if ($_SESSION['role'] === 'admin') {
            $link = '../dashboard/index.php';
        } else {
            $link = 'landingpage/index.php'; 
        }
    } else {
        $link = 'login.php';
    }
    ?>
                            <a href="<?= $link ?>">
                                <img class="w-[41px] h-[41px] cursor-pointer" src="user.jpg" alt="User">
                            </a>
                        </li>
                        <li><img class="w-[41px] h-[41px]" src="search.jpg" alt=""></li>
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
      <input type="hidden" name="id_produk" value="<?= htmlspecialchars($id_produk) ?>">

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