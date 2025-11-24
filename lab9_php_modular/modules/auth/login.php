<?php
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = mysqli_query($conn, "SELECT * FROM auth_users WHERE username='$username' AND password='$password'");
    $data  = mysqli_fetch_assoc($query);

    if ($data) {
        // simpan session
        session_start();
        $_SESSION['username'] = $data['username'];
        $_SESSION['role']     = $data['role'];

        header("Location: index.php");
        exit;
    } else {
        $error = "Username atau password salah!";
    }
}
?>

<h2>Login</h2>

<?php if (!empty($error)) : ?>
<p style="color:red;"><?= $error ?></p>
<?php endif; ?>

<form method="POST">
    Username:<br>
    <input type="text" name="username"><br><br>

    Password:<br>
    <input type="password" name="password"><br><br>

    <button type="submit" name="login">Login</button>
</form>
