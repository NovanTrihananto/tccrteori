<?php
include 'db.php';
$id = $_GET['id'];
$konek->query("DELETE FROM notes WHERE id=$id");
header("Location: index.php");
?>
