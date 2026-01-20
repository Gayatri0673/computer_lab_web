<?php
$conn = mysqli_connect("localhost", "root", "", "computer");

$accession_no = trim($_GET['accession_no']);
$project_query = "SELECT * FROM power_electronics_laboratory WHERE accession_no ='$accession_no'";
$project_query_run = mysqli_query($conn, $project_query);

if (isset($_POST['edit_btn'])) {
    // Correct POST variables
    $update_acc_no = $_POST['update_acc_no'];
    $Name_of_Equipment = $_POST['Name_of_Equipment'];
    $accession_no = $_POST['accession_no'];
    $Configration = $_POST['Configration'];
    $Maintenance = $_POST['Maintenance'];
    $System_no = $_POST['System_no'];
    $GRN_no = $_POST['GRN_no'];
    $Unit_Rate = $_POST['Unit_Rate'];
    $Quantity = $_POST['Quantity'];
    $Amount = $_POST['Amount'];
    $Remark = $_POST['Remark'];

    // Correct UPDATE SQL query
    $query_update ="UPDATE power_electronics_laboratory SET 
            name_of_equipment = '$Name_of_Equipment',
            accession_no = '$accession_no',
            configration = '$Configration',
            Maintenance = '$Maintenance',
            System_no = '$System_no',
            GRN_no = '$GRN_no',
            Unit_Rate = '$Unit_Rate',
            Quantity = '$Quantity',
            Amount = '$Amount',
            Remark = '$Remark'
        WHERE accession_no = '$update_acc_no'";

    $query_update_run = mysqli_query($conn, $query_update);

    if ($query_update_run) {
        echo 'Data updated';
        header("Location: power_electronics_laboratory.php");
    } else {
        echo 'Data NOT updated: ' . mysqli_error($conn);
    }
}



if (mysqli_num_rows($project_query_run)) {

    while ($row = mysqli_fetch_array($project_query_run)) {

?>


        <!DOCTYPE html>
        <html
            lang="en"
            class="light-style layout-menu-fixed"
            dir="ltr"
            data-theme="theme-default"
            data-assets-path="../assets/"
            data-template="vertical-menu-template-free">
        <?php include '../../common/header_link.php'; ?>

        <body>
            <div class="layout-wrapper layout-content-navbar">
                <div class="layout-container">
                    <!-- Sidebar -->
            <?php include '../../common/sidebar_principal.php';?>
                    <!-- / Sidebar -->

                    <div class="layout-page">
                        <!-- Navbar -->
                        <?php include '../../common/header.php'; ?>
                        <!-- / Navbar -->

                        <div class="container-p-x">
                            <div class="card my-4">
                                <h5 class="card-header">Edit Details</h5>
                                <div class="card-body">

                                    <form action="edit_power_electronics_laboratory.php" method="POST">
                                        <div class="row mt-3">
                                            <div class="col-lg-6">
                                                <input type="hidden" class="form-control" name="update_acc_no" value="<?php echo $row['accession_no']; ?>" />

                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" name="Name_of_Equipment" value="<?php echo $row['name_of_equipment']; ?>" />
                                                    <label>Name of Equipment</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-floating mb-3">
                                                    <input type="number" step="0.01" class="form-control" name="accession_no" value="<?php echo $row['accession_no']; ?>" />
                                                    <label>Accession No.</label>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" name="Configration" value="<?php echo $row['configration']; ?>" />
                                                    <label>Configration</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-floating mb-3">
                                                    <input type="number" step="0.01" class="form-control" name="Maintenance" value="<?php echo $row['maintenance']; ?>" />
                                                    <label>Maintenance</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" name="System_no" value="<?php echo $row['system_no']; ?>" />
                                                    <label>System no</label>
                                                </div>
                                            </div>


                                            <div class="col-lg-4">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" name="GRN_no" value="<?php echo $row['GRN_no']; ?>" />
                                                    <label>GRN no</label>
                                                </div>
                                            </div>



                                            <div class="col-lg-4">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" name="Unit_Rate" value="<?php echo $row['Unit_Rate']; ?>" />
                                                    <label>Unit Rate</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" name="Quantity" value="<?php echo $row['Quantity']; ?>" />
                                                    <label>Quantity</label>
                                                </div>
                                            </div>


                                            <div class="col-lg-4">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" name="Amount" value="<?php echo $row['Amount']; ?>" />
                                                    <label>Amount</label>
                                                </div>
                                            </div>


                                            <div class="col-lg-4">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" name="Remark" value="<?php echo $row['Remark']; ?>" />
                                                    <label>Remark</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" name="edit_btn" class="btn btn-primary">Edit</button>
                                            <a href="./power_electronics_laboratory.php" class="btn btn-secondary">Back</a>
                                        </div>
                                    </form>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <?php
      }
    } else {
        echo "no data found by this accession number";
    }
    ?>
        </body>
     
            
        </html>