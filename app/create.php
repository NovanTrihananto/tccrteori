<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Catatan</title>
    <style>
        body {
            font-family: Arial;
            padding: 20px;
            background-color: #eef;
        }
        h1 {
            color: #444;
        }
        form {
            background: #fff;
            padding: 20px;
            max-width: 500px;
            border-radius: 8px;
            box-shadow: 0 0 5px #ccc;
        }
        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        button {
            background: #28a745;
            color: white;
            padding: 8px 16px;
            border: none;
            border-radius: 5px;
        }
        button:hover {
            background: #218838;
        }
        a {
            display: inline-block;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <h1>Tambah Catatan Baru</h1>
    <form method="POST">
        Judul:<br>
        <input type="text" name="judul" required><br>
        Catatan:<br>
        <textarea name="catatan" rows="6" required></textarea><br>
        <button type="submit" name="simpan">Simpan</button>
    </form>
    <a href="index.php">← Kembali</a>

    <?php
    if (isset($_POST['simpan'])) {
        $judul = $_POST['judul'];
        $catatan = $_POST['catatan'];
        $konek->query("INSERT INTO notes (judul, catatan) VALUES ('$judul', '$catatan')");
        header("Location: index.php");
    }
    ?>
</body>
</html>
