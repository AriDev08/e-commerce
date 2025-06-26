<form action="proses_produk.php" method="post" enctype="multipart/form-data" class="p-6 max-w-xl mx-auto bg-white rounded-lg shadow-md">
  <input type="text" name="nama" placeholder="Nama Produk" required class="w-full p-2 mb-3 border rounded">
  
  <textarea name="deskripsi" placeholder="Deskripsi Produk" required class="w-full p-2 mb-3 border rounded"></textarea>
  
  <input type="number" name="harga" placeholder="Harga" required class="w-full p-2 mb-3 border rounded">

 
  <select name="tipe" required class="w-full p-2 mb-3 border rounded">
    <option value="">Pilih Tipe</option>
    <option value="PHP">PHP</option>
    <option value="Next.js">Next.js</option>
    <option value="PHP,Next.js">PHP</option>
  </select>

  <input type="file" name="gambar" required class="w-full p-2 mb-3">

  <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Simpan</button>
</form>
