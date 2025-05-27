<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Catatan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: #f4f4f4;
        }
        h1 {
            color: #333;
        }
        a {
            text-decoration: none;
            color: #fff;
            background: #28a745;
            padding: 6px 12px;
            border-radius: 5px;
        }
        a:hover {
            background: #218838;
        }
        table {
            width: 100%;
            background: #fff;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        .action a {
            margin-right: 10px;
            background: #007bff;
        }
        .action a:last-child {
            background: #dc3545;
        }
        .action a:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <h1>Daftar Catatan</h1>
    <a href="create.php">+ Tambah Catatan</a>
    <table>
        <tr>
            <th>Judul</th>
            <th>Catatan</th>
            <th>Aksi</th>
        </tr>
        <?php
        $result = $konek->query("SELECT * FROM notes");
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>{$row['judul']}</td>
                <td>{$row['catatan']}</td>
                <td class='action'>
                    <a href='edit.php?id={$row['id']}'>Edit</a>
                    <a href='delete.php?id={$row['id']}' onclick='return confirm(\"Yakin hapus?\")'>Hapus</a>
                </td>
            </tr>";
        }
        ?>
    </table>
</body>
</html>
