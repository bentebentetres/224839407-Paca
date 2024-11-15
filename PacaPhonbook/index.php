<?php
include 'db.php'; // Include the database connection file

// Fetch all contacts from the database
$sql = "SELECT * FROM contacts";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Phonebook</title>
    <style>
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 8px; border: 1px solid #ddd; text-align: left; }
        th { background-color: #f2f2f2; }
        a { text-decoration: none; color: blue; }
        .btn { padding: 8px 12px; margin-top: 10px; display: inline-block; background-color: #4CAF50; color: white; border-radius: 4px; }
    </style>
</head>
<body>

<h1>Phonebook</h1>

<a href="create.php" class="btn">Add New Contact</a>
<br><br>

<?php if ($result->num_rows > 0): ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["phone"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td>
                    <a href="update.php?id=<?php echo $row["id"]; ?>">Edit</a> | 
                    <a href="delete.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('Are you sure you want to delete this contact?');">Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
<?php else: ?>
    <p>No contacts found. <a href="create.php">Add a new contact</a>.</p>
<?php endif; ?>

</body>
</html>

<?php
$conn->close(); // Close the database connection
?>
