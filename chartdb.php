<div class="container">
    <?php
    $link = mysqli_connect("localhost", "root", "");
    mysqli_select_db($link, "fc");

    $test = array();
    $count = 0;

    $res = mysqli_query($link, "SELECT * FROM product");

    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            $test[$count]["label"] = $row["title"];
            $test[$count]["y"] = $row["price"];
            $count++;
        }
    } else {
        echo "No rows found in the product table.";
    }
    ?>
</div>