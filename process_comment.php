<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="stylesheet" href="Contact.css">
</head>



<?php
// Koneksi ke database
$host = 'localhost'; // Host database (biasanya localhost)
$user = 'root';      // Username database (default XAMPP: root)
$password = '';      // Password database (default XAMPP: kosong)
$dbname = 'contact_db'; // Nama database (pastikan sudah dibuat)

// Membuat koneksi ke database
$conn = new mysqli($host, $user, $password, $dbname);

// Cek apakah koneksi berhasil
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Proses data jika form dikirim
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $name = $conn->real_escape_string($_POST['name']);
    $message = $conn->real_escape_string($_POST['message']);

    // Query untuk menyimpan data ke tabel 'contacts'
    $sql = "INSERT INTO comments (author, content) VALUES ('$name', '$message')";

    // Eksekusi query
    if ($conn->query($sql) === TRUE) {
        echo "<p>Pesan berhasil dikirim! Kami akan segera menghubungi Anda.</p>";
    } else {
        echo "<p>Terjadi kesalahan: " . $sql . "<br>" . $conn->error . "</p>";
    }

    // Tambahkan tombol kembali ke halaman utama
    echo '<a href="index.php" style="display: inline-block; padding: 10px 20px; background-color: #007BFF; color: white; text-decoration: none; border-radius: 5px;">Kembali ke Halaman Utama</a>';
}

// Tutup koneksi
$conn->close();
?>
