<?php
include 'db.php';

$id = $_GET['id'];

$query = "DELETE FROM teachers WHERE id=$id";
mysqli_query($connection, $query);

header("Location: index.php");
exit;
?>
