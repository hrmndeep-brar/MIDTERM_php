<?php
// Database connection
$db = new PDO('mysql:host=172.31.22.43;dbname=Harmandeep200613315', 'Harmandeep200613315','aVUABfFvuE');

// Step 1: Get the exerciseId from the URL
if (isset($_GET['exerciseId']) && !empty($_GET['exerciseId'])) {
    $exerciseId = $_GET['exerciseId'];

    // Step 2: Delete the exercise from the exercises table
    $stmt = $db->prepare("DELETE FROM exercises WHERE exerciseId = :exerciseId");
    $stmt->bindParam(':exerciseId', $exerciseId, PDO::PARAM_INT);
    $stmt->execute();
}

// Step 3: Redirect back to select-workout.php
header('Location: select-workout.php');
exit();
?>
