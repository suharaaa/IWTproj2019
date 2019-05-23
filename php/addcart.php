<?php
    include_once 'config.php';

    $id = $_POST['item'];
    $name = $_POST['iname'];
    $price = $_POST['iprice'];
    $color = $_POST['sele'];
    $size = $_POST['selector'];
    $quantity = $_POST['qty'];
        

    $sql = "INSERT INTO tempcart ( itemid, name, price, color, size, quantity)
            VALUES ('$id' , '$name', '$price', '$color', '$size', '$quantity');";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// header("Location: ../women.php");

mysqli_close($conn);


?>