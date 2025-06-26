<?php
session_start();
include '../inc/koneksi.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
$username = $_SESSION['username'];
$query = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profil Pengguna</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="overflow-y-hidden bg-gray-100">
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

                    <!-- Menu lain -->
                    <li class="text-[36px]">About</li>
                    <li class="text-[36px]">Home</li>
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
<section class="w-full h-screen flex justify-center items-center">
    <div class="bg-white shadow-lg rounded-lg w-[80%] p-10">
        <h1 class="text-[48px] font-semibold text-center mb-10">WELCOME, <?= htmlspecialchars($data['username']) ?></h1>
        
        <div class="flex text-[24px] justify-between">
            <div class="flex-1 space-y-4">
                <p><span class="font-bold">Username:</span> <?= htmlspecialchars($data['username']) ?></p>
                <p><span class="font-bold">Password:</span> <?= htmlspecialchars($data['password']) ?></p>
                <p><span class="font-bold">Nomor Telepon:</span> <?= htmlspecialchars($data['no_tlp']) ?></p>
            </div>
        </div>
        <a href="ubah_password.php">
            <div class="bg-gray-500 w-60 h-18 rounded-lg mx-auto mt-10 text-center py-3">
                <h1 class="font-semibold text-xl text-white">Change Password</h1>
            </div>
        </a>
    </div>
</section>
</body>
</html>
