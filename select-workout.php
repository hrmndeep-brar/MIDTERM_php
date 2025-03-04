<?php
// Database connection
$db = new PDO('mysql:host=172.31.22.43;dbname=Harmandeep200613315', 'Harmandeep200613315','aVUABfFvuE');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Workout</title>
</head>
<body>

<h1>Select a Workout</h1>

<form method="POST" action="exercises.php">
    <label for="workout">Choose a workout:</label>
    <select name="workoutId" id="workout">
        <?php
        // Fetch workout names and IDs from the database
        $stmt = $db->prepare("SELECT workoutId, name FROM workouts");
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<option value='" . $row['workoutId'] . "'>" . $row['name'] . "</option>";
        }
        ?>
    </select>
    <button type="submit">Get Exercises</button>
</form>

</body>
</html>
