<?php
try {
    $db = new PDO('mysql:host=172.31.22.43;dbname=Harmandeep200613315', 'Harmandeep200613315', 'aVUABfFvuE');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workout Management</title>
</head>
<body>

<h1>Workout Management System</h1>

<p>Welcome to the Workout Management System. Choose an option below to proceed:</p>

<ul>
    <li><a href="select-workout.php">Select a Workout</a></li>
    <li><a href="exercises.php">View Exercises</a></li>
    <li><a href="delete-exercises.php">Delete Exercises</a></li>
</ul>

</body>
</html>
