<?php include('navbar.php') ?>

<body>
    <?php
    // Include the database connection file
    include 'dbCon.php';

    // Fetch data from the request table
    $sql = "SELECT * FROM request";
    $result = $conn->query($sql);

    // Check if the success parameter is present in the URL
    if (isset($_GET["success"]) && $_GET["success"] == 1) {
        echo "<div class='alert alert-success' role='alert'>Request submitted successfully!</div>";
    }
    // Display the retrieved data
    if ($result->num_rows > 0) {
        echo "<div class='container mt-5'>";
        echo "<h2>Requested Products</h2>";
        echo "<div class='row'>"; // Start a row to align cards horizontally

        while ($row = $result->fetch_assoc()) {
            echo "<div class='col-md-4 mb-3'>"; // Each card will take 4 columns on medium screens
            echo "<div class='card'>";
            echo "<div class='card-body'>";
            echo "<h5 class='card-title'>Title: " . $row["title"] . "</h5>";
            echo "<p class='card-text'><strong>Description:</strong> " . $row["description"] . "</p>";
            echo "<p class='card-text'><strong>Order Date:</strong> " . $row["date"] . "</p>";
            echo "<p class='card-text'><strong>Country:</strong> " . $row["country"] . "</p>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }

        echo "</div>"; // Close the row
        echo "</div>"; // Close the container
    } else {
        echo "<p>No requests found.</p>";
    }


    // Close the database connection
    $conn->close();
    ?>

    <?php include('footer.php') ?>
</body>