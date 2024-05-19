<?php
// Include the database connection file
include 'dbcon.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Retrieve form data
    $title = $_POST["title"];
    $availability = $_POST["availability"];
    $description = $_POST["description"];
    $pricing = $_POST["pricing"];
    $country = $_POST["country"];
    $price = $_POST["price"];
    $amount = $_POST["amount"];

    // Upload photo
    $photo = ""; // initialize with an empty string
    if(isset($_FILES['photo']) && $_FILES['photo']['error'] == 0){
        $target_dir = "uploads/"; // specify the directory where you want to store the uploaded files
        $target_file = $target_dir . basename($_FILES["photo"]["name"]);
        move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);
        $photo = $target_file; // set the photo variable to the file path
    }

    // Prepare and execute the SQL query to insert data into the product table
    $sql = "INSERT INTO product (title, availability, description, pricing, country, price, amount, photo) 
            VALUES ('$title', '$availability', '$description', '$pricing', '$country', $price, $amount, '$photo')";

    if ($conn->query($sql) === TRUE) {
        echo "Product added successfully!";
        header("location: product.php");
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
