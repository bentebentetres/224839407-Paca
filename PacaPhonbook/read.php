<?php
include 'db.php';

$sql = "SELECT * FROM contacts";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Phone</th><th>Email</th><th>Actions</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["name"] . "</td>
                <td>" . $row["phone"] . "</td>
                <td>" . $row["email"] . "</td>
                <td>
                    <a href='update.php?id=" . $row["id"] . "'>Edit</a> |
                    <a href='delete.php?id=" . $row["id"] . "' onclick='return confirm(\"Are you sure?\");'>Delete</a>
                </td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No contacts found";
}
?>
