<?php require 'db.php'; 

?>
<?php
  $id = $mysqli->escape_string($_POST['id']);
  $user_name = $mysqli->escape_string($_POST['user_name']);
  $password = $mysqli->escape_string($_POST['password']);
  $full_name = $mysqli->escape_string($_POST['full_name']);
  $department = $mysqli->escape_string($_POST['department']);
  $phone = $mysqli->escape_string($_POST['phone']);
  $address = $mysqli->escape_string($_POST['address']);
  

?>
<?php
if($_POST['submit']=='update'):
	
    $id = $_POST['id'];

    $query = " UPDATE user SET id='$id', user_name= '$user_name', password='$password', full_name='$full_name', department='$department', phone='$phone', address='$address' WHERE id = '$_GET[id]'";
    // Add store request to the database

    if(!mysqli_query($conn, $query)){
        die(" failed to update row ".mysqli_error($conn));
        }else {
           
           header('location: all_users.php');
         
        }
    endif;

?>

<?php

if($_POST['submit']=='register'):

// active is 0 by DEFAULT (no need to include it here)
    $query = "INSERT INTO user (id, user_name, password, full_name,	department,	phone, address) " 
    . "VALUES ('$id','$user_name','$password','$full_name','$department','$phone','$address')";

        if(!mysqli_query($conn ,$query)){
            die(" failed to insert row ".mysqli_error($conn));
        }
       
          mysqli_close($conn); 
         header('location: all_users.php');
        endif;
?>
