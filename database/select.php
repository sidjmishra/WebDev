<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    $id = $_POST["prodId"];

    // Delete Entry
    $sql = "SELECT `Product ID`, `Product Name`, `Product Price`, `Product Description` FROM `product` WHERE `Product ID` = $id";
    $result = $conn->query($sql);

    if (mysqli_query($conn, $sql)) {
        echo "<h2>Product Details</h2><br>";
    } 

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Product ID: " . $row["Product ID"];
        echo "<br>Product Name: " . $row["Product Name"]; 
        echo "<br>Product Price: " . $row["Product Price"];
        echo "<br>Product Description:" . $row["Product Description"];
    }
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>