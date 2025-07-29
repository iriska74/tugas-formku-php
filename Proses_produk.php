<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama      = htmlspecialchars($_POST["nama"]);
    $harga     = htmlspecialchars($_POST["harga"]);
    $deskripsi = htmlspecialchars($_POST["deskripsi"]);

    // Validasi sederhana
    if (!empty($nama) && !empty($harga) && !empty($deskripsi)) {
        // Simulasikan penyimpanan ke database (nanti bisa ditambahkan MySQL)
        echo "<h2>Produk berhasil ditambahkan:</h2>";
        echo "Nama: " . $nama . "<br>";
        echo "Harga: Rp " . number_format($harga, 0, ',', '.') . "<br>";
        echo "Deskripsi: <br>" . nl2br($deskripsi);
    } else {
        echo "Semua field wajib diisi!";
    }
} else {
    echo "Akses tidak valid.";
}
?>
