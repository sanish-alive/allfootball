<?php
include 'conn.php';
echo 1;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo 2;
    if (isset($_POST['submit'])) {
    // Prepare and bind SQL statement to insert data
    $sql = "INSERT INTO team (name, coach, history, stadium, ranking) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    
    echo 3;
    // Get form data
    $name = $_POST["name"];
    $coach = $_POST["coach"];
    $history = $_POST["history"];
    $stadium = $_POST["stadium"];
    $ranking = $_POST["ranking"];
    // $logo = $_POST["logo"]; // You may need to handle file uploads separately


    $stmt->bind_param("ssssi", $name, $coach, $history, $stadium, $ranking);
    if($stmt->execute()) {
        echo "inserted";
    }
    // Execute the prepared statement
    // if ($stmt->execute()) {
    //     echo "Team data inserted successfully.";
    //     header('location: addteam.php');
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    // }

    // Close the prepared statement and database connection
    // $stmt->close();
    // $conn->close();
    }
}
?>