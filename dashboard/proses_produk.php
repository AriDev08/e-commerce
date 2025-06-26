<?php
$conn = mysqli_connect("localhost", "root", "", "ecommerce");


$nama = $_POST['nama'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
$tipe = $_POST['tipe'];


$gambar = '';
if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] === 0) {
    $gambar = $_FILES['gambar']['name'];
    $tmp = $_FILES['gambar']['tmp_name'];
    move_uploaded_file($tmp, 'uploads/' . $gambar);
}


$query = "INSERT INTO produks (nama_produk, deskripsi, harga, tipe, gambar)
          VALUES ('$nama', '$deskripsi', '$harga', '$tipe', '$gambar')";
mysqli_query($conn, $query);

header("Location: index.php");
?>
