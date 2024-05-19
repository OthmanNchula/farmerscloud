<?php
// Include the database connection file
include 'dbcon.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Retrieve form data
    $email = $_POST["email"];
    $password = $_POST["pwd"];

    // Validate and sanitize the data (you should implement proper validation)
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    // Check if the provided email exists in the register table
    $sql = "SELECT * FROM register WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User with the provided email exists, check the password
        $row = $result->fetch_assoc();
        $hashed_password = $row["pwd"];

        // Verify the password
        if (password_verify($password, $hashed_password)) {
            // Check if the user type is "farmer"
            if ($row["type"] == "farmer") {
                // Login successful for farmer, redirect to product.php for farmers
                header("Location: product.php");
                exit();
            } elseif ($row["type"] == "buyer") {
                // Login successful for buyer, redirect to buyer.php for buyers
                header("Location: request.php");
                exit();
            } else {
                echo "Invalid user type";
            }
        } else {
            echo "Incorrect password";
        }
    } else {
        echo "User not found with the provided email";
    }
} else {
    // Handle the case when the form is not submitted
    echo "Form not submitted";
}

// Close the database connection
$conn->close();
?>
