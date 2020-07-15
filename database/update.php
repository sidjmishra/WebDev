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
    $sql = "UPDATE product SET `Product Name` = '$name', `Product Price` = $price, `Product Description` = '$desc' WHERE `Product ID` = $id";

    if (mysqli_query($conn, $sql)) {
        echo "Record Updated successfully<br>";
        print "Product ID: $id <br>";
        print "Product Name: $name <br>";
        print "Product Price: $price <br>";
        print "Product Description: $desc <br>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>