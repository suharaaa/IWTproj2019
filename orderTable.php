<link rel="stylesheet" type="text/css" href="css/style.css">
<?php //Linking the configuration file
require 'config.php';
?>

    <table class="table table-striped">
    <thead>
                <tr>
                        <th>Date</th>
                        <th>Invoice ID</th> 
                        <th>Description</th>
                        <th>Customer ID</th>
                        <th>Total</th>
                </tr>
                </thead>     
                <tbody id="OwnerHistoryTable">
                <tr>
                        <td>12.12.2018</td>
                        <td>IN12</td>
                        <td>COLOR BLOCK T-SHIRT</td>
                        <td>Rs.2500</td>

                </tr>
                <?php
                    $sql= "SELECT invoice_no, description, cust_id, date, price FROM order";
                    $result = $conn -> query($sql);
                    if($result ->num_rows > 0){
                        while($row = $result -> fetch_assoc()){?>
                        <tr>
                            <td>
                                <?php echo $row['invoice_no'];
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php echo $row['description'];
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php echo $row['cust_id'];
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php echo $row['date'];
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php echo $row['price'];
                                ?>
                            </td>
                        </tr>
                    
                    
                    
                <?php   } ?>
                
          
                </tbody>

    <?php  mysqli_close($conn);
 ?>
     </table>

