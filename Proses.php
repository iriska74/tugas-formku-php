<?php
// Cek apakah form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama  = htmlspecialchars($_POST["nama"]);
    $email = htmlspecialchars($_POST["email"]);
    $pesan = htmlspecialchars($_POST["pesan"]);

    // Tampilkan hasil
    echo "<h2>Data yang dikirim:</h2>";
    echo "Nama: " . $nama . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Pesan: <br>" . nl2br($pesan);
} else {
    echo "Form belum dikirim.";
}
?>
