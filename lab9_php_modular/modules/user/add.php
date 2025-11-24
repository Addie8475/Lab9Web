<?php
if (isset($_POST['submit'])) {
    $nama  = $_POST['nama'];
    $email = $_POST['email'];
    
    mysqli_query($conn, "INSERT INTO users (nama,email) VALUES ('$nama','$email')");
    header("Location: index.php?page=user/list");
    exit;
}
?>

<h2>Tambah User</h2>

<form method="POST">
    Nama: <input type="text" name="nama"><br><br>
    Email: <input type="email" name="email"><br><br>
    <button type="submit" name="submit">Simpan</button>
</form>
