<?php 
include 'inc/koneksi.php';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        echo "Username atau password tidak boleh kosong!";
    } else {
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO users (username, password) VALUES ('$username', '$passwordHash')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            header("Location: register.php?success=1");
            exit;
        } else {
            echo "Terjadi kesalahan: " . mysqli_error($conn);
        }
    }
}
?>
