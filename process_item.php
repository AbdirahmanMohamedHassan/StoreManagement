<?php require 'db.php'; 

?>
<?php
	
    $id = $mysqli->escape_string($_POST['item_id']);
    $name = $mysqli->escape_string($_POST['name']);
    $category = $mysqli->escape_string($_POST['category_id']);
    $quantity = $mysqli->escape_string($_POST['quantity']);
    $description = $mysqli->escape_string($_POST['description']);
    

?>
<?php
if($_POST['submit']=='update'):
	
    $id = $_POST['item_id'];

    $query = "UPDATE item SET name= '$name' ,quantity='$quantity',description='$description',category_id='$category' WHERE item_id =".$id; 
    // Add store request to the database

    if(!mysqli_query($conn, $query)){
        die(" failed to update row ".mysqli_error($conn));
       
        }else {
           
         /*  header('location: all_items.php');
           $mess = isset($_REQUEST['mess']) ? $_REQUEST['mess'] : null;
           if($mess == 1) {
             echo 'Thank you. Please come again'; }*/
             ?>

            <script>
                window.alert("Submited seccessfully");
                header('location: all_items.php');
            </script>
            <meta http-equiv="refresh" content="0; url=all_items.php" />
            
        <?php
        }
    endif;

?>

<?php

if($_POST['submit']=='register'):

// active is 0 by DEFAULT (no need to include it here)
    $query ="INSERT INTO item (item_id,name,quantity,description,category_id) " 
    . "VALUES ('$id','$name','$quantity','$description','$category')";


        if(!mysqli_query($conn ,$query)){
            die(" failed to insert row ".mysqli_error($conn));
        }
       
          mysqli_close($conn); 
         header('location: all_items.php');
        endif;
?>
