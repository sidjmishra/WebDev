<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    $id = $_POST["prodId"];
    $name = $_POST["prodName"];
    $price = $_POST["prodPrice"];
    $desc = $_POST["prodDesc"];

    // Insert Entry
    $sql = "INSERT INTO product (`Product ID`, `Product Name`, `Product Price`, `Product Description`) VALUES ($id, '$name', $price, '$desc')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully<br>";
        print "Product ID: $id <br>";
        print "Product Name: $name <br>";
        print "Product Price: $price <br>";
        print "Product Description: $desc <br>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>