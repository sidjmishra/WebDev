<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    $id = $_POST["prodId"];

    // Delete Entry
    $sql = "DELETE FROM `product` WHERE `Product ID` = $id";

    if (mysqli_query($conn, $sql)) {
        echo "Record Deleted successfully<br>";
        print "Product ID: $id <br>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>