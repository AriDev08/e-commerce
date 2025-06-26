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
    <nav class="container mx-auto">
            <ul class="flex justify-between items-center mt-5">
                <li>
                    <ul class="flex items-center gap-6">
                        <li class="text-[36px] flex items-center gap-2">
                            Shop <img class="w-[34px] h-[34px] mt-2" src="arrow.png" alt="">
                        </li>
                        <li class="text-[36px]">About</li>
                        <li class="text-[36px]">News</li>
                    </ul>
                </li>

                <li>
                    <ul class="flex items-center gap-9">
                        <li><img class="w-[41px] h-[41px]" src="shopping-chart.png" alt=""></li>
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
                                <img class="w-[41px] h-[41px] cursor-pointer" src="user.png" alt="User">
                            </a>
                        </li>
                        <li><img class="w-[41px] h-[41px]" src="search.png" alt=""></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <section>
       <div class="flex">
            <div class="ml-35 m-20 w-[520px] h-[550px] bg-[#D9D9D9] rounded-[20px]"></div>
            <div class="mt-20">
            <h1 class="text-[40px] font-bold">Nama Template</h1>
            <p class="text-[24px]">deskripsi template deskripsi template</p>
            <h2 class="pt-4 text-[24px]">- Rp1.000.000,00</h2>
            <a href="checkout.php?id=<?= $id_produk ?>">
            <button class="mt-86 bg-gray-900/20 hover:bg-gray-900/50 text-white font-semibold py-4 px-8 rounded-xl transition w-full">
                <h1 class="text-black bold underline">Checkout</h1>
            </button>
            </a>
            </div>
        </div>
        </section>
        <section class="mb-20">
            <div class="flex gap-15">
                <div class="group">
                    <div class="ml-30 mt-20 w-[305px] h-[180px] rounded-[18px] bg-[#D9D9D9]"></div>
                </div>
                <div class="group">
                    <div class="mt-20 w-[305px] h-[180px] rounded-[18px] bg-[#D9D9D9]"></div>
                </div>
                <div class="group">
                    <div class="mt-20 w-[305px] h-[180px] rounded-[18px] bg-[#D9D9D9]"></div>
                </div>
            </div>
            <div class="flex gap-15">
                <div class="group">
                    <div class="ml-30 mt-20 w-[305px] h-[180px] rounded-[18px] bg-[#D9D9D9]"></div>
                </div>
                <div class="group">
                    <div class="mt-20 w-[305px] h-[180px] rounded-[18px] bg-[#D9D9D9]"></div>
                </div>
                <div class="group">
                    <div class="mt-20 w-[305px] h-[180px] rounded-[18px] bg-[#D9D9D9]"></div>
                </div>
            </div>
        </section>
</body>
</html>