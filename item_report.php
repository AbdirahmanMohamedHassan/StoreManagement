<?php require_once('db.php'); ?>
<?php 
session_start();
if(!isset($_SESSION['Login_status'])){
					header('location:login.php');
}
else{
    
?>
<!DOCTYPE html>
<html>

<head>
    <title>ITEMS REPORT</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <style type="text/css">
        body {
            width: 1200px;
			margin: 40px 10px 0px 10px;

            padding: 0px;
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: rgb(33, 33, 33);
        }

        .report-header {
            background: rgb(178, 230, 212);
            color: rgb(102, 102, 102);
			margin: 40px 10px 0px 100px;
            padding: 15px;
            box-sizing: border-box;
            display: block;
            position: relative;
            text-align: center;
			text-align: center
        }

        .report-header .logo {
			ali
            position: absolute;
            top: 40px;
            left: 15px;
            width: 150px;
        }

        .report-footer {
            background: rgb(178, 230, 212);
            color: rgb(102, 102, 102);
			margin: 40px 10px 0px 300px;
            padding: 15px;
            box-sizing: border-box;
            display: block;
            position: relative;
            text-align: center;
        }

        .report-body {
            width: 70%;
            display: inline-block;
			margin: 40px 10px 0px 300px;
            position: relative;
            padding: 15px;
            box-sizing: border-box;
            vertical-align: top;
            margin-left: 20px;
        }

        .report-photo {
            width: 28%;
            display: inline-block;
            position: relative;
            vertical-align: top;
            box-sizing: border-box;
            margin-top: 15px;
        }

        .report-body .info {
			margin: 40px 10px 0px 300px;
            border: #ccc solid 1px;
            padding: 5px;
            display: block;
            position: relative;
        }

        .report-body .lines {
            border: #ccc solid 1px;
            margin-top: 15px;
            padding: 5px;
            display: block;
            position: relative;
			margin: 40px 10px 0px 300px;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
        }

        th,
        td {
            text-align: left;
            padding: 16px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }
    </style>
    <meta charset="utf-8">
</head>

<body onload="window.print();window.close();">

<div class="report-header">
<h2 style="text-align: center">  STORE MANAGEMENT SYSTEM </h2>
</div>
<form method="POST" >

 
<div class="info">
<h5  style="text-align: center"> ITEMS REPORT</h5>  
</div>
<div class="lines">
	  <table border="1" align="center" >

	  <tr>
																	<th> Id </th>
					                                                <th> Name </th>
                                                                    <th> Quantity</th>
																	<th> Category </th>
																	<th> Description</th>
					                                            </tr>
<?php 

$sql = mysqli_query($conn,"SELECT * FROM item  ");
while ($row= mysqli_fetch_array($sql)) {
	
 ?>
	  	 <tr>
	  	 	<td><?php echo$row['0']; ?></td>
	  	 	<td><?php echo$row['1']; ?></td>
	  	 	<td><?php echo$row['2']; ?></td>
	  	 	<td><?php echo$row['3']; ?></td>
	        <td><?php echo$row['4']; ?></td>
	  	 </tr>

	  	 <?php } ?>

	  	


	  </table>
</div>
</div>
</form>
</body>
</html>

<?php } ?>