<!DOCTYPE html>
<html>
<head>
    <title>Form Input</title>
</head>
<body>
    <h1>Form Input Data</h1>
    <form action="process.php" method="POST">
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <button type="submit">Kirim</button>
    </form>
    <br>
    <a href="index.php">Kembali ke Halaman Utama</a>
</body>
</html>
