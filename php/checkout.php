<?php
    include_once 'connection.php';

    $fname = $_POST['fn'];
    $lname = $_POST['ln'];
    $adress = $_POST['add'];
    

    $sql = "INSERT INTO checkout (fname, lname, address)
            VALUES ('$fname' , '$lname', '$adress');";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>