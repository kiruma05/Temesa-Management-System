<?php include('includes/header.php')?>
<?php include('../includes/session.php')?>
<?php $get_id = $_GET['edit']; ?>
<?php
	if(isset($_POST['add_customerr']))
	{
	
		$vehicle_id = $_POST['vehicle_id'];
		$vehicle_type = $_POST['vehicle_type'];
		$vehicle_name = $_POST['vehicle_name'];
		$customer_name = $_POST['customer_name'];
		$customer_address = $_POST['customer_address'];
		$customer_phone = $_POST['customer_phone'];
		$customer_email = $_POST['customer_email'];
		$service_type = $_POST['service_type'];
		$institution_from = $_POST['institution_from'];
		$repair_payment = $_POST['repair_payment']; 

	$result = mysqli_query($conn,"update customer_details set vehicle_id='$vehicle_id', $vehicle_type='$$vehicle_type', vehicle_name='$vehicle_name', customer_name='$customer_name', customer_address='$customer_address', customer_phone='$customer_phone', customer_email='$customer_email', service_type='$service_type', institution_from='$institution_from', repair_payment='$repair_payment' where customer_id='$get_id'         
		"); 		
	if ($result) {
     	echo "<script>alert('Record Successfully Updated');</script>";
     	echo "<script type='text/javascript'> document.location = 'customer.php'; </script>";
	} else{
	  die(mysqli_error());
   }
		
}

?>

<body>
<div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo"><img src="../vendors/images/logo-temesa.PNG" alt=""></div>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			<div class='percent' id='percent1'>0%</div>
			<div class="loading-text">
				Loading...
			</div>
		</div>
	</div>
	<?php include('includes/navbar.php')?>

	<?php include('includes/right_sidebar.php')?>

	<?php include('includes/left_sidebar.php')?>

	<div class="mobile-menu-overlay"></div>

	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Customer Portal</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active" aria-current="page">Customer Edit</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>

				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Edit Customer</h4>
							<p class="mb-20"></p>
						</div>
					</div>
					<div class="wizard-content">
					<form method="post" action="">
        <section>
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="form-group">
                    <label> Vehicle ID:</label>
                    <input name="vehicle_id" type="text" class="form-control wizard-required" required="true" autocomplete="off">
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="form-group">
                    <label> Vehicle Type:</label>
					<input name="vehicle_type" type="text" class="form-control wizard-required" required="true" autocomplete="off">
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="form-group">
                    <label> Vehicle Name:</label>
                    <input name="vehicle_name" type="text" class="form-control wizard-required" required="true" autocomplete="off">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="form-group">
                    <label> Customer Name:</label>
                    <input name="customer_name" type="text" class="form-control wizard-required" required="true" autocomplete="off">
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="form-group">
                    <label> Customer Email:</label>
                    <input name="customer_email" type="email" class="form-control wizard-required" required="true" autocomplete="off">
                </div>
            </div>
            
            <div class="col-md-4 col-sm-12">
                <div class="form-group">
                    <label> Customer Phone:</label>
                    <input name="customer_phone" type="text" class="form-control wizard-required" required="true" autocomplete="off">
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-md-4 col-sm-12">
                <div class="form-group">
                    <label> Service Type:</label>
                    <input name="service_type" type="text" class="form-control wizard-required" required="true" autocomplete="off">
                </div>
            </div>
        <div class="col-md-4 col-sm-12">
                <div class="form-group">
                    <label> Mechanic Name:</label>
                    <input name="customer_address" class="form-control wizard-required" required="true" autocomplete="off" value="<?php echo $row['customer_address']; ?>">
                </div>
            </div>
            
            <div class="col-md-4 col-sm-12">
                <div class="form-group">
                    <label> Institution From:</label>
                    <input name="institution_from" type="text" class="form-control wizard-required" required="true" autocomplete="off">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="form-group">
                    <label> Repair Payment:</label>
                    <input name="repair_payment" type="number" step="0.01" class="form-control wizard-required" required="true" autocomplete="off">
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="form-group">
                    <label> Add Appointment:</label>
                    <input name="appointment" type="text" class="form-control wizard-required" required="true" autocomplete="off" >
</div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="form-group">
                    <label> Incharge/Manager name:</label>
                    <input name="appointment" type="text" class="form-control wizard-required" required="true" autocomplete="off">
                </div>
            </div>
            <!-- Add more fields here if needed -->
        </div>

        <div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label style="font-size:16px;"><b></b></label>
											<div class="modal-footer justify-content-center">
												<button class="btn btn-primary" name="add_customer" id="add_customer" data-toggle="modal">Update&nbsp;Customer</button>
											</div>
										</div>
									</div>
    </section>
	
</form>
					</div>
				</div>

			</div>
			<?php include('includes/footer.php'); ?>
		</div>
	</div>
	<!-- js -->
	<?php include('includes/scripts.php')?>
</body>
</html>