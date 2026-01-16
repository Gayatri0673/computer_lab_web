<?php
$conn = mysqli_connect("localhost", "root", "", "computer");

// Check if Save button was clicked
if (isset($_POST['save_status'])) {
    $id = $_POST['id']; // Row sr_no
    $lab = 'status'; // Table name

    // Get dropdown values
    $cpu = $_POST['cpu_status'] ?? '';
    $smps = $_POST['smps_status'] ?? '';
    $monitor = $_POST['monitor_status'] ?? '';
    $keyboard = $_POST['keyboard_status'] ?? '';
    $mouse = $_POST['mouse_status'] ?? '';
    $hard_disk = $_POST['hard_disk_status'] ?? '';
    $ram = $_POST['ram_status'] ?? '';
    $brand_pc = $_POST['brand_pc'] ?? '';
    $remark   = $_POST['remark'] ?? '';

    // Make sure only 'OK' or 'Problem' is stored
    $cpu = ($cpu == 'OK') ? 'OK' : 'Problem';
    $smps = ($smps == 'OK') ? 'OK' : 'Problem';
    $monitor = ($monitor == 'OK') ? 'OK' : 'Problem';
    $keyboard = ($keyboard == 'OK') ? 'OK' : 'Problem';
    $mouse = ($mouse == 'OK') ? 'OK' : 'Problem';
    $hard_disk = ($hard_disk == 'OK') ? 'OK' : 'Problem';
    $ram = ($ram == 'OK') ? 'OK' : 'Problem';

    // Update the database row
    $update_query = "
INSERT INTO networking_lab_status
(`Sr.No`, cpu, smps, monitor, keyboard, mouse, hard_disk, ram, brand_pc, remark)
VALUES
('$id', '$cpu', '$smps', '$monitor', '$keyboard', '$mouse', '$hard_disk', '$ram', '$brand_pc', '$remark')
ON DUPLICATE KEY UPDATE
cpu='$cpu',
smps='$smps',
monitor='$monitor',
keyboard='$keyboard',
mouse='$mouse',
hard_disk='$hard_disk',
ram='$ram',
brand_pc='$brand_pc',
remark='$remark'
";

    $run_update = mysqli_query($conn, $update_query);

    if ($run_update) {
        echo "<script>window.location='networking_lab_status.php';</script>";
    } else {
        echo "<script>window.location='networking_lab_status.php';</script>";
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
                        <h4 class="text-muted fw-bold py-3 mb-4">Networking LAB</h4>

                        <!-- Hoverable Table rows -->
                        <div class="card">
                            <div class="row">
                                <div class="col-lg-6 ">

                                </div>

                                <div class="col-lg-6 d-flex justify-content-end">
                                    <div class="text-center">
                                        <button onclick="window.print()" class="btn btn-primary m-4">Print</button>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $conn = mysqli_connect("localhost", "root", "", "computer");
                            $query = "SELECT * FROM networking_lab";
                            $project_run = mysqli_query($conn, $query);
                            $sr = 1;
                            if (mysqli_num_rows($project_run) > 0) {
                            ?>
                                <div class="table-responsive text-nowrap">
                                    <table class="table table-hover">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Sr.No</th>
                                                    <th>CPU</th>
                                                    <th>SMPS</th>
                                                    <th>Monitor</th>
                                                    <th>Keyboard</th>
                                                    <th>Mouse</th>
                                                    <th>Hard Disk</th>
                                                    <th>RAM</th>
                                                    <th>Brand(PC)</th>
                                                    <th>Remark</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $query_run = mysqli_query($conn, "
    SELECT nl.`Sr.No` AS sr_no,
           s.cpu,s.smps,s.monitor,s.keyboard,s.mouse,
           s.hard_disk, s.ram, s.brand_pc, s.remark
    FROM networking_lab nl
    LEFT JOIN networking_lab_status s ON nl.`Sr.No` = s.`Sr.No`
");
                                                if (mysqli_num_rows($query_run) > 0):
                                                    while ($row = mysqli_fetch_assoc($query_run)):
                                                ?>
                                                        <form method="POST">
                                                            <tr>
                                                                <td><?= $row['sr_no']
                                                                    ?></td>
                                                                <td>
                                                                    <select name="cpu_status" class="form-select" style="width: 109px;">
                                                                        <option value="OK" <?= ($row['cpu'] ?? '') == 'OK' ? 'selected' : '' ?>>OK</option>
                                                                        <option value="Problem" <?= ($row['cpu'] ?? '') == 'Problem' ? 'selected' : '' ?>>Problem</option>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <select name="smps_status" class="form-select" style="width: 109px;">
                                                                        <option value="OK" <?= ($row['smps'] ?? '') == 'OK' ? 'selected' : '' ?>>OK</option>
                                                                        <option value="Problem" <?= ($row['smps'] ?? '') == 'Problem' ? 'selected' : '' ?>>Problem</option>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <select name="monitor_status" class="form-select" style="width: 109px;">
                                                                        <option value="OK" <?= ($row['monitor'] ?? '') == 'OK' ? 'selected' : '' ?>>OK</option>
                                                                        <option value="Problem" <?= ($row['monitor'] ?? '') == 'Problem' ? 'selected' : '' ?>>Problem</option>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <select name="keyboard_status" class="form-select" style="width: 109px;">
                                                                        <option value="OK" <?= ($row['keyboard'] ?? '') == 'OK' ? 'selected' : '' ?>>OK</option>
                                                                        <option value="Problem" <?= ($row['keyboard'] ?? '') == 'Problem' ? 'selected' : '' ?>>Problem</option>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <select name="mouse_status" class="form-select" style="width: 109px;">
                                                                        <option value="OK" <?= ($row['mouse'] ?? '') == 'OK' ? 'selected' : '' ?>>OK</option>
                                                                        <option value="Problem" <?= ($row['mouse'] ?? '') == 'Problem' ? 'selected' : '' ?>>Problem</option>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <select name="hard_disk_status" class="form-select" style="width: 109px;">
                                                                        <option value="OK" <?= ($row['hard_disk'] ?? '') == 'OK' ? 'selected' : '' ?>>OK</option>
                                                                        <option value="Problem" <?= ($row['hard_disk'] ?? '') == 'Problem' ? 'selected' : '' ?>>Problem</option>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <select name="ram_status" class="form-select" style="width: 109px;">
                                                                        <option value="OK" <?= ($row['ram'] ?? '') == 'OK' ? 'selected' : '' ?>>OK</option>
                                                                        <option value="Problem" <?= ($row['ram'] ?? '') == 'Problem' ? 'selected' : '' ?>>Problem</option>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <input type="text" name="brand_pc" value="<?= $row['brand_pc'] ?? '' ?>" class="form-control">
                                                                </td>
                                                                <td>
                                                                    <input type="text" name="remark" value="<?= $row['remark'] ?? '' ?>" class="form-control">
                                                                </td>
                                                                <td>
                                                                    <input type="hidden" name="id" value="<?= $row['sr_no'] ?>">
                                                                    <button type="submit" name="save_status" class="btn btn-success btn-sm">Save</button>
                                                                </td>
                                                            </tr>
                                                        </form>
                                                    <?php
                                                    endwhile;
                                                else:
                                                    ?>
                                                    <tr>
                                                        <td colspan="11" class="text-center">No PCs Found</td>
                                                    </tr>
                                                <?php endif; ?>
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