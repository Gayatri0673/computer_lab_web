<?php


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM toppers WHERE id='$id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "No record found!";
        exit();
    }
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['student_name'];
    $percentage = $_POST['percentage'];
    $class_awarded = $_POST['class_awarded'];
    $department = $_POST['department'];
    $year = $_POST['year'];

    $update_query = "UPDATE toppers 
                     SET student_name='$name', percentage='$percentage', class_awarded='$class_awarded', 
                         department='$department', year='$year' 
                     WHERE id='$id'";

    if (mysqli_query($conn, $update_query)) {
        header("Location: show_Toppers.php"); // redirect back
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html
    lang="en"
    class="light-style layout-menu-fixed"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="../assets/"
    data-template="vertical-menu-template-free">
<?php include '../common/header_link.php'; ?>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Sidebar -->
            <?php include '../common/sidebar.php'; ?>
            <!-- / Sidebar -->

            <div class="layout-page">
                <!-- Navbar -->
                <?php include '../common/header.php'; ?>
                <!-- / Navbar -->

                <div class="container">
                    <div class="card my-4">
                        <h5 class="card-header">Edit Details</h5>
                        <div class="card-body">
                            <form method="POST">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="Nameo_f_Equipment" required />
                                            <label>Name of Equipment</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="number" step="0.01" class="form-control" name="Accession_No" required />
                                            <label>Accession No.</label>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="Configration" required />
                                            <label>Configration</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="number" step="0.01" class="form-control" name="Maintenance" required />
                                            <label>Maintenance</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="System_no" required />
                                            <label>System no</label>
                                        </div>
                                    </div>


                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="GRN_no" required />
                                            <label>GRN no</label>
                                        </div>
                                    </div>



                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="Unit_Rate" required />
                                            <label>Unit Rate</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="Quantity" required />
                                            <label>Quantity</label>
                                        </div>
                                    </div>


                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="Amount" required />
                                            <label>Amount</label>
                                        </div>
                                    </div>


                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="Remark" required />
                                            <label>Remark</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Edit</button>
                                    <a href="show_Toppers.php" class="btn btn-secondary">Back</a>
                                </div>
                            </form>



                        </div>
                    </div>
                </div>
            </div>
            
</body>

</html>