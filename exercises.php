<?php
// Database connection
$db = new PDO('mysql:host=172.31.22.43;dbname=Harmandeep200613315', 'Harmandeep200613315','aVUABfFvuE');


// Step 1: Get the workoutId from the URL (submitted from the form)
if (isset($_POST['workoutId'])) {
    $workoutId = $_POST['workoutId'];
} else {
    // Redirect if no workoutId was selected
    header('Location: select-workout.php');
    exit();
}

// Step 2: Query exercises based on the workoutId
$stmt = $db->prepare("SELECT exerciseId, name FROM exercises WHERE workoutId = :workoutId");
$stmt->bindParam(':workoutId', $workoutId, PDO::PARAM_INT);
$stmt->execute();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercises</title>
    <script>
        // Function to show confirmation modal
        function confirmDelete(exerciseId) {
            if (confirm('Are you sure you want to delete this exercise?')) {
                window.location.href = 'delete-exercises.php?exerciseId=' + exerciseId;
            }
        }
    </script>
</head>
<body>

<h1>Exercises for Selected Workout</h1>

<ul>
    <?php
    // Step 3: Output exercises in an unordered list
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<li><a href='javascript:void(0);' onclick='confirmDelete(" . $row['exerciseId'] . ")'>" . $row['name'] . "</a></li>";
    }
    ?>
</ul>

</body>
</html>
