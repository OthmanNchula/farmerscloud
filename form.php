<div class="card-body p-5">
    <h2 class="text-uppercase text-center mb-5">Fill Product Information</h2>
    <form action="addBooking.php" method="POST" enctype="multipart/form-data" class="mb-4">
        <div class="form-group">
            <label for="name">Product Name:</label>
            <select name="pid" class="form-control">
                <?php
                include('dbCon.php');
                $sql = "SELECT * FROM product";
                $data = $conn->query($sql);
                while ($query = mysqli_fetch_array($data)) {
                    echo "<option value=" . $query['pid'] . "> " . $query['title'] . "</option>";
                }
                ?>
            </select>
        </div>

        <div class="form-group">
            <label for="quantity">Quantity:</label>
            <input type="number" class="form-control" id="quantity" name="quantity" step="0.01">
        </div>

        <div class="form-group">
            <label for="orderdate">Order Date:</label>
            <input type="date" class="form-control" id="orderdate" name="orderdate">
        </div>

        <div class="form-group">
            <label for="deliverydate">Delivery Date:</label>
            <input type="date" class="form-control" id="deliverydate" name="deliverydate">
        </div>

        <div class="form-group py-4">
            <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4">Book now</button>
        </div>
    </form>
</div>

<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>

    <div class="container mt-5">
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

            // Display the retrieved data in a Bootstrap table
            if ($result->num_rows > 0) {
        ?>
            <h2>Requested Products</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Order Date</th>
                        <th>Country</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["title"] . "</td>";
                            echo "<td>" . $row["description"] . "</td>";
                            echo "<td>" . $row["orderdate"] . "</td>";
                            echo "<td>" . $row["country"] . "</td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        <?php
            } else {
                echo "<p>No requests found.</p>";
            }

            // Close the database connection
            $conn->close();
        ?>
    </div>

</body>
</html>
