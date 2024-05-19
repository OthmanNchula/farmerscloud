<?php
// Include the database connection file
include 'dbCon.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Retrieve form data
    $title = $_POST["title"];
    $description = $_POST["description"];
    $date = $_POST["orderdate"];
    $country = $_POST["country"];

    // Validate and sanitize the data (you should implement proper validation)

    // Prepare and execute the SQL query to insert data into the request table
    $sql = "INSERT INTO request (title, description, date, country) 
            VALUES ('$title', '$description', '$date', '$country')";

    if ($conn->query($sql) === TRUE) {
        // Request submitted successfully
        // Redirect to request.php with a success message
        header("Location: request.php?success=1");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    // Handle the case when the form is not submitted
    echo "Form not submitted";
}

// Close the database connection
$conn->close();
?>
