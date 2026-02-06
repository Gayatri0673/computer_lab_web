<?php
$conn = mysqli_connect("localhost", "root", "", "computer");
if (isset($_POST['delete_btn'])) {
    $delete_id = $_POST['delete_id'];
    $lab_query = "DELETE FROM networking_lab WHERE accession_no ='$delete_id'";
    $lab_query_run = mysqli_query($conn, $lab_query);
    if ($lab_query_run) {
        header("Location: networking_lab.php");
    } else {
        header("Location: networking_lab.php");
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

<?php include('../common/header_link.php'); ?>

<head>
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.6/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" href="../assets/css/search_bar.css">
</head>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            <!-- Sidebar -->
            <?php include '../common/co_hod_sidebar.php'; ?>
            <!-- /Sidebar -->

            <div class="layout-page">

                <!-- Navbar -->
                <?php include '../common/header.php'; ?>
                <!-- /Navbar -->

                <!-- <div class="content-wrapper"> -->
                <div class="container-p-x flex-grow-1 container-p-y">

                    <h4 class="text-muted fw-bold py-3 mb-4">Networking LAB</h4>

                    <div class="card">
                        <div class="row">
                            <div class="col-lg-6 mt-4"></div>

                            <div class="col-lg-6 d-flex justify-content-end">
                                <?php
                                include '../common/search_bar.php';
                                ?>
                                <a href="./add_networking_lab.php">
                                    <button type="button" class="btn btn-primary m-4">ADD+</button>
                                </a>
                                <a href="./networking_lab_status.php">
                                    <button type="button" class="btn btn-primary m-4">Status</button>
                                </a>
                                <div class="text-center">
                                    <button onclick="window.print()" class="btn btn-primary m-4">Print</button>
                                </div>
                            </div>
                        </div>

                        <?php
                        $query = "SELECT * FROM networking_lab";
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
                                            <th>Configuration</th>
                                            <th>Maintenance</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while ($row = mysqli_fetch_array($project_run)) { ?>
                                            <tr>
                                                <td><?= $sr++; ?></td>
                                                <td><?= $row["name_of_equipment"]; ?></td>
                                                <td><?= $row["accession_no"]; ?></td>
                                                <td><?= $row["System_no"]; ?></td>
                                                <td><?= $row["GRN_no"]; ?></td>
                                                <td><?= $row["Unit_Rate"]; ?></td>
                                                <td><?= $row["Quantity"]; ?></td>
                                                <td><?= $row["Amount"]; ?></td>
                                                <td><?= $row["Remark"]; ?></td>
                                                <td><?= $row["configuration"]; ?></td>
                                                <td><?= $row["Maintenance"]; ?></td>
                                                <td class="text-center">
                                                    <a href="show.php?lab=networking_lab&accession_no=<?= $row['accession_no']; ?>" class="btn rounded-pill btn-success me-1">Show</a>
                                                    <a href="./edit_networking_lab.php?accession_no=<?= $row['accession_no']; ?>" class="btn rounded-pill btn-primary">Edit</a>
                                                    <form action="" method="POST" class="d-lg-inline">
                                                        <input type="hidden" name="delete_id" value="<?= $row['accession_no']; ?>">
                                                        <button type="submit" name="delete_btn" class="btn rounded-pill btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php } else {
                            echo "No record found";
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>