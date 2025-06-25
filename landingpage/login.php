<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-linear-to-r from-cyan-500 to-blue-500">
    <section class="flex justify-center items-center w-full h-screen">
        <form action="proses_login.php" method="POST">
            <div class="w-100 p-6 bg-gray-900/20 shadow-xl/30 rounded-md text-white">
                <svg class="w-full h-40 flex justify-center items center" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path fill-rule="evenodd"
                        d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"
                        clip-rule="evenodd" />
                </svg>

                <h1 class="text-3xl mb-2 flex justify-center items-center font-bold">Login</h1>
                <hr class="mb-4">
                <div class="mb-4">
                    <label for="username" class="block mb-2 text-base">Username</label>
                    <input type="text" name="username"
                        class="border-b w-full text-base focus:outline-none focus:ring-0 focus:border-gray-600"
                        placeholder="Enter Username">
                </div>
                <div class="mb-5">
                    <label for="password" class="block mb-2 text-base">Password</label>
                    <input type="password" name="password"
                        class="border-b w-full text-base focus:outline-none focus:ring-0 focus:border-gray-6"
                        placeholder="Enter Password">
                </div>
                <button type="submit" class="w-full p-1 bg-gray-900/20 hover:bg-gray-900/50 rounded-xl">
                    login
                </button>
                <div class="pt-4 pl-3">
                    <a href="register.php">dont have an account? Register</a>
                </div>
            </div>

        </form>
    </section>
</body>

</html>