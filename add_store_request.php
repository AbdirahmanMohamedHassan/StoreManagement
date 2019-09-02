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
    <style >
    select {

    background-color: white; /* fallback color if gradients are not supported */
      background-position: center right;
    background-repeat: no-repeat;
    border: 1px solid #AAA;
    border-radius: 2px;
    box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
    color: #555;
    font-size: inherit;
    margin: 0;
    overflow: hidden;
    padding-top: 2px;
    padding-bottom: 2px;
    text-overflow: ellipsis;
    white-space: nowrap;
    width:200px
}
    </style>   
     <script>
        function ItemQuantity(d){
            window.location.href='?item_id='+d.value;
        }
     </script>

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
                                <div class="page-title">Add Store Request</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-Store Request" href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-Store Request" href="#">Store Request</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Add Store Request</li>
                            </ol>
                        </div>
                    </div>         
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">   						
                                <div class="card-body" id="bar-parent">
                                    <form action="process_store_request.php" method="POST"   class="form-horizontal" enctype="multipart/form-data">
                                        <div class="form-body">
                                        <div class="form-group row">
                                        <label class="control-label col-md-3">Select Item Id:
                                                    <span class="required"> * </span>
                                                </label>
                                        <div class="col-md-5">
                                           <?php

    $sql = "SELECT * FROM item";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        echo "<select name='item_id' id='select' onchange='ItemQuantity(this)'>";
           // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "<option  value='" . $row['item_id'] . "'>" . $row['item_id'] . "</option>";
        }
        echo "</select>";

        
        

    } 
   
    $conn->close();
    ?>
</div>
</div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Quantity
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="quantity" placeholder="enter quantity" class="form-control input-height" required/> </div>
                                         
											</div> 
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Department
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                <input type="text" name="department" placeholder="enter department" class="form-control input-height" required /> </div>
                                            
											</div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Creation Date
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="date" name="created_date" placeholder="enter creation date" class="form-control input-height" required /> </div>
                                         
											</div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Requested by
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                <input type="text" name="requested_by" placeholder="enter requested by" class="form-control input-height" required /> </div>
                                             </div>
                                             <div class="form-group row">
                                                <label class="control-label col-md-3">Approved by
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                <input type="text" name="approved_by" placeholder="enter approved by" class="form-control input-height" required /> </div>
                                             </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Approved Date
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                <input type="date" name="approved_date" placeholder="enter approved date" class="form-control input-height" required /> </div>
                                             </div>
                                            
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Occupation 
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                 <input type="text" name="occupation" placeholder="enter occupation" class="form-control input-height" /> </div>
                                               </div>
                                        
											<div class="form-actions">
                                            <div class="row">
                                                <div class="offset-md-3 col-md-9">
                                                    <input type="submit" name="submit" value="register"  class="btn btn-info" >
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

<?php } ?>