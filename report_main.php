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
    <!-- bootstrap -->
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/bootstrap-editable/bootstrap-editable/css/bootstrap-editable.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/bootstrap-editable/inputs-ext/address/address.css" rel="stylesheet" type="text/css" />
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="assets/css/material_style.css">
	<!-- Theme Styles -->
    <link href="assets/css/theme/light/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
    <link href="assets/css/theme/light/style.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/theme/light/theme-color.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/summernote/summernote.css" rel="stylesheet">
    <!-- favicon  -->
    <link rel="shortcut icon" href="http://radixtouch.in/templates/admin/smart/source/assets/img/favicon.ico" />
	
</head>
<!-- END HEAD -->
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
    <div class="page-wrapper">
        <!-- start header -->
		<?php include("topmenu.php")?>
        <!-- end header -->
        <!-- start page container -->
        <div class="page-container">
 			<!-- start sidebar menu -->
 			<?php include("sidemenu.php") ?>
			 <!-- end sidebar menu -->
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                     <h2 style="margin:0px 0px 0px 0px; text-align:center; font-weight: 900;"> Store Reports </h2>
                          <div class="card text-white bg-primary mb-4 col-md-4" style="width: 378px; margin:0px 20px 0px 2px; display:inline-block;">
                               <div class="card-header">Items Report</div>
                                 <div class="card-body">
                                   <h5 class="card-title">All The Item report</h5>
                                <p > Make report All the item in the store .
                                </p>                           
                               </div>
                               <form action="item_report.php" method="POST"><button name="Print"  style="margin-left:120px;  color: red">Report</button> </form>                      
                           </div>
                           <div class="card text-white bg-primary mb-4 col-md-4" style="width: 378px; margin:100px 20px 20px 2px; display:inline-block;">
                               <div class="card-header">Store Request Report</div>
                                 <div class="card-body">
                                <p >Make report All the store reqeust report </p>                           
                               </div>
                               <form action="report_store_request_all.php" method="POST"><button name="Print"  style="margin-left:120px;  color: red">Report</button> </form>                      
                           </div>
                           <div class="card text-white bg-primary mb-4 col-md-4" style="width: 378px; margin:0px  20px 20px 2px; display:inline-block;">
                               <div class="card-header">All The Purchase Order Report</div>
                                 <div class="card-body">
                                   <h5 class="card-title">All The purchase order report</h5>
                                <p > Make report All the purchase order in the store .
                                </p>    
                                </div>
                                <form action="report_purchase_order_all.php" method="POST"><button name="Print"  style="margin-left:120px;  color: red">Report</button> </form>                      
                           </div> 
                           <div class="card text-white bg-primary mb-4 col-md-4" style="width: 378px; margin:0px  20px 20px 2px; display:inline-block;">
                               <div class="card-header">Order Report</div>
                                 <div class="card-body">
                                   <h5 class="card-title">Make order by Date</h5>
                                   <form action="report_order.php" method="POST">
                                <p > Start-Date : <input type="date" name="startDate" >
                                </p>  
                                <p > &nbsp; End-Date :&nbsp; <input type="date" name="endDate">
                                </p>   
                                <h5 class="card-title">Make order by Id</h5> 
                                <p > &nbsp; Id :&nbsp; <input type="input" name="order_id">
                                </p>                         
                               </div>
                               <button name="Print"  style="margin-left:120px;  color: red">Report</button> </form>                      
                           </div>

                           <div class="card text-white bg-primary mb-4 col-md-4" style="width: 378px; margin:0px 20px 20px 2px; display:inline-block;">
                               <div class="card-header">Store Request</div>
                                 <div class="card-body">

                                   <h5 class="card-title">Make report by Date</h5>
                                   <form action="report_store_request.php" method="POST">
                                <p > Start-Date : <input type="date" name="startDate" >
                                </p>  
                              
                                <p > &nbsp; End-Date :&nbsp; <input type="date" name="endDate">
                                </p>   
                                <h5 class="card-title">Make report by Id</h5> 
                                <p > &nbsp; Id :&nbsp; <input type="input" name="id">
                                </p>                         
                               </div>
                               <button name="Print"  style="margin-left:120px;  color: red">Report</button> </form>                      
                           </div>
                           <div class="card text-white bg-primary mb-4 col-md-4" style="width: 378px; margin:0px 0px 0px 2px; display:inline-block;">
                               <div class="card-header">Purchase Order</div>
                                 <div class="card-body">
                                   <h5 class="card-title">Make report by Date</h5>
                                   <form action="report_purchase_order.php" method="POST">
                                <p > Start-Date : <input type="date" name="startDate" >
                                </p>  
                                <p > &nbsp; End-Date :&nbsp; <input type="date" name="endDate">
                                </p>   
                                <h5 class="card-title">Make report by Id</h5> 
                                <p > &nbsp; Id :&nbsp; <input type="input" name="purchase_order_id">
                                </p>                         
                               </div>
                               <button name="Print"  style="margin-left:120px;  color: red">Report</button> </form>                      
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
       <?php include("footer.php")?>
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
    <!-- Common js-->
	<script src="assets/js/app.js" ></script>
    <script src="assets/js/layout.js" ></script>
	<script src="assets/js/theme-color.js" ></script>
	<!-- Material -->
	<script src="assets/plugins/material/material.min.js"></script>
    <!-- summernoe -->
    <script src="assets/plugins/summernote/summernote.js" ></script>
    <script src="assets/js/pages/summernote/summernote-data.js" ></script>
     <!-- end js include path -->
</body>
</html>

<?php } ?>