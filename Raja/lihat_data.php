<?php
include 'koneksi.php';  // Menyertakan koneksi database

// Query untuk mengambil data
$sql = "SELECT * FROM buku_tamu";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Buku Tamu</title>
</head>
<body>
    <h1>Daftar Buku Tamu</h1>
    <a href="index.php">Kembali ke Beranda</a>

    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Isi</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['ID_BT']}</td>
                        <td>{$row['NAMA']}</td>
                        <td>{$row['EMAIL']}</td>
                        <td>{$row['ISI']}</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>Belum ada data!</td></tr>";
        }
        ?>
    </table>
</body>
</html>
