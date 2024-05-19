

<?php
// Include the database connection file
include 'dbcon.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

     // Retrieve form data
    $productid = $_POST["pid"];
    $quantity = $_POST["quantity"];
    $orderDate = $_POST["orderdate"];
    $deliverydate = $_POST["deliverydate"];

    // Prepare and execute the SQL query to insert data into the product table
    $sql = "INSERT INTO booking VALUES('','$productid', '$quantity', '$orderDate', '$deliverydate')";
    if ($conn->query($sql) === TRUE) {
        echo "Booking added successfully!";
        header("location: booking.php");
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
