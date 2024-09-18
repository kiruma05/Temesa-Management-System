<?php
include('includes/header.php');
include('../includes/session.php');

if (isset($_POST['add_customer'])) {
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
    $status = $_POST['status'];
    $location = $_POST['location'];

    // Insert the customer's information into the 'customer_details' table
    $query = mysqli_query($conn, "INSERT INTO customer_details (vehicle_id, vehicle_type, vehicle_name, customer_name, customer_address, customer_phone, customer_email, service_type, institution_from, repair_payment, status, location) VALUES ('$vehicle_id', '$vehicle_type', '$vehicle_name', '$customer_name', '$customer_address', '$customer_phone', '$customer_email', '$service_type', '$institution_from', '$repair_payment', '$status', '$location')") or die(mysqli_error());

    if ($query) {
        echo "<script>alert('Customer Record Successfully Added');</script>";
        echo "<script>window.location = 'customer.php';</script>";
    }
}
?>

<!-- Rest of the HTML code remains the same with necessary modifications -->
<!DOCTYPE html>
<html>
<head>
    <!-- Include your head content here -->
</head>
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

    <!-- Include your navigation and sidebar here -->
    <?php include('includes/navbar.php')?>

	<?php include('includes/right_sidebar.php')?>

	<?php include('includes/left_sidebar.php')?>

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
                                    <li class="breadcrumb-item active" aria-current="page">Customer Module</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="pd-20 card-box mb-30">
                    <div class="clearfix">
                        <div class="pull-left">
                            <h4 class="text-blue h4">Customer Form</h4>
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
                    <input name="customer_address" class="form-control wizard-required" required="true" autocomplete="off">
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
                    <input name="appointment" type="text" class="form-control wizard-required" required="true" autocomplete="off">
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
        <!-- <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="form-group">
                    <label>Upload Image:</label>
                    <input name="image" type="file" class="form-control" accept="image/*">
                </div>
            </div>
        </div> -->
        <div class="row">
            <!-- <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    <label>Status:</label>
                    <select name="status" class="custom-select form-control" required="true" autocomplete="off">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
            </div> -->
        </div>
        <!-- <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    <label>Location:</label>
                    <input name="location" type="text" class="form-control" autocomplete="off">
                </div>
            </div>
        </div> -->
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    <label style="font-size:16px;"><b></b></label>
                    <div class="modal-footer justify-content-center">
                        <button class="btn btn-primary" name="add_customer" id="add_customer" data-toggle="modal">Add&nbsp;Customer</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>
</body>
</html>

                    </div>
                </div>
            </div>
            <?php include('includes/footer.php'); ?>
            <!-- Include your footer and script includes here -->
        </div>
    </div>
    <?php include('includes/scripts.php')?>
</body>
</html>
