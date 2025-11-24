<div class="dashboard">
    <h1>Dashboard</h1>

    <p>Selamat datang, <strong><?= $_SESSION['username']; ?></strong> 👋</p>

    <div class="cards">

        <!-- CARD TOTAL USER -->
        <div class="card">
            <h3>Total User</h3>
            <?php 
                $result = mysqli_query($conn, "SELECT COUNT(*) AS total FROM users"); 
                $data   = mysqli_fetch_assoc($result);
            ?>
            <p><strong><?= $data['total']; ?></strong> pengguna</p>
        </div>

        <!-- CARD MENU USER -->
        <div class="card">
            <h3>Menu User</h3>
            <p><a href="index.php?page=user/list">Lihat User</a></p>
            <p><a href="index.php?page=user/add">Tambah User</a></p>
        </div>

        <!-- CARD AUTH -->
        <div class="card">
            <h3>Akun</h3>
            <p><a href="index.php?page=auth/logout">Logout</a></p>
        </div>

    </div>
</div>
