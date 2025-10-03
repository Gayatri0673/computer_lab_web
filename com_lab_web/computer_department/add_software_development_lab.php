<?php
 // DB connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['student_name'];
    $percentage = $_POST['percentage'];
    $class_awarded = $_POST['class_awarded'];
    $department = $_POST['department'];
    $year = $_POST['year'];

    
    $query = "INSERT INTO toppers (student_name, percentage, class_awarded, department, year) 
              VALUES ('$name', '$percentage', '$class_awarded', '$department', '$year')";
    if (mysqli_query($conn, $query)) {
        header("Location: show_Toppers.php?msg=added");
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr"
    data-theme="theme-default" data-assets-path="../assets/"
    data-template="vertical-menu-template-free">
<?php include '../common/header_link.php'; ?>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <?php include '../common/sidebar.php'; ?>
            <div class="layout-page">
                <?php include '../common/header.php'; ?>
                <div class="container">
                    <div class="card my-4">
                        <h5 class="card-header">ADD Details</h5>
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
                                    <button type="submit" class="btn btn-primary">Add</button>
                                    <a href="./software_development_lab.php" class="btn btn-secondary">Back</a>
                                </div>
                            </form>



                        </div>
                    </div>
                </div>
            </div>
           
</body>

</html>