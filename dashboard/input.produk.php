<div class="shadow-lg rounded-lg bg-white p-3 w-[83%] h-auto ml-64 mt-16">
  <h2 class="text-center text-xl font-bold mb-4 bg-[#001F3F] text-white p-3 rounded-md">Input Produk</h2>

  <form action="proses_produk.php" method="post" enctype="multipart/form-data" class="space-y-4">
    
    <div>
      <label class="block font-medium">Nama Produk:</label>
      <input type="text" name="nama" placeholder="Nama Produk" required class="w-full p-2 border rounded-md">
    </div>

    <div>
      <label class="block font-medium">Deskripsi:</label>
      <textarea name="deskripsi" placeholder="Deskripsi Produk" required class="w-full p-2 border rounded-md"></textarea>
    </div>

    <div>
      <label class="block font-medium">Harga:</label>
      <input type="number" name="harga" placeholder="Harga" required class="w-full p-2 border rounded-md">
    </div>

    <div>
      <label class="block font-medium">Tipe:</label>
      <select name="tipe" required class="w-full p-2 border rounded-md">
        <option value="">Pilih Tipe</option>
        <option value="PHP">PHP</option>
        <option value="Next.js">Next.js</option>
        <option value="PHP,Next.js">PHP & Next.js</option>
      </select>
    </div>

    <div>
      <label class="block font-medium">Gambar Produk:</label>
      <input type="file" name="gambar" required class="w-full p-2 border rounded-md">
    </div>

    <div class="flex justify-between">
      <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Simpan</button>
    </div>

  </form>
</div>
