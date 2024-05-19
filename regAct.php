<?php
// Include the database connection file
include 'dbCon.php';

// Check if the "Register" button is clicked
if (isset($_POST["register_btn"])) {

    // Retrieve form data
    $fname = $_POST["fname"] ?? '';
    $lastname = $_POST["lastname"] ?? '';
    $phone = $_POST["phone"] ?? '';
    $email = $_POST["email"];
    $gender = $_POST["gender"] ?? '';
    $age = $_POST["age"] ?? '';
    $type = $_POST["type"] ?? '';
    $pwd = $_POST["pwd"];

    // Validate and sanitize the data (you should implement proper validation)
    $fname = htmlspecialchars($fname);
    $lastname = htmlspecialchars($lastname);
    $phone = htmlspecialchars($phone);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $gender = htmlspecialchars($gender);
    $age = intval($age);
    $type = htmlspecialchars($type);
    $pwd = password_hash($pwd, PASSWORD_DEFAULT); // Hash the password

    // Prepare and execute the SQL query to insert data into the register table
    $sql = "INSERT INTO register (fname, lastname, phone, email, type, pwd) 
            VALUES ('$fname', '$lastname', '$phone', '$email', '$type', '$pwd')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
        // Redirect to login.php
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    // Handle the case when the "Register" button is not clicked
    // You can perform additional actions or display a message if needed
}

// Close the database connection
$conn->close();
?>
