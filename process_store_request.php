<?php require 'db.php'; 

?>
<?php
    $item_id = $mysqli->escape_string($_POST['item_id']);
    $quantity = $mysqli->escape_string($_POST['quantity']);
    $department = $mysqli->escape_string($_POST['department']);
    $created_date = $mysqli->escape_string($_POST['created_date']);
    $requested_by = $mysqli->escape_string($_POST['requested_by']);
    $approved_date = $mysqli->escape_string($_POST['approved_date']);
    $approved_by = $mysqli->escape_string($_POST['approved_by']);
    $occupation = $mysqli->escape_string($_POST['occupation']);

?>
<?php
    
if($_POST['submit']=='update'):
	
    $id = $_POST['id'];

    $query = "UPDATE store_request SET  item_id='$item_id',quantity= '$quantity' ,department='$department',created_date='$created_date',requested_by='$requested_by', approved_by='$approved_by', approved_date='$approved_date', occupation='$occupation' WHERE id=".$id; 
    // Add store request to the database

    if(!mysqli_query($conn, $query)){
        die(" failed to update row ".mysqli_error($conn));
        }else {
           
           header('location: all_store_request.php');
         
        }
    endif;

?>

<?php

if($_POST['submit']=='register'):
    $one = "SELECT quantity from item where item_id ='$item_id'";
    $r1 = mysqli_query($conn ,$one);
    $table = mysqli_fetch_array($r1);
   $quan= $table['quantity'];
     $total = $quan - $quantity;

    if($total<0)
    {
        echo "Don't request";
    }
    else{
// active is 0 by DEFAULT (no need to include it here)
    $query= "INSERT INTO store_request(item_id, quantity, department, created_date, requested_by, approved_date, approved_by, occupation)"
    . "VALUES ('$item_id','$quantity','$department','$created_date','$requested_by','$approved_date','$approved_by','$occupation')";
    $r = mysqli_query($conn ,$query);
     
 
    //echo $total;  
        $up = "UPDATE item set quantity ='$total' where item_id ='$item_id'";
        $res = mysqli_query($conn ,$up);
        echo $up;
        if(!$r){
            die(" failed to insert row ".mysqli_error($conn));
        }
    }
    
       
          mysqli_close($conn); 
         //header('location: all_store_request.php');
        endif;
?>
