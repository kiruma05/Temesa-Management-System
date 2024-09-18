<?php
include('includes/header.php');
include('../includes/session.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect data from the form
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

    // Prepare and execute an SQL INSERT query to insert the customer data into the database
    $sql = "INSERT INTO customer_details (vehicle_id, vehicle_type, vehicle_name, customer_name, customer_address, customer_phone, customer_email, service_type, institution_from, repair_payment)
            VALUES ('$vehicle_id', '$vehicle_type', '$vehicle_name', '$customer_name', '$customer_address', '$customer_phone', '$customer_email', '$service_type', '$institution_from', '$repair_payment')";

    if ($conn->query($sql) === TRUE) {
        // Insert successful, you can redirect the user to a success page or perform other actions
        header("Location: success.php");
        exit();
    } else {
        // Error in SQL query, you can redirect the user to an error page or display an error message
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    // If the form was not submitted via POST, you can redirect the user to an error page or handle the error as needed
    header("Location: error.php");
    exit();
}
?>


<!-- The rest of your HTML code remains unchanged -->


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
        <div class="pd-ltr-20">
            <div class="card-box pd-20 height-100-p mb-30">
                <!-- ... Card box content ... -->
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card-box pd-20 min-height-200px">
                        <h2 class="text-blue h4">Customer Details Form</h2>
                        <form action="process_customer.php" method="POST">
                            <div class="form-group">
                                <label for="vehicle_id">Vehicle ID</label>
                                <input type="text" name="vehicle_id" id="vehicle_id" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="vehicle_type">Vehicle Type</label>
                                <input type="text" name="vehicle_type" id="vehicle_type" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="vehicle_name">Vehicle Name</label>
                                <input type="text" name="vehicle_name" id="vehicle_name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="customer_name">Customer Name</label>
                                <input type="text" name="customer_name" id="customer_name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="customer_address">Customer Address</label>
                                <input type="text" name="customer_address" id="customer_address" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="customer_phone">Customer Phone Number</label>
                                <input type="text" name="customer_phone" id="customer_phone" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="customer_email">Customer Email</label>
                                <input type="email" name="customer_email" id="customer_email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="service_type">Service Type</label>
                                <input type="text" name="service_type" id="service_type" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="institution_from">Institution From</label>
                                <input type="text" name="institution_from" id="institution_from" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="repair_payment">Repair Payment</label>
                                <input type="text" name="repair_payment" id="repair_payment" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
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




