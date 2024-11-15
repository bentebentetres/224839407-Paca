<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Activities Outputs</title>
</head>
<body>

<h3>Activity 1:</h3>
<?php
$a = 2;
while ($a <= 20) {
    echo $a . " ";
    $a += 2;
}
?>
<hr>


<h3>Activity 2:</h3>
<?php
$correct_password = "password123";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $password = $_POST['password'];

    do {
        if ($password === $correct_password) {
            echo "<p>Access Granted.</p>";
            break;  
        } else {
            echo "<p>Incorrect password.</p>";
            break;  
        }
    } while (true);
}
?>

<form method="POST" action="">
    <label for="password">Please enter the password:</label><br>
    <input type="password" name="password" id="password">
    <input type="submit" value="Submit">
</form>

<hr>

<h3>Activity 3:</h3>
<?php
for ($i = 1; $i <= 10; $i++) {
    echo "7 x $i = " . (7 * $i) . "<br>";
}
?>
<hr>

<h3>Activity 4:</h3>
<?php
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        continue;
    }
    if ($i == 8) {
        break;
    }
    echo $i . " ";
}
?>
<hr>

<h3>Activity 5:</h3>
<?php
$sum = 0;
$i = 1;
while ($i <= 100) {
    $sum += $i;
    $i++;
}
echo "The sum of numbers from 1 to 100 is: " . $sum;
?>
<hr>

<h3>Activity 6:</h3>
<?php
$movies = ["The Shawshank Redemption", "Inception", "The Dark Knight", "Interstellar", "Parasite"];
foreach ($movies as $index => $movie) {
    echo ($index + 1) . ". " . $movie . "<br>";
}
?>
<hr>


<h3>Activity 7:</h3>
<?php
$student = [
    "Name" => "Alice",
    "Age" => 20,
    "Grade" => "A",
    "City" => "Baguio"
];
foreach ($student as $key => $value) {
    echo "$key: $value<br>";
}
?>
</body>
</html>
