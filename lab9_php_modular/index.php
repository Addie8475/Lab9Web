<?php
// Load database
require_once 'config/database.php';

session_start();

// Routing: tentukan halaman sejak awal
$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';

// Daftar halaman yang tidak butuh login
$public_pages = ['auth/login'];

// Cek akses halaman (proteksi login)
if (!in_array($page, $public_pages)) {
    if (!isset($_SESSION['username'])) {
        header("Location: index.php?page=auth/login");
        exit;
    }
}

// Load template header
include 'views/header.php';

// Routing logic
if ($page === 'dashboard') {

    include 'views/dashboard.php';

} else {

    // Format: modules/{folder}/{file}.php
    $path = "modules/" . $page . ".php";

    if (file_exists($path)) {
        include $path;
    } else {
        echo "<h2>404 - Halaman tidak ditemukan</h2>";
    }
}

// Load template footer
include 'views/footer.php';
?>
