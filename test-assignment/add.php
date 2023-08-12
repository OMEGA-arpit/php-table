<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    
    $query = "INSERT INTO teachers (name, age, phone, subject) VALUES ('$name', '$age', '$phone', '$subject')";
    mysqli_query($connection, $query);
    
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Teacher</title>
    <link rel="stylesheet" href="css/styles.css" />
</head>
<body>
    <h2>Add New Teacher</h2>
    <form method="post">
        <label>Name: <input type="text" name="name"></label><br>
        <label>Age: <input type="number" name="age"></label><br>
        <label>Phone No: <input type="text" name="phone"></label><br>
        <label>Subject: <input type="text" name="subject"></label><br>
        <input type="submit" value="Add">
    </form>
</body>
</html>
