<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Produk Batik</title>
</head>
<body>
    <h2>Form Input Data Produk Batik</h2>
    <form action="proses_input_produk.php" method="POST">
        <label for="nama_produk">Nama Produk:</label><br>
        <input type="text" id="nama_produk" name="nama_produk" required><br><br>

        <label for="kategori">Kategori:</label><br>
        <select id="kategori" name="kategori" required>
            <option value="Batik Tulis">Batik Tulis</option>
            <option value="Batik Cap">Batik Cap</option>
            <option value="Batik Printing">Batik Printing</option>
        </select><br><br>

        <label for="harga">Harga (Rp):</label><br>
        <input type="number" id="harga" name="harga" required><br><br>

        <label for="deskripsi">Deskripsi:</label><br>
        <textarea id="deskripsi" name="deskripsi" rows="4" cols="50" required></textarea><br><br>

        <input type="submit" value="Kirim Data">
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $nama_produk = $_POST['nama_produk'];
    $kategori = $_POST['kategori'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];

    // Menampilkan data yang diinput
    echo "<h2>Data Produk Batik yang Dimasukkan:</h2>";
    echo "<strong>Nama Produk:</strong> " . htmlspecialchars($nama_produk) . "<br>";
    echo "<strong>Kategori:</strong> " . htmlspecialchars($kategori) . "<br>";
    echo "<strong>Harga:</strong> Rp " . number_format($harga, 0, ',', '.') . "<br>";
    echo "<strong>Deskripsi:</strong> " . nl2br(htmlspecialchars($deskripsi)) . "<br>";
}
?>