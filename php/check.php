<?php
    include_once 'config.php';

    $fname = $_POST['fn'];
    $lname = $_POST['ln'];
    $adress = $_POST['add'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $phone = $_POST['pnum'];
    $mail = $_POST['email'];
    $shmethod = $_POST['ship'];
    $cartype = $_POST['type'];
    $carno = $_POST['cnum'];
    $carcode = $_POST['code'];
    $exday = $_POST['day'];
    $exyear = $_POST['year'];
    

    $sql = "INSERT INTO shipping ( fname, lname, address, city, country, state, zip, phone, email, smethod, ctype, cno, ccode, expday, expyear)
            VALUES ('$fname' , '$lname', '$adress', '$city', '$country', '$state', '$zip', '$phone', '$mail', '$shmethod', '$cartype', '$carno', '$carcode', '$exday', '$exyear');";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

header("Location: ../women.php");

mysqli_close($conn);


?>