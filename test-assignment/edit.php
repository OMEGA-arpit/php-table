<?php
include 'db.php';

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    
    $query = "UPDATE teachers SET name='$name', age='$age', phone='$phone', subject='$subject' WHERE id=$id";
    mysqli_query($connection, $query);
    
    header("Location: index.php");
    exit;
}

$query = "SELECT * FROM teachers WHERE id=$id";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Teacher</title>
    <link rel="stylesheet" href="css/styles.css" />
</head>
<body>
    <h2>Edit Teacher</h2>
    <form method="post">
        <label>Name: <input type="text" name="name" value="<?php echo $row['name']; ?>"></label><br>
        <label>Age: <input type="number" name="age" value="<?php echo $row['age']; ?>"></label><br>
        <label>Phone No: <input type="text" name="phone" value="<?php echo $row['phone']; ?>"></label><br>
        <label>Subject: <input type="text" name="subject" value="<?php echo $row['subject']; ?>"></label><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>
