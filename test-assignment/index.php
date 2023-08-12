<!DOCTYPE html>
<html>
<head>
    <title>Teachers List</title>
    <link rel="stylesheet" href="css/styles.css" />
</head>
<body>
    <h1>Class Teacher Records</h1>
    
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Phone No</th>
            <th>Subject</th>
            <th id="action">Action</th>
        </tr>
        <?php
            include 'db.php';
            
            $query = "SELECT * FROM teachers";
            $result = mysqli_query($connection, $query);
            
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>{$row['name']}</td>";
                echo "<td>{$row['age']}</td>";
                echo "<td>{$row['phone']}</td>";
                echo "<td>{$row['subject']}</td>";
                echo "<td class='action-btn'><a class='btn-edit' href='edit.php?id={$row['id']}'>Edit</a>  <a class='btn-delete' href='delete.php?id={$row['id']}'>Delete</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
    <a class="btn-add" href="add.php">Add New Student</a>
    
</body>
</html>
