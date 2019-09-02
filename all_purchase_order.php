<?php require_once('db.php'); ?>
<?php 
session_start();
if(!isset($_SESSION['Login_status'])){
					header('location:login.php');
}
else{
    
?>
<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    
    <title>SMS | Admin Panel</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
    <link href="fonts/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css" />
	<!--bootstrap -->
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- data tables -->
    <link href="assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="assets/css/material_style.css">
	<!-- Theme Styles -->
    <link href="assets/css/theme/light/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
    <link href="assets/css/theme/light/style.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/theme/light/theme-color.css" rel="stylesheet" type="text/css" />
	<!-- favicon -->
    <link rel="shortcut icon" href="http://radixtouch.in/templates/admin/smart/source/assets/img/favicon.ico" /> 
	<script>
    function deleletconfig(){

    var del=confirm("Are you sure you want to delete this record?");
    if (del==true){
       alert ("One row is deleted")
    }else{
        alert("Record Not Deleted")
    }
    return del;
    }
</script>

</head>
<!-- END HEAD -->
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
    <div class="page-wrapper">
        <!-- Top menu page -->
		<?php include("topmenu.php") ?>
		<!-- end top menu page -->
       
        <!-- start page container -->
        <div class="page-container">
 			<!-- start sidebar menu -->
			<?php include ("sidemenu.php") ?>
			
			 <!-- end sidebar menu -->
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">All Purchase Order</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="#">Items</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">All Purchase Order</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tabbable-line">
                                <div class="tab-content">
                                    <div class="tab-pane active fontawesome-demo" id="tab1">
                                        <div class="row">
					                        <div class="col-md-12">
					                            <div class="card card-box">
					                                <div class="card-head">
					                                    <header>All Purchase Order</header>
					                                    <div class="tools">
					                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
						                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
						                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
					                                    </div>
					                                </div>
					                                <div class="card-body ">
					                                    <div class="row">
					                                        <div class="col-md-6 col-sm-6 col-6">
					                                            <div class="btn-group">
					                                                <a href="add_purchase_order.php" id="addRow" class="btn btn-info">
					                                                    Add New <i class="fa fa-plus"></i>
					                                                </a>
					                                            </div>
					                                        </div>
					                                        <div class="col-md-6 col-sm-6 col-6">
					                                            <div class="btn-group pull-right">
					                                                <a class="btn deepPink-bgcolor  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
					                                                    <i class="fa fa-angle-down"></i>
					                                                </a>
					                                                <ul class="dropdown-menu pull-right">
					                                                    <li>
					                                                        <a href="javascript:;">
					                                                            <i class="fa fa-print"></i> Print </a>
					                                                    </li>
					                                                    <li>
					                                                        <a href="javascript:;">
					                                                            <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
					                                                    </li>
					                                                    <li>
					                                                        <a href="javascript:;">
					                                                            <i class="fa fa-file-excel-o"></i> Export to Excel </a>
					                                                    </li>
					                                                </ul>
					                                            </div>
					                                        </div>
					                                    </div>
					                                    <div class="table-scrollable">
					                                    <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
					                                        <thead>
					                                            <tr>
																	<th> Item Id </th>
					                                                <th> Vendor </th>
																	<th> quantity </th>
                                                                    <th> Created date</th>
																	<th> Pre By Name </th>
																	<th> Pre By Title</th>
																	<th> Appr By Name </th>
																	<th> Appr By Title</th>
																	<th> Aouthor By Name </th>
																	<th> Author By Title</th>
					                                                <th> Action </th>
					                                            </tr>
					                                        </thead>
					                                        <tbody>
															<?php
						
						$sql = "SELECT  `vendor`,  `quantity`,`created_date`, `pre_by_name`, `pre_by_title`, `appr_by_name`, `appr_by_title`, `author_by_name`, `author_by_title`, `item_id`, purchase_order_id FROM `purchase_order` ";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()) {
						?>
																<tr class="odd gradeX">
															
																<td class="left"><?php echo$row["item_id"] ?></td>
																	<td class="left"><?php echo$row["vendor"] ?></td>
																	<td class="left"><?php echo$row["quantity"] ?></td>
																	<td><?php echo$row["created_date"] ?></td>
																	<td class="left"><?php echo$row["pre_by_name"] ?></td>
																	<td class="left"><?php echo$row["pre_by_title"] ?></td>
																	<td class="left"><?php echo$row["appr_by_name"] ?></td>
																	<td class="left"><?php echo$row["appr_by_title"] ?></td>
																	<td class="left"><?php echo$row["author_by_name"] ?></td>
																	<td class="left"><?php echo$row["author_by_title"] ?></td>
																	<td>
															
																				<i > <a href="edit_purchase_order.php?purchase_order_id=<?php echo$row["purchase_order_id"] ?>"><button type="button" href="edit_purchase_order.php" class="fa fa-pencil"></button></a>	</i>
																		<form action="" method=POST>
																		<button class="btn btn-danger btn-xs" value="<?php echo $row["purchase_order_id"] ?>" type="submit"  name="delete" onclick="return deleletconfig();">
																		
																			<i class="fa fa-trash-o "></i>
																		</button>
																		</form>
																	</td>
																</tr>
																<?php }}else if ($result->num_rows == 0) {echo "<center><h2>no items a valiabe</h2></center>";}?>
																<?php if(isset($_POST['delete'])){
										$id = $mysqli->escape_string($_POST['delete']);
$sql = "delete from item WHERE purchase_order_id='$id'";						

   if ( $mysqli->query($sql) ){

	}

	
										}?>
															</tbody>
					                                    </table>
					                                    </div>
					                                </div>
					                            </div>
					                        </div>
					                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page content -->
        </div>
        <!-- end page container -->
        <!-- start footer -->
       <?php include("footer.php") ?>
        <!-- end footer -->
    </div>
    <!-- start js include path -->
    <script src="assets/plugins/jquery/jquery.min.js" ></script>
    <script src="assets/plugins/popper/popper.js" ></script>
    <script src="assets/plugins/jquery-blockui/jquery.blockui.min.js" ></script>
	<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- bootstrap -->
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js" ></script>
    <script src="assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js" ></script>
    <!-- data tables -->
    <script src="assets/plugins/datatables/jquery.dataTables.min.js" ></script>
 	<script src="assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js" ></script>
    <script src="assets/js/pages/table/table_data.js" ></script>
    <!-- Common js-->
	<script src="assets/js/app.js" ></script>
    <script src="assets/js/layout.js" ></script>
	<script src="assets/js/theme-color.js" ></script>
	<!-- Material -->
	<script src="assets/plugins/material/material.min.js"></script>
     <!-- end js include path -->
</body>
</html>
<?php } ?>