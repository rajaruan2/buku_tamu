<?php
include 'koneksi.php';  // Menyertakan koneksi database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $isi = $_POST['isi'];

    // Validasi form
    if (empty($nama) || empty($email) || empty($isi)) {
        echo "<p style='color: red;'>Semua kolom harus diisi!</p>";
    } else {
        $sql = "INSERT INTO buku_tamu (NAMA, EMAIL, ISI) VALUES ('$nama', '$email', '$isi')";

        if ($conn->query($sql) === TRUE) {
            echo "<p>Data berhasil disimpan! <a href='index.php'>Kembali ke beranda</a></p>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isi Buku Tamu</title>
</head>
<body>
    <h1>Form Buku Tamu</h1>
    <form method="POST" action="">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="isi">Isi:</label><br>
        <textarea id="isi" name="isi" required></textarea><br><br>

        <button type="submit">Kirim</button>
    </form>
</body>
</html>
