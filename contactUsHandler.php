<?php //Linking the configuration file
require 'config.php';
?>

<?php

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $emailFrom = $_POST['email'];
        $contact = $_POST['contact'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $sql= "INSERT INTO `tempcontact` (`cust_name`, `phone_no`, `email`) 
        VALUES ('$name','$contact','$emailFrom')";
        $mailTo = "sales@printcitylanka.com";  //change mail
        $headers = "From: ".$emailFrom;
        $txt ="You have received an e-mail from ".$name.".\n\n".$message;

        

        mail($emailTo, $suject, $txt, $headers);
        header("Location: contact.html?mailsend"); 
        
        if($conn->query($sql)){
            echo "Inserted Successfully";
        }
        else{
            echo "Error: ".$conn->error;
        }
        
    

    }

    mysqli_close($conn);



?>