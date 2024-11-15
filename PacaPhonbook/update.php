<?php
include 'db.php';

$id = $_GET['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $sql = "UPDATE contacts SET name='$name', phone='$phone', email='$email' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Contact updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Fetch existing data for display in form
$sql = "SELECT * FROM contacts WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<form method="POST" action="update.php?id=<?php echo $id; ?>">
    Name: <input type="text" name="name" value="<?php echo $row['name']; ?>" required><br>
    Phone: <input type="text" name="phone" value="<?php echo $row['phone']; ?>" required><br>
    Email: <input type="text" name="email" value="<?php echo $row['email']; ?>" required><br>
    <input type="submit" value="Update Contact">
</form>
