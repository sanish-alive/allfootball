<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['submit'])) {
        include 'conn.php';

        // Get the user's input from the form
        $username = $_POST['uname'];
        $password = $_POST['password'];
        $cPassword = $_POST['cpassword'];

        if ($password == $cPassword) {
            // Hash the password using password_hash()
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // Corrected SQL query with placeholders and binding
            $sql = "INSERT INTO admin (uname, password) VALUES (?, ?)";
            $stmt = $conn->prepare($sql);

            // Check if the SQL query was prepared successfully
            if ($stmt) {
                // Bind parameters to the statement
                $stmt->bind_param("ss", $username, $hashedPassword); // Use the hashed password

                // Execute the statement
                if ($stmt->execute()) {
                    // echo "Sign-up data inserted successfully!";
                    header('location: adminsignin.php');
                } else {
                    echo "Error: " . $stmt->error;
                }

                // Close the statement
                $stmt->close();
            } else {
                echo "Error: Could not prepare the SQL statement.";
            }

            // Close the database connection
            $conn->close();
        } else {
            echo "Passwords do not match!";
        }
    } else {
        echo "Invalid request!";
    }
}
?>
