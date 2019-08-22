<?php require 'db.php'; 

?>
<?php
 $id = $mysqli->escape_string($_POST['order_id']);
 $number = $mysqli->escape_string($_POST['number']);
 $purchase_order_id = $mysqli->escape_string($_POST['purchase_order_id']);
 $creation_date = $mysqli->escape_string($_POST['creation_date']);
 $description = $mysqli->escape_string($_POST['description']);
 
     
?>
<?php
if($_POST['submit']=='update'):
	
    $id = $_POST['order_id'];

     $query = "UPDATE orderr SET order_id='$id',number= '$number' ,purchase_order_id='$purchase_order_id',creation_date='$creation_date',description='$description' WHERE order_id = ".$order_id;
    // Add store request to the database

    if(!mysqli_query($conn, $query)){
        die(" failed to update row ".mysqli_error($conn));
        }else {
           
           header('location: all_order.php');
         
        }
    endif;

?>

<?php

if($_POST['submit']=='register'):

// active is 0 by DEFAULT (no need to include it here)
    $query = "INSERT INTO orderr (number,purchase_order_id,creation_date, description) " 
    . "VALUES ('$number','$purchase_order_id','$creation_date','$description')";

        if(!mysqli_query($conn ,$query)){
            die(" failed to insert row ".mysqli_error($conn));
        }
       
          mysqli_close($conn); 
         header('location: all_order.php');
        endif;
?>
