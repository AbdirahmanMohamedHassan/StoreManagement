<?php require 'db.php'; 

?>
<?php
    $item_id = $mysqli->escape_string($_POST['item_id']);
    $vendor = $mysqli->escape_string($_POST['vendor']);
    $unit_price = $mysqli->escape_string($_POST['unit_price']);
    $quantity = $mysqli->escape_string($_POST['quantity']);
    $total = $mysqli->escape_string($_POST['total']);
    $amount = $mysqli->escape_string($_POST['amount']);
    $created_date = $mysqli->escape_string($_POST['created_date']);
    $pre_by_name = $mysqli->escape_string($_POST['pre_by_name']);
    $pre_by_title = $mysqli->escape_string($_POST['pre_by_title']);
    $appr_by_name = $mysqli->escape_string($_POST['appr_by_name']);
    $appr_by_title = $mysqli->escape_string($_POST['appr_by_title']);
    $author_by_name = $mysqli->escape_string($_POST['author_by_name']);
    $author_by_title = $mysqli->escape_string($_POST['author_by_title']); 


?>
<?php
if($_POST['submit']=='update'):
	
    $id = $_POST['id'];
    $up = "SELECT quantity from item where item_id ='$item_id'";
    $res = mysqli_query($conn ,$up);
    $row = $res->fetch_assoc();
    $row1 = $row['quantity'];
    
    $tot = $row1 - $quantity;

    $up1 = "UPDATE item set quantity ='$tot' where item_id ='$item_id'";
    $res1 = mysqli_query($conn ,$up1);

    $query = "UPDATE purchase_order SET purchase_order_id='$purchase_order_id', item_id='$item_id', vendor= '$vendor' ,unit_price='$unit_price', quantity='$quantity',total='$total', amount='$amount', created_date='$created_date',pre_by_name='$pre_by_name', pre_by_title='$pre_by_title', appr_by_name='$appr_by_name', appr_by_title='$appr_by_title', author_by_name='$author_by_name', author_by_title='$author_by_title' WHERE purchase_order_id = '$_GET[purchase_order_id]'";
    // Add store request to the database

    if(!mysqli_query($conn, $query)){
        die(" failed to   row ".mysqli_error($conn));
        }else {
            $up2 = "SELECT quantity from item where item_id ='$item_id'";
            $res2 = mysqli_query($conn ,$up2);
            $row2 = $res->fetch_assoc();
            $row2 = $row2['quantity'];
            
            $tot2 = $row2 + $quantity;
        
            $up3 = "UPDATE item set quantity ='$tot' where item_id ='$item_id'";
            $res3 = mysqli_query($conn ,$up3);
           header('location:all_purchase_order.php');
         
        }
    endif;

?>

<?php

if($_POST['submit']=='register'):

// active is 0 by DEFAULT (no need to include it here)
    $query = "INSERT INTO purchase_order ( item_id, vendor, quantity, total, amount, created_date, pre_by_name, pre_by_title, appr_by_name, appr_by_title, author_by_name, author_by_title) " 
    . "VALUES ('$item_id','$vendor','$quantity','$total','$amount','$created_date','$pre_by_name','$pre_by_title','$appr_by_name','$appr_by_title','$author_by_name','$author_by_title')";
    
    $up = "SELECT quantity from item where item_id ='$item_id'";
    $res = mysqli_query($conn ,$up);
    $row = $res->fetch_assoc();
    $row1 = $row['quantity'];
    
    $tot = $row1 + $quantity;

    $up1 = "UPDATE item set quantity ='$tot' where item_id ='$item_id'";
    $res1 = mysqli_query($conn ,$up1);
        if(!mysqli_query($conn ,$query)){
            die(" failed to insert row ".mysqli_error($conn));
        }
       
          mysqli_close($conn); 
         header('location: all_purchase_order.php');
        endif;
?>
