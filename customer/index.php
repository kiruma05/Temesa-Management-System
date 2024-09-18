<?php include('includes/header.php')?>
<?php include('../includes/session.php')?>
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

	<div class="main-container">
		<div>

			<h1 class="card-box pd-20 height-100-p mb-30"><img src="../vendors/images/TEMELOGO.JPG" alt=""> Customer Dashboard</h1>
		</div>
		<div class="pd-ltr-20">
			<div class="card-box pd-20 height-100-p mb-30">
				<div class="row align-items-center">
					<div class="col-md-4 user-icon">
						<img src="../vendors/images/Temesa.PNG" alt="">
					</div>
					<div class="col-md-8">

						<?php
						// Replace this section with customer-specific information
						?>

						<h4 class="font-20 weight-500 mb-10 text-capitalize">
							Welcome back, Customer Name
						</h4>
						<p class="font-18 max-width-600">This is your dashboard where you can manage your vehicle services and account information.</p>
					</div>
				</div>
			</div>

			<div class="card-box mb-30">
				<div class="pd-20">
					<h2 class="text-blue h4">Your Vehicle Services</h2>
				</div>
				<div class="pb-20">
					<table class="data-table table stripe hover nowrap">
						<thead>
							<tr>
								<th class="table-plus">Vehicle Type</th>
								<th>Vehicle Name</th>
								<th>Service Type</th>
								<th>Service Date</th>
								<th>Service Status</th>
								<th class="datatable-nosort">Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Sedan</td>
								<td>My Sedan Car</td>
								<td>Oil Change</td>
								<td>2023-09-30</td>
								<td>Completed</td>
								<td>
									<div class="table-actions">
										<a title="View Details" href="service_details.php"><i class="icon-copy dw dw-eye"></i></a>
									</div>
								</td>
							</tr>
							<tr>
								<td>SUV</td>
								<td>Family SUV</td>
								<td>Tire Replacement</td>
								<td>2023-10-05</td>
								<td>Pending</td>
								<td>
									<div class="table-actions">
										<a title="View Details" href="service_details.php"><i class="icon-copy dw dw-eye"></i></a>
									</div>
								</td>
							</tr>
							<!-- Add more rows for other services -->
						</tbody>
					</table>
				</div>
			</div>

			<div class="card-box mb-30">
				<div class="pd-20">
					<h2 class="text-blue h4">Your Account Information</h2>
				</div>
				<div class="pb-20">
					<!-- Display customer account information here -->
					<!-- For example: Account balance, personal details, contact info, etc. -->
				</div>
			</div>

			<?php include('includes/footer.php'); ?>
		</div>
	</div>
	<!-- js -->

	<?php include('includes/scripts.php')?>
</body>
</html>
