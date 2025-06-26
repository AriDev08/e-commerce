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
        <nav class="container mx-auto">
            <ul class="flex justify-between items-center mt-3 m-8">
                <li>
                    <ul class="flex items-center gap-6">
                        <li class="text-[36px] flex items-center gap-2">
                            Shop
                            <img class="w-[34px] h-[34px] mt-2" src="arrow.png" alt="Arrow" />
                        </li>
                        <li class="text-[36px]">About</li>
                        <li class="text-[36px]">News</li>
                    </ul>
                </li>
                <li>
                    <ul class="flex items-center gap-9">
                        <li>
                            <img class="w-[41px] h-[41px]" src="shopping-chart.png" alt="Cart" />
                        </li>
                        <li>
                            <?php
                            session_start();
                            if (isset($_SESSION['username'])) {
                                $link = ($_SESSION['role'] === 'admin') ? '../dashboard/index.php' : 'profile.php';
                                echo '
                                <a href="' . $link . '" class="flex items-center gap-2">
                                    <img src="landingpage/user.png" alt="User" class="w-8 h-8 rounded-full">
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
            <a href="checkhout.php">
                <div
                    class="bg-gray-900/30 rounded-lg w-[160px] h-[57px] flex justify-center items-center -ml-46 mt-80 hover:bg-gray-900/20 duration-700">
                    <h1 class="text-[30px] font-bold">Customize</h1>
                </div>
            </a>
        </div>
    </section>
    <section class="w-full h-screen bg-gradient-to-t from-[#FFFFFF] to-[#B1B1B1] p-5">
        <h1 class="text-[40px] ml-30 pt-3">SUIT YOUR NEEDS</h1>
        <div class="flex gap-20 justify-center items-center pt-4">
            <a href="">
                <div
                    class="bg-[#757575] w-[350px] h-[600px] text-center pt-70 text-[40px] hover:scale-105 duration-300 hover:bg-[#757575]/50">
                    PORTOFOLIO</div>
            </a>
            <a href="">
                <div
                    class="bg-[#757575] w-[350px] h-[600px] text-center pt-70 text-[40px] hover:scale-105 duration-300 hover:bg-[#757575]/50">
                    COMPANY PROFILE</div>
            </a>
            <a href="">
                <div
                    class="bg-[#757575] w-[350px] h-[600px] text-center pt-70 text-[40px] hover:scale-105 duration-300 hover:bg-[#757575]/50">
                    COMMERCIAL</div>
            </a>
        </div>
    </section>
    <section class="w-full h-screen pt-10">
        <h1 class="text-[40px] ml-10">Our Expertise,</h1>
        <div class="gap-20 flex mt-5 ml-2 text-[40px] justify-center items-center">
            <a href="">
                <div class="bg-[#D4D4D4] w-[305px] h-[100px] rounded-xl p-5 pl-25">Next.js</div>
            </a>
            <a href="">
                <div class="bg-[#D4D4D4] w-[305px] h-[110px] rounded-xl p-5 pl-25">Next.js</div>
            </a>
            <a href="">
                <div class="bg-[#D4D4D4] w-[305px] h-[100px] rounded-xl p-5 pl-25">Next.js</div>
            </a>
            <a href="">
                <div class="bg-[#D4D4D4] w-[305px] h-[100px] rounded-xl p-5 pl-25">Next.js</div>
            </a>
        </div>
        <h1 class="text-[40px] ml-10 mt-5">Your <span class="font-bold">Choice</span></h1>
        <div class="flex gap-20 ml-10">
            <a href="shopping.php">
                <div class="w-[305px] h-[281px]">
                    <img class="w-[305px] h-[180px] rounded-xl" src="kucing.jpg" alt="">
                    <h1 class="text-black text-[24px] font-bold">Nama Template</h1>
                    <p class="text-black text-[20px]">deskripsi template deskripsi templatedeskripsi template</p>
                    <p>RP.xxx,xxx</p>
                </div>
            </a>
            <a href="shopping.php">
                <div class="w-[305px] h-[281px]">
                    <img class="w-[305px] h-[180px] rounded-xl" src="kucing.jpg" alt="">
                    <h1 class="text-black text-[24px] font-bold">Nama Template</h1>
                    <p class="text-black text-[20px]">deskripsi template deskripsi templatedeskripsi template</p>
                    <p>RP.xxx,xxx</p>
                </div>
            </a>
            <a href="">
                <div class="w-[305px] h-[281px]">
                    <img class="w-[305px] h-[180px] rounded-xl" src="kucing.jpg" alt="">
                    <h1 class="text-black text-[24px] font-bold">Nama Template</h1>
                    <p class="text-black text-[20px]">deskripsi template deskripsi templatedeskripsi template</p>
                    <p>RP.xxx,xxx</p>
                </div>
            </a>
            <a href="">
                <div class="w-[305px] h-[281px]">
                    <img class="w-[305px] h-[180px] rounded-xl" src="kucing.jpg" alt="">
                    <h1 class="text-black text-[24px] font-bold">Nama Template</h1>
                    <p class="text-black text-[20px]">deskripsi template deskripsi templatedeskripsi template</p>
                    <p>RP.xxx,xxx</p>
                </div>
            </a>
        </div>
        <div class="flex gap-20 mt-10 ml-10">
            <a href="">
                <div class="w-[305px] h-[281px]">
                    <img class="w-[305px] h-[180px] rounded-xl" src="kucing.jpg" alt="">
                    <h1 class="text-black text-[24px] font-bold">Nama Template</h1>
                    <p class="text-black text-[20px]">deskripsi template deskripsi templatedeskripsi template</p>
                    <p>RP.xxx,xxx</p>
                </div>
            </a>
            <a href="">
                <div class="w-[305px] h-[281px]">
                    <img class="w-[305px] h-[180px] rounded-xl" src="kucing.jpg" alt="">
                    <h1 class="text-black text-[24px] font-bold">Nama Template</h1>
                    <p class="text-black text-[20px]">deskripsi template deskripsi templatedeskripsi template</p>
                    <p>RP.xxx,xxx</p>
                </div>
            </a>
            <a href="">
                <div class="w-[305px] h-[281px]">
                    <img class="w-[305px] h-[180px] rounded-xl" src="kucing.jpg" alt="">
                    <h1 class="text-black text-[24px] font-bold">Nama Template</h1>
                    <p class="text-black text-[20px]">deskripsi template deskripsi templatedeskripsi template</p>
                    <p>RP.xxx,xxx</p>
                </div>
            </a>
            <a href="">
                <div class="w-[305px] h-[281px]">
                    <img class="w-[305px] h-[180px] rounded-xl" src="kucing.jpg" alt="">
                    <h1 class="text-black text-[24px] font-bold">Nama Template</h1>
                    <p class="text-black text-[20px]">deskripsi template deskripsi templatedeskripsi template</p>
                    <p>RP.xxx,xxx</p>
                </div>
            </a>
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