<?php
// Query ke database
$result = mysqli_query($conn, "SELECT * FROM users");

// Cek jika query gagal
if (!$result) {
    echo "<p style='color:red;'>Gagal mengambil data: " . mysqli_error($conn) . "</p>";
    return;
}
?>

<h2>Daftar User</h2>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Email</th>
    </tr>

    <?php if (mysqli_num_rows($result) > 0): ?>

        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $row['id']; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['email']; ?></td>
        </tr>
        <?php endwhile; ?>

    <?php else: ?>

        <tr>
            <td colspan="3" style="text-align:center;">Tidak ada data pengguna.</td>
        </tr>

    <?php endif; ?>
</table>
