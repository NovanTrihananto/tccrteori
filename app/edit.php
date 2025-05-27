<?php include 'db.php'; ?>
<?php
$id = $_GET['id'];
$data = $konek->query("SELECT * FROM notes WHERE id=$id")->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Catatan</title>
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
            background: #007bff;
            color: white;
            padding: 8px 16px;
            border: none;
            border-radius: 5px;
        }
        button:hover {
            background: #0069d9;
        }
        a {
            display: inline-block;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <h1>Edit Catatan</h1>
    <form method="POST">
        Judul:<br>
        <input type="text" name="judul" value="<?= $data['judul'] ?>" required><br>
        Catatan:<br>
        <textarea name="catatan" rows="6" required><?= $data['catatan'] ?></textarea><br>
        <button type="submit" name="update">Update</button>
    </form>
    <a href="index.php">← Kembali</a>

    <?php
    if (isset($_POST['update'])) {
        $judul = $_POST['judul'];
        $catatan = $_POST['catatan'];
        $konek->query("UPDATE notes SET judul='$judul', catatan='$catatan' WHERE id=$id");
        header("Location: index.php");
    }
    ?>
</body>
</html>
