<?php require 'db.php'; 

?>
<?php
      $name = $mysqli->escape_string($_POST['name']);
      $type = $mysqli->escape_string($_POST['type']);
      $description = $mysqli->escape_string($_POST['description']);

?>
<?php
if($_POST['submit']=='update'):
	
    $category_id = $_POST['category_id'];

    $query = "UPDATE category  SET name= '$name' ,type='$type',description='$description' WHERE category_id =".$category_id; 
    // Add store request to the database

    if(!mysqli_query($conn, $query)){
        die(" failed to update row ".mysqli_error($conn));
        }else {
           
           header('location: all_category.php');
         
        }
    endif;

?>

<?php

if($_POST['submit']=='register'):

// active is 0 by DEFAULT (no need to include it here)
    $query ="INSERT INTO category (name,type,description)" 
    . "VALUES ('$name','$type','$description')";

        if(!mysqli_query($conn ,$query)){
            die(" failed to insert row ".mysqli_error($conn));
        }
       
          mysqli_close($conn); 
         header('location: all_category.php');
        endif;
?>
