<?php require 'db.php'; ?>
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
    <link href="assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="assets/css/material_style.css">
	<!-- Theme Styles -->
    <link href="assets/css/theme/light/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />	
    <link href="assets/css/theme/light/style.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/pages/formlayout.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/theme/light/theme-color.css" rel="stylesheet" type="text/css" />
	<!-- favicon -->
	<link rel="shortcut icon" href="http://radixtouch.in/templates/admin/smart/source/assets/img/favicon.ico" /> 
</head>
<!-- END HEAD -->
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
    <div class="page-wrapper">
        <!-- start header -->
		<?php include("topmenu.php") ?>
        <!-- end header -->
       
        <!-- start page container -->
        <div class="page-container">
 			<!-- start sidebar menu -->
 			<?php include("sidemenu.php")?>
			 <!-- end sidebar menu -->
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Add Order</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-Order" href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-Order" href="#">Order</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Add Order</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                                          						
                                <div class="card-body" id="bar-parent">
								<?php 
   if( isset($_SESSION['adminmessage']) AND !empty($_SESSION['adminmessage']) ){
        echo $_SESSION['adminmessage'];  
unset( $_SESSION['adminmessage'] );		
	}

?>  
                                    <form action="" method=POST id="form_sample_1" class="form-horizontal" enctype="multipart/form-data">

                                    <div class="form-group row">
                                                <label class="control-label col-md-3">Id
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="number" name="purchase_order_id" placeholder="enter purchase order id" class="form-control input-height"  /> </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Item Id
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="number" name="item_id" placeholder="enter item id" class="form-control input-height"  /> </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Vendor
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="vendor" placeholder=" enter vendor" class="form-control input-height" /> </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">created_date
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">     
                                                <input type="date" name="created_date" placeholder=" enter created date" class="form-control input-height" /> </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Unit Price
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">     
                                                <input type="text" name="unit_price" placeholder=" enter unit price" class="form-control input-height" /> </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Quantity
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">     
                                                <input type="number" name="quantity" placeholder=" enter quantity" class="form-control input-height" /> </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Total
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="number" name="total" placeholder=" enter total" class="form-control input-height"  /> </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Amount
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="number" name="amount" placeholder=" enter amount" class="form-control input-height" /> </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">pre By Name
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">     
                                                <input type="text" name="pre_by_name" placeholder=" enter prepared by name" class="form-control input-height" /> </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">pre By title
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">     
                                                <input type="text" name="pre_by_title" placeholder=" enter prepaed by title" class="form-control input-height" /> </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Appr By Name
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">     
                                                <input type="text" name="appr_by_name" placeholder=" enter approved by name" class="form-control input-height" /> </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Appr By Title
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">     
                                                <input type="text" name="appr_by_title" placeholder="approved by title"  class="form-control input-height" /> </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3"> Author By Name
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">     
                                                <input type="text" name="author_by_name" placeholder="author by name" class="form-control input-height" /> </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Author By title
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">     
                                                <input type="text" name="author_by_title" placeholder="author by title" class="form-control input-height" /> </div>
                                            </div>
											  <div class="form-group row">
                                                <label class="control-label col-md-3">Description
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                <textarea id="summernote" style="tabsize:2;height:70" name="description" placeholder="Item details" rows="5" ></textarea>
                                                 </div>
                                                 </div>
                                            
											</div>
											<div class="form-actions">
                                            <div class="row">
                                                <div class="offset-md-3 col-md-9">
                                                    <input type="submit" name="submit" class="btn btn-info">
                                                    <button type="button" class="btn btn-default">Cancel</button>
                                                </div>
                                            	</div>
                                       		 </div>
										</div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page content -->
            
            <?php
if(isset($_POST['submit'])){
	
    $purchase_order_id = $mysqli->escape_string($_POST['purchase_order_id']);
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
    $description = $mysqli->escape_string($_POST['description']);

	
// active is 0 by DEFAULT (no need to include it here)
    $sql = "INSERT INTO purchase_order (purchase_order_id, item_id vendor, unit_price, quantity, total, amount, created_date, pre_by_name, pre_by_title, appr_by_name, appr_by_title, author_by_name, author_by_title, description ) " 
            . "VALUES ('$purchase_order_id','$item_id','$vendor','$unit_price','$quantity','$total','$amount','$created_date','$pre_by_name','$pre_by_title','$appr_by_name'.'$appr_by_title','$author_by_name','$author_by_title','$description')";
  
}


if ( $mysqli->query($sql) ){

    echo "Successfully.";
}
else{
    echo "Something went wrong. Please try again later.";
}
?>
        <!-- end page container -->
        <!-- start footer -->
       <?php include("footer.php")?>
        <!-- end footer -->
    </div>
    <!-- start js include path -->
    <script src="assets/plugins/jquery/jquery.min.js" ></script>
    <script src="assets/plugins/popper/popper.js" ></script>
    <script src="assets/plugins/jquery-blockui/jquery.blockui.min.js" ></script>
    <script src="assets/plugins/jquery-validation/js/jquery.validate.min.js" ></script>
    <script src="assets/plugins/jquery-validation/js/additional-methods.min.js" ></script>
    <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- bootstrap -->
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js" ></script>
    <script src="assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js" ></script>
    <script src="assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"  charset="UTF-8"></script>
    <script src="assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker-init.js"  charset="UTF-8"></script>
    <!-- Common js-->
	<script src="assets/js/app.js" ></script>
    <script src="assets/js/pages/validation/form-validation.js" ></script>
    <script src="assets/js/layout.js" ></script>
	<script src="assets/js/theme-color.js" ></script>
	<!-- Material -->
	<script src="assets/plugins/material/material.min.js"></script>
     <!-- end js include path -->
</body>
</html>