<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Change Password</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
  <div class="flex justify-center items-center h-screen bg-gradient-to-t from-[#FFFFFF] to-[#B1B1B1]">
    <div class="w-96 p-6 shadow-xl bg-gray-900/20 rounded-xl text-white">
      <h1 class="text-3xl text-center font-semibold">Change Password</h1>
      <hr class="my-4" />
      <form action="change_password_process.php" method="POST">
        <div class="mb-4">
          <label class="block">New Password</label>
          <input type="password" name="new_password" required class="w-full px-3 py-2 text-black rounded">
        </div>
        <div class="mb-6">
          <label class="block">Confirm Password</label>
          <input type="password" name="confirm_password" required class="w-full px-3 py-2 text-black rounded">
        </div>
        <button type="submit" class="w-full bg-gray-800 hover:bg-gray-700 py-2 rounded text-white">Change</button>
      </form>
    </div>
  </div>
</body>
</html>