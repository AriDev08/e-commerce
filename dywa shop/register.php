<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
  <div class="flex justify-center items-center h-screen bg-gradient-to-r from-cyan-500 to-blue-500">
    <div class="w-96 p-6 shadow-xl/30 bg-gray-900/20 rounded-xl opacity-100 text-white">
    <svg class="w-full h-40" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
    <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" clip-rule="evenodd" />
    </svg>
      <h1 class="text-3xl text-center font-semibold p-2 -mb-2">Register</h1>
      <hr class="mt-2" />
      <form action="regist_proses.php" method="post">
        <div class="mt-2">
          <label for="username" class="block text-base">Username</label>
          <input type="text" name="username" id="username" required
            class="border-b w-full text-base px-2 py-1 focus:outline-none focus:ring-0 focus:border-gray-600"
            placeholder="Enter Username.." />
        </div>
        <div class="mt-3">
          <label for="password" class="block text-base">Password</label>
          <input type="password" name="password" id="password" required
            class="border-b w-full text-base px-2 py-1 focus:outline-none focus:ring-0 focus:border-gray-600 mb-6"
            placeholder="Enter Password.." />
        </div>
        <div class="">
          <label for="no_tlp" class="block text-base">Telephone Number</label>
          <input type="no_tlp" name="no_tlp" id="no_tlp" required
            class="border-b w-full text-base px-2 py-1 focus:outline-none focus:ring-0 focus:border-gray-600 mb-6"
            placeholder="Your telephone number.." />
        </div>
        <div class="flex justify-center">
         <button type="submit" name="submit"
            class="bg-gray-900/20 hover:bg-gray-900/50 text-white font-semibold py-2 px-4 rounded-xl transition w-full">
            Register
          </button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>