<?php include('includes/header.php'); ?>
<?php include('../includes/session.php'); ?>
<?php
if (isset($_GET['delete'])) {
    $delete = $_GET['delete'];
    $sql = "DELETE FROM customer_details WHERE customer_id = " . $delete;
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('Customer deleted Successfully');</script>";
        echo "<script type='text/javascript'> document.location = 'customers.php'; </script>";
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

<?php include('includes/navbar.php'); ?>

<?php include('includes/right_sidebar.php'); ?>

<?php include('includes/left_sidebar.php'); ?>

<div class="mobile-menu-overlay"></div>

<div class="main-container">
    <div class="pd-ltr-20">
        <div class="title pb-20">
            <h2 class="h3 mb-0">Customer Management</h2>
        </div>
        <div class="row pb-10">
            <div class="col-xl-12 col-lg-12 col-md-12 mb-20">
                <div class="card-box height-100-p widget-style3">

                    <?php
                    $sql = "SELECT customer_id FROM customer_details";
                    $query = mysqli_query($conn, $sql);
                    $customerCount = mysqli_num_rows($query);
                    ?>

                    <div class="d-flex flex-wrap">
                        <div class="widget-data">
                            <div class="weight-700 font-24 text-dark"><?php echo htmlentities($customerCount); ?></div>
                            <div class="font-14 text-secondary weight-900 h4 text-shadow-danger">Total Customers</div>
                        </div>
                        <div class="widget-icon">
                            <div class="icon" data-color="#00eccf"><i class="icon-copy dw dw-user-2"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add more widgets for customer statistics if needed -->
        </div>

        <div class="card-box mb-30">
            <div class="pd-20">
                <h2 class="text-blue h4">ALL CUSTOMERS</h2>
            </div>
            <div class="pb-20">
                <table class="data-table table stripe hover nowrap">
                    <thead>
                    <tr>
                        <th class="table-plus">CUSTOMER NAME</th>
                        <th>EMAIL</th>
                        <th>PHONE NUMBER</th>
                        <th>VEHICLE TYPE</th>
                        <th>SERVICE TYPE</th>
                        <th>MECHANIC NAME</th>
                        <th class="datatable-nosort">ACTION</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $customerQuery = mysqli_query($conn, "SELECT * FROM customer_details");
                    while ($row = mysqli_fetch_array($customerQuery)) {
                        $id = $row['customer_id'];
                        ?>

                        <tr>
                            <td class="table-plus">
                                <div class="name-avatar d-flex align-items-center">
                                    <div class="avatar mr-2 flex-shrink-0">
                                        <!-- Add customer avatar image if available -->
                                    </div>
                                    <div class="txt">
                                        <div class="weight-600"><?php echo $row['customer_name']; ?></div>
                                    </div>
                                </div>
                            </td>
                            <td><?php echo $row['customer_email']; ?></td>
                            <td><?php echo $row['customer_phone']; ?></td>
                            <td><?php echo $row['vehicle_type']; ?></td>
                            <td><?php echo $row['service_type']; ?></td>
                            <td><?php echo $row['customer_address']; ?></td>
                            <td>
                                <div class="dropdown">
                                    <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                       href="#" role="button" data-toggle="dropdown">
                                        <i class="dw dw-more"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                        <a class="dropdown-item" href="edit_customer.php?edit=<?php echo $row['customer_id']; ?>"><i class="dw dw-edit2"></i> Edit</a>
                                        <a class="dropdown-item" href="customers.php?delete=<?php echo $row['customer_id']; ?>"><i class="dw dw-delete-3"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <?php include('includes/footer.php'); ?>
    </div>
</div>
<!-- js -->
<?php include('includes/scripts.php') ?>
</body>
</html>
