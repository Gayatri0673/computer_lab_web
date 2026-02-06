<?php
$conn = mysqli_connect("localhost", "root", "", "computer");
if (isset($_POST['delete_btn'])) {
    $delete_id = $_POST['delete_id'];
    $lab_query = "DELETE FROM programming_lab1 WHERE accession_no ='$delete_id'";
    $lab_query_run = mysqli_query($conn, $lab_query);
    if ($lab_query_run) {
        header("Location: programming_lab1.php");
    } else {
        header("Location: programming_lab1.php");
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
                        <h4 class="text-muted fw-bold py-3 mb-4">COMPUTER CENTER</h4>
                        <!-- Hoverable Table rows -->
                        <div class="card">
                            <div class="row">
                                <div class="col-lg-6 ">
                                    <h5 class="m-4">Programming Lab 1</h5>
                                </div>
                                <div class="col-lg-6 d-flex justify-content-end">
                                    <?php
                                    include '../common/search_bar.php';
                                    ?>
                                    <a href="./add_programming_lab1.php">
                                        <button type="button" class="btn btn-primary m-4">ADD+</button>
                                    </a>
                                    <a href="./programming1_lab_status.php">
                                        <button type="button" class="btn btn-primary m-4">Status</button>
                                    </a>
                                    <div class="text-center">
                                        <button onclick="window.print()" class="btn btn-primary m-4">Print</button>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $conn = mysqli_connect("localhost", "root", "", "computer");
                            $query = "SELECT * FROM programming_lab1";
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
                                                            <a href="show.php?lab=programming_lab1&accession_no=<?= $project_row['accession_no']; ?>">
                                                                <button class="btn rounded-pill btn-success me-1">Show</button>
                                                            </a>
                                                            </a>
                                                            <a href="./edit_programming_lab1.php?accession_no=<?php echo $project_row["accession_no"]; ?>" class="text-white">
                                                                <button type="button" class="btn rounded-pill btn-primary">
                                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                                </button>
                                                            </a>

                                                            <form action="programming_lab1.php" method="POST" class="d-lg-inline">
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


                        

                        <!-- <tbody class="table-border-bottom-0">
                      <tr>
                        <th scope="row">2</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/COP/Lenovo/2022-23/CPU-02</td>
                <td>02</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
                
            </tr>
            <tr>
                        <th scope="row">3</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/COP/Lenovo/2022-23/CPU-03</td>
                <td>03</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
            </tr>
            <tr>
                        <th scope="row">4</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/COP/Lenovo/2022-23/CPU-04</td>
                <td>04</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
            </tr>
                  <tr>
                        <th scope="row">5</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/COP/Lenovo/2022-23/CPU-05</td>
                <td>05</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
            </tr>
            <tr>
                        <th scope="row">6</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/COP/Lenovo/2022-23/CPU-06</td>
                <td>06</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
            </tr>
            <tr>
                        <th scope="row">7</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/COP/Lenovo/2022-23/CPU-07</td>
                <td>07</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
            </tr>
            <tr>
                        <th scope="row">8</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/COP/Lenovo/2022-23/CPU-08</td>
                <td>08</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
            </tr>
            <tr>
                        <th scope="row">9</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/COP/Lenovo/2022-23/CPU-09</td>
                <td>09</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
            </tr>
            <tr>
                        <th scope="row">10</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/COP/Lenovo/2022-23/CPU-10</td>
                <td>10</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
            </tr>
            <tbody class="table-border-bottom-0">
                      <tr>
                        <th scope="row">11</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/COP/Lenovo/2022-23/CPU-012</td>
                <td>11</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
                
            </tr>
            <tbody class="table-border-bottom-0">
                      <tr>
                        <th scope="row">12</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/COP/Lenovo/2019-20/CPU-10</td>
                <td>12</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
                
            </tr>
            <tbody class="table-border-bottom-0">
                      <tr>
                        <th scope="row">13</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/COP/Lenovo/2019-20/CPU-09</td>
                <td>13</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
                
            </tr>
            <tbody class="table-border-bottom-0">
                      <tr>
                        <th scope="row">14</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/COP/Lenovo/2019-20/CPU-07</td>
                <td>14</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
                
            </tr>
            <tbody class="table-border-bottom-0">
                      <tr>
                        <th scope="row">15</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/COP/Lenovo/2019-20/CPU-06</td>
                <td>15</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
                
            </tr>
            <tbody class="table-border-bottom-0">
                      <tr>
                        <th scope="row">16</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/COP/Lenovo/2019-20/CPU-05</td>
                <td>16</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
                
            </tr>
            <tbody class="table-border-bottom-0">
                      <tr>
                        <th scope="row">17</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/COP/Lenovo/2019-20/CPU-04</td>
                <td>17</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
                
            </tr>
            <tbody class="table-border-bottom-0">
                      <tr>
                        <th scope="row">18</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/COP/Lenovo/2023/CPU-11</td>
                <td>18</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
                
            </tr>
            <tbody class="table-border-bottom-0">
                      <tr>
                        <th scope="row">19</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/COP/Lenovo/2019-20/CPU-02</td>
                <td>19</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
                
            </tr>
            <tbody class="table-border-bottom-0">
                      <tr>
                        <th scope="row">20</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/COP/Lenovo/2019-20/CPU-01</td>
                <td>20</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
                
            </tr>
            <tbody class="table-border-bottom-0">
                      <tr>
                        <th scope="row">21</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/Lenovo/2011-12/CPU-01</td>
                <td>21</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
                
            </tr>
            <tbody class="table-border-bottom-0">
                      <tr>
                        <th scope="row">22</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/COP/Lenovo/2022-23/CPU-02</td>
                <td>22</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
                
            </tr>
            <tbody class="table-border-bottom-0">
                      <tr>
                        <th scope="row">23</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/COP/Lenovo/2022-23/CPU-03</td>
                <td>23</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
                
            </tr>
            <tbody class="table-border-bottom-0">
                      <tr>
                        <th scope="row">24</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/COP/Lenovo/2022-23/CPU-04</td>
                <td>24</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
                
            </tr>
            <tbody class="table-border-bottom-0">
                      <tr>
                        <th scope="row">25</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/Lenovo/2011-12/CPU-57</td>
                <td>25</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
                
            </tr>
            <tbody class="table-border-bottom-0">
                      <tr>
                        <th scope="row">26</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/Lenovo/2011-12/CPU-06</td>
                <td>26</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
                
            </tr>
            <tbody class="table-border-bottom-0">
                      <tr>
                        <th scope="row">27</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/COP/Lenovo/2022-23/CPU-08</td>
                <td>27</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
                
            </tr>
            <tbody class="table-border-bottom-0">
                      <tr>
                        <th scope="row">28</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/COP/Lenovo/2022-23/CPU-07</td>
                <td>28</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
                
            </tr>
            <tbody class="table-border-bottom-0">
                      <tr>
                        <th scope="row">29</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/COP/Lenovo/2022-23/CPU-09</td>
                <td>29</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
                
            </tr>
            <tbody class="table-border-bottom-0">
                      <tr>
                        <th scope="row">30</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/COP/Lenovo/2022-23/CPU-91</td>
                <td>30</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
                
            </tr>
            <tbody class="table-border-bottom-0">
                      <tr>
                        <th scope="row">31</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/Lenovo/2010-11/CPU-42</td>
                <td>31</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
                
            </tr>
            <tbody class="table-border-bottom-0">
                      <tr>
                        <th scope="row">32</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/Lenovo/2011-12/CPU-11</td>
                <td>32</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
                
            </tr>
            <tbody class="table-border-bottom-0">
                      <tr>
                        <th scope="row">33</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/Lenovo/2010-11/CPU-12</td>
                <td>33</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
                
            </tr>
            <tbody class="table-border-bottom-0">
                      <tr>
                        <th scope="row">34</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/Lenovo/2010-11/CPU-13</td>
                <td>34</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
                
            </tr>
            <tbody class="table-border-bottom-0">
                      <tr>
                        <th scope="row">35</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/Lenovo/2010-11/CPU-14</td>
                <td>35</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
                
            </tr>
            <tbody class="table-border-bottom-0">
                      <tr>
                        <th scope="row">36</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/Lenovo/2010-11/CPU-15</td>
                <td>36</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
                
            </tr>
            <tbody class="table-border-bottom-0">
                      <tr>
                        <th scope="row">37</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/Lenovo/2010-11/CPU-16</td>
                <td>37</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
                
            </tr>
            <tbody class="table-border-bottom-0">
                      <tr>
                        <th scope="row">38</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/Lenovo/2010-11/CPU-17</td>
                <td>38</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
                
            </tr>
            <tbody class="table-border-bottom-0">
                      <tr>
                        <th scope="row">39</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/Lenovo/2010-11/CPU-19</td>
                <td>39</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
                
            </tr>
            <tbody class="table-border-bottom-0">
                      <tr>
                        <th scope="row">40</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/Lenovo/2010-11/CPU-65</td>
                <td>40</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
                
            </tr>
            <tbody class="table-border-bottom-0">
                      <tr>
                        <th scope="row">41</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/Lenovo/2010-11/CPU-43</td>
                <td>41</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
                
            </tr>
            <tbody class="table-border-bottom-0">
                      <tr>
                        <th scope="row">42</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/Lenovo/2010-11/CPU-88</td>
                <td>42</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
                
            </tr>
            
            <tbody class="table-border-bottom-0">
                      <tr>
                        <th scope="row">43</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/Lenovo/2010-11/CPU-21</td>
                <td>43</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
                
            </tr>
            <tbody class="table-border-bottom-0">
                      <tr>
                        <th scope="row">44</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/Lenovo/2010-11/CPU-23</td>
                <td>44</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
                
            </tr>
            <tbody class="table-border-bottom-0">
                      <tr>
                        <th scope="row">45</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/Lenovo/2010-11/CPU-26</td>
                <td>45</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
                
            </tr>
            <tbody class="table-border-bottom-0">
                      <tr>
                        <th scope="row">46</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/Lenovo/2010-11/CPU-26</td>
                <td>46</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
                
            </tr>
            <tbody class="table-border-bottom-0">
                      <tr>
                        <th scope="row">47</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/Lenovo/2010-11/CPU-27</td>
                <td>47</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
                
            </tr>
            <tbody class="table-border-bottom-0">
                      <tr>
                        <th scope="row">48</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/Lenovo/2010-11/CPU-28</td>
                <td>48</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
                
            </tr>
            <tbody class="table-border-bottom-0">
                      <tr>
                        <th scope="row">49</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/Lenovo/2010-11/CPU-29</td>
                <td>49</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
                
            </tr>
            <tbody class="table-border-bottom-0">
                      <tr>
                        <th scope="row">50</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/Lenovo/2010-11/CPU-30</td>
                <td>50</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
                
            </tr>
            <tbody class="table-border-bottom-0">
                      <tr>
                        <th scope="row">51</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/Lenovo/2010-11/CPU-31</td>
                <td>51</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
                
            </tr>
            <tbody class="table-border-bottom-0">
                      <tr>
                        <th scope="row">52</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/Lenovo/2010-11/CPU-32</td>
                <td>52</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
                
            </tr>
            <tbody class="table-border-bottom-0">
                      <tr>
                        <th scope="row">53</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/Lenovo/2010-11/CPU-33</td>
                <td>53</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
                
            </tr>
            <tbody class="table-border-bottom-0">
                      <tr>
                        <th scope="row">54</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/Lenovo/2010-11/CPU-34</td>
                <td>54</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
                
            </tr>
            <tbody class="table-border-bottom-0">
                      <tr>
                        <th scope="row">55</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/Lenovo/2010-11/CPU-35</td>
                <td>55</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
                
            </tr>
            <tbody class="table-border-bottom-0">
                      <tr>
                        <th scope="row">56</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/Lenovo/2010-11/CPU-36</td>
                <td>56</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
                
            </tr>
            <tbody class="table-border-bottom-0">
                      <tr>
                        <th scope="row">57</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/Lenovo/2010-11/CPU-37</td>
                <td>57</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
                
            </tr>
            <tbody class="table-border-bottom-0">
                      <tr>
                        <th scope="row">58</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/Lenovo/2010-11/CPU-38</td>
                <td>58</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
                
            </tr>
            <tbody class="table-border-bottom-0">
                      <tr>
                        <th scope="row">59</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/Lenovo/2010-11/CPU-39</td>
                <td>59</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
                
            </tr>
            <tbody class="table-border-bottom-0">
                      <tr>
                        <th scope="row">60</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/Lenovo/2010-11/CPU-40</td>
                <td>60</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
                
            </tr>
            <tbody class="table-border-bottom-0">
                      <tr>
                        <th scope="row">61</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/Lenovo/2010-11/CPU-41</td>
                <td>61</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
                
            </tr>
            <tbody class="table-border-bottom-0">
                      <tr>
                        <th scope="row">62</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/Lenovo/2010-11/CPU-18</td>
                <td>62</td>
                <td>-</td>
                <td>-</td>
                <td>1</td>
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
                
            </tr>
            <tbody class="table-border-bottom-0">
                      <tr>
                        <th scope="row">63</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/Lenovo/2010-11/CPU-85</td>
                <td>63</td>
                <td>-</td>
                <td>-</td>
                <td>1</td> 
                <td>40,500</td>
                <td>-</td>
                <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_programming_lab1.php" class="text-white">
                                                    <button type="button" class="btn rounded-pill btn-primary">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </button>
                                                </a>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-danger">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </a>
                                                
                                            </div>
                                            </td>
                
                
            </tr> -->
                        <!-- <?php
                                include '../common/dbcon.php';
                                $sql = "SELECT event_id,title,description,image FROM event";
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "
                          <tr>
                            <td><i class=\"fab fa-angular fa-lg text-danger me-3\"></i> <strong>" . htmlspecialchars($row['event_id']) . "</strong></td>
                            <td><p class=\"page-para \">" . htmlspecialchars($row['title']) . "</p></td>
                            <td>
                              <img src=\"" . htmlspecialchars($row['image']) . "\" alt=\"Avatar\" class=\"one\" />
                            </td>
                            <td>
                         <div> 
                            <a href=\"edit-events.php\" class=\" text-white\">
                               <button type=\"button\" class=\"btn rounded-pill btn-primary\">
                                  <i class=\"bx bx-edit-alt me-1\"></i> Edit
                                </button></a> 
                                <a  href=\"#\" class=\" text-white\">
                                <button type=\"button\" class=\"btn rounded-pill btn-primary\"> 
                                 <i class=\"bx bx-trash me-1 \"></i> Delete
                              </button></a>
                            </div>
                          </div>
                        </td>
                        </tr>
                          ";
                                    }
                                }
                                ?>
                       -->
                        </tbody>
                        </table>
                    </div>
                </div>
                <!--/ Hoverable Table rows -->


                <hr class="my-5" />


                <!-- Footer -->
                <!-- Footer -->

                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- <div class="buy-now">
      <a
        href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/"
        target="_blank"
        class="btn btn-danger btn-buy-now"
        >Upgrade to Pro</a
      >
    </div> -->
    <?php
    include('../common/footer-link.php');


    ?>
    <!-- Core JS -->

</body>

</html>