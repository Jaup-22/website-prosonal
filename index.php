<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Register</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['simpan'])) {
    $nama_lengkap = htmlspecialchars($_POST['nama_lengkap']);
    $nim = htmlspecialchars($_POST['nim']);
    $tanggal_lahir = htmlspecialchars($_POST['tanggal_lahir']);
    $jurusan = htmlspecialchars($_POST['jurusan']);
    $nomor_hp = htmlspecialchars($_POST['nomor_hp']);
    $alamat = htmlspecialchars($_POST['alamat']);

    echo "<h3>Hasil Input:</h3>";
    echo "Nama Lengkap: $nama_lengkap<br>";
    echo "NIM: $nim<br>";
    echo "Tanggal Lahir: $tanggal_lahir<br>";
    echo "Jurusan: $jurusan<br>";
    echo "Nomor HP: $nomor_hp<br>";
    echo "Alamat: $alamat<br>";
}
?>

<h2>Form Register</h2>

<form method="POST" action="">
    <label>Nama Lengkap:</label><br>
    <input type="text" name="nama_lengkap" required><br><br>

    <label>NIM:</label><br>
    <input type="text" name="nim" required><br><br>

    <label>Tanggal Lahir:</label><br>
    <input type="date" name="tanggal_lahir" required><br><br>

    <label>Jurusan:</label><br>
    <select name="jurusan" required>
        <option value="">-- Pilih Jurusan --</option>
        <option value="Teknologi Informasi">Teknologi Informasi</option>
        <option value="Agroteknologi">Agroteknologi</option>
        <option value="Sumber Daya Akuatik">Sumber Daya Akuatik</option>
        <option value="Teknik Sipil">Teknik Sipil</option>
    </select><br><br>

    <label>Nomor HP:</label><br>
    <input type="text" name="nomor_hp" required><br><br>

    <label>Alamat:</label><br>
    <textarea name="alamat" rows="4" cols="40" required></textarea><br><br>

    <input type="submit" name="simpan" value="Simpan">
</form>


</body>
</html>
