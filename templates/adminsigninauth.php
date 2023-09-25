<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'conn.php';

    $username = $_POST["uname"];
    $password = $_POST["password"];

    // Create a prepared statement to retrieve the user's data
    $sql = "SELECT uname, password FROM admin WHERE uname = ?";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($result && $row = mysqli_fetch_assoc($result)) {
            // Verify the hashed password
            if (password_verify($password, $row['password'])) {
                // Login successful
                session_start();
                $_SESSION['uname'] = $username;
                $_SESSION['loggedin'] = true;
                header('Location: admindashboard.php');
                exit; // Prevent further script execution
            } else {
                // Password verification failed
                echo "<script> 
                    alert('Invalid username & password');
                    window.location.href = 'adminsignin.php'; 
                </script>";
            }
        } else {
            // Username not found
            echo "<script> 
                alert('Invalid username & password');
                window.location.href = 'adminsignin.php'; 
            </script>";
        }

        mysqli_stmt_close($stmt); // Close the prepared statement
    } else {
        // Database error
        echo "Database error: " . mysqli_error($conn);
    }

    mysqli_close($conn); // Close the database connection
}
?>
