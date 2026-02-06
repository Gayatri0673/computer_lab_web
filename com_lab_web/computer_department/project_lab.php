<?php
$conn = mysqli_connect("localhost", "root", "", "computer");
if (isset($_POST['delete_btn'])) {
    $delete_id = $_POST['delete_id'];
    $lab_query = "DELETE FROM project_lab WHERE accession_no ='$delete_id'";
    $lab_query_run = mysqli_query($conn, $lab_query);
    if ($lab_query_run) {
        header("Location: project_lab.php");
    } else {
        header("Location: project_lab.php");
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
<?php
include('../common/header_link.php');
?>
<link rel="stylesheet" href="../assets/css/search_bar.css">

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            <?php
            include '../common/co_hod_sidebar.php';
            ?>
            <!-- / Menu -->
            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                <?php
                include '../common/header.php';
                ?>
                <!-- / Navbar -->
                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-p-x flex-grow-1 container-p-y">
                        <h4 class="text-muted fw-bold py-3 mb-4">PROJECT LAB</h4>
                        <!-- Hoverable Table rows -->
                        <div class="card">
                            <div class="row">
                                <div class="col-lg-6 ">
                                </div>
                                <div class="col-lg-6 d-flex justify-content-end">
                                    <?php
                                    include '../common/search_bar.php';
                                    ?>

                                    <a href="./add_project_lab.php">
                                        <button type="button" class="btn btn-primary m-4">ADD+</button>
                                    </a>
                                    <a href="./project_lab_status.php">
                                        <button type="button" class="btn btn-primary m-4">Status</button>
                                    </a>
                                    <div class="text-center">
                                        <button onclick="window.print()" class="btn btn-primary m-4">Print</button>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $conn = mysqli_connect("localhost", "root", "", "computer");
                            $query = "SELECT * FROM project_lab";
                            $project_run = mysqli_query($conn, $query);
                            $sr = 1;
                            if (mysqli_num_rows($project_run) > 0) {
                            ?>
                                <div class="table-responsive text-nowrap">
                                    <table id="lab-table" class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Sr.No</th>
                                                <th>Name of Equipment</th>
                                                <th>Accession No.</th>
                                                <th>System no</th>
                                                <th>GRN no</th>
                                                <th>Unit Rate</th>
                                                <th>Quantity</th>
                                                <th>Amount</th>
                                                <th>Remark</th>
                                                <th>Configration</th>
                                                <th>Maintenance</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">
                                            <?php

                                            while ($project_row = mysqli_fetch_array($project_run)) {
                                            ?>
                                                <tr>
                                                    <td><?= $sr++; ?></td>
                                                    <td><?php echo $project_row["name_of_equipment"]; ?></td>
                                                    <td><?php echo $project_row["accession_no"]; ?></td>
                                                    <td><?php echo $project_row["System_no"]; ?></td>
                                                    <td><?php echo $project_row["GRN_no"]; ?></td>
                                                    <td><?php echo $project_row["Unit_Rate"]; ?></td>
                                                    <td><?php echo $project_row["Quantity"]; ?></td>
                                                    <td><?php echo $project_row["Amount"]; ?></td>
                                                    <td><?php echo $project_row["Remark"]; ?></td>
                                                    <td><?php echo $project_row["configration"]; ?></td>
                                                    <td><?php echo $project_row["Maintenance"]; ?></td>
                                                    <td>
                                                        <div>
                                                            <a href="show.php?lab=project_lab&accession_no=<?= $project_row['accession_no']; ?>">
                                                                <button class="btn rounded-pill btn-success me-1">Show</button>
                                                            </a>
                                                            <a href="./edit_project_lab.php?accession_no=<?php echo $project_row["accession_no"]; ?>" class="text-white">
                                                                <button type="button" class="btn rounded-pill btn-primary">
                                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                                </button>
                                                            </a>
                                                            <form action="project_lab.php" method="POST" class="d-lg-inline">
                                                                <input type="hidden" name="delete_id" value="<?php echo $project_row['accession_no']; ?>">
                                                                <button type="submit" name="delete_btn" class="btn rounded-pill btn-danger">Delete</button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                <?php
                            } else {
                                echo "no record found";
                            }
                                ?>
                                </div>
                        </div>



                        <hr class="my-5" />


                        <!-- Footer -->
                        <!-- Footer -->


                        <div class="content-backdrop fade"></div>
                    </div>
                    <!-- Content wrapper -->
                </div>
                <!-- / Layout page -->
            </div>

            <!-- Overlay -->
            <div class="layout-overlay layout-menu-toggle"></div>
        </div>

</body>

</html>
<!DOCTYPE html>