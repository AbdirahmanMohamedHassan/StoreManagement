<?php
if(isset($_POST['submit'])){
	
	if( empty($_POST['certificate_name']) || empty($_POST['certificate_code']) || empty($_POST['certificate_description'])) {
		$_SESSION['adminmessage']= " <div class='alert alert-danger'>
        <strong>Woah!</strong> Fill out all the information please.
                    </div>";
		 header("location:add_certificate.php");
	}
	
	
	
	else{
		
		$result = $mysqli->query("SELECT * FROM tb_certificates WHERE certificate_code='$_POST[certificate_code]'");
		   
			if ( $result->num_rows > 0  ){ // User doesn't exist
	 $_SESSION['adminmessage']= " <div class='alert alert-danger'>
        <strong>Woah!</strong> This certificate code has already been used.
                    </div>";
	header("location: add_certificate.php");
}
else{
$certificate_name = $mysqli->escape_string($_POST['certificate_name']);
$certificate_code = $mysqli->escape_string($_POST['certificate_code']);
$certificate_description = $mysqli->escape_string($_POST['certificate_description']);
 $date=  date("Y-m-d"); 
 
 if ($_FILES['image']['tmp_name'] == "")
	{
			$filepath="images/user.png";
	}
	else
	{
		$filetemp=$_FILES['image']['tmp_name'];
		$filename=$_FILES['image']['name'];
		$filetype=$_FILES['image']['type'];
		$filepath="images/".$filename;
	    move_uploaded_file($filetemp,$filepath);
	}
	
	$code = substr(md5(uniqid(mt_rand(), true)) , 0, 8);
// active is 0 by DEFAULT (no need to include it here)
    $sql = "INSERT INTO tb_certificates (certificate_name,certificate_code,certificate_description,image,date) " 
            . "VALUES ('$certificate_name','$certificate_code','$certificate_description','$filepath','$date')";
echo $sql;
    // Add user to the database
    if ( $mysqli->query($sql) ){
		$_SESSION['adminmessage']= " <div class='alert alert-success'>
        <strong>Well done!</strong> You successfully added a new certificate, it will be appear on the website.
                    </div>";
		 header("location:all_certificates.php");
	}
else {
   $_SESSION['adminmessage']= " <div class='alert alert-danger'>
        <strong>Warning!</strong> You weren't successful in adding a new certificate.
                    </div>";
header("location:all_certificates.php");
    }
}}}
?>