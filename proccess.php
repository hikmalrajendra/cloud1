<!DOCTYPE html>
<html>
<head>
    <title>Hasil Form</title>
</head>
<body>
    <h1>Data yang Anda Masukkan</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = htmlspecialchars($_POST["nama"]);
        $email = htmlspecialchars($_POST["email"]);

        echo "<p><strong>Nama:</strong> $nama</p>";
        echo "<p><strong>Email:</strong> $email</p>";
    } else {
        echo "<p>Tidak ada data yang dikirim.</p>";
    }
    ?>
    <br>
    <a href="form.php">Kembali ke Form</a>
</body>
</html>
