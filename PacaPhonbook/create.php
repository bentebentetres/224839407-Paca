<?php
include 'db.php'; // Including the database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $sql = "INSERT INTO contacts (name, phone, email) VALUES ('$name', '$phone', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "New contact created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<form method="POST" action="create.php">
    Name: <input type="text" name="name" required><br>
    Phone: <input type="text" name="phone" required><br>
    Email: <input type="text" name="email" required><br>
    <input type="submit" value="Add Contact">
</form>
