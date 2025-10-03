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
            include('../common/sidebar.php');
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

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="text-muted fw-bold py-3 mb-4">NETWORKING LAB</h4>

                        <!-- Hoverable Table rows -->
                        <div class="card">
                            <div class="row">
                                <div class="col-lg-6 ">
                                    <div class="h5 card-header"></div>
                                </div>

                                <div class="col-lg-6 d-flex justify-content-end">
                                    <a href="add-events.php">
                                        <button type="button" class="btn btn-primary m-4">ADD+</button>
                                    </a>
                                </div>
                            </div>

                            <div class="table-responsive text-nowrap">
                                <table class="table table-hover">
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
                                        <tr>

                                            <td>1</td>
                                            <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                            <td>CSMSS/POLY/HCL/10-11/CPU-01</td>
                                            <td>01</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                    <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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

                                            <td>2</td>
                                            <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                            <td>CSMSS/POLY/HCL/10-11/CPU-02</td>
                                            <td>02</td>

                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                    <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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

                                            <td>3</td>
                                            <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                            <td>CSMSS/POLY/HCL/10-11/CPU-03</td>
                                            <td>03</td>

                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                    <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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

                                            <td>4</td>
                                            <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                            <td>CSMSS/POLY/HCL/10-11/CPU-04</td>
                                            <td>04</td>

                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                    <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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

                                            <td>5</td>
                                            <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                            <td>CSMSS/POLY/HCL/10-11/CPU-05</td>
                                            <td>05</td>

                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                    <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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

                                            <td>6</td>
                                            <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                            <td>CSMSS/POLY/HCL/10-11/CPU-06</td>
                                            <td>06</td>

                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                    <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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

                                            <td>7</td>
                                            <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                            <td>CSMSS/POLY/HCL/10-11/CPU-08</td>
                                            <td>07</td>

                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                    <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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

                                            <td>8</td>
                                            <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                            <td>CSMSS/POLY/HCL/10-11/CPU-10</td>
                                            <td>08</td>

                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                    <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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

                                            <td>9</td>
                                            <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                            <td>CSMSS/POLY/HCL/10-11/CPU-11</td>
                                            <td>09</td>

                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                    <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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

                                            <td>10</td>
                                            <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                            <td>CSMSS/POLY/HCL/10-11/CPU-12</td>
                                            <td>10</td>

                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                    <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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

                                            <td>11</td>
                                            <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                            <td>CSMSS/POLY/HCL/10-11/CPU-13</td>
                                            <td>11</td>

                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                    <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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

                                            <td>12</td>
                                            <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                            <td>CSMSS/POLY/HCL/10-11/CPU-14</td>
                                            <td>12</td>

                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                    <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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

                                            <td>13</td>
                                            <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                            <td>CSMSS/POLY/HCL/10-11/CPU-15</td>
                                            <td>13</td>

                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                    <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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
                                            <td>14</td>
                                            <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                            <td>CSMSS/POLY/HCL/10-11/CPU-16</td>
                                            <td>14</td>

                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                    <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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
                                            <td>15</td>
                                            <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                            <td>CSMSS/POLY/HCL/10-11/CPU-17</td>
                                            <td>15</td>

                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                    <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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
                                            <td>16</td>
                                            <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                            <td>CSMSS/POLY/HCL/10-11/CPU-18</td>
                                            <td>16</td>

                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                    <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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
                                            <td>17</td>
                                            <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                            <td>CSMSS/POLY/HCL/10-11/CPU-19</td>
                                            <td>17</td>

                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                    <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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
                                            <td>18</td>
                                            <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                            <td>CSMSS/POLY/HCL/10-11/CPU-21</td>
                                            <td>18</td>

                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                    <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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
                                            <td>19</td>
                                            <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                            <td>SMSS/POLY/HCL/10-11/CPU-22</td>
                                            <td>19</td>

                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                    <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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
                                            <td>20</td>
                                            <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                            <td>CSMSS/POLY/HCL/2010-11/CPU-23</td>
                                            <td>20</td>

                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                    <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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


                                        <td>21</td>
                                        <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                        <td>CSMSS/POLY/HCL/2010-11/CPU-24</td>
                                        <td>21</td>

                                        <td>-</td>
                                        <td>-</td>
                                        <td>1</td>
                                        <td>46,500</td>
                                        <td>-</td>
                                        <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                        <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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

                                        <td>22</td>
                                        <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                        <td>CSMSS/POLY/HCL/2010-11/CPU-25</td>
                                        <td>22</td>

                                        <td>-</td>
                                        <td>-</td>
                                        <td>1</td>
                                        <td>46,500</td>
                                        <td>-</td>
                                        <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                        <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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

                                        <td>23</td>
                                        <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                        <td>CSMSS/POLY/HCL/2010-11/CPU-26</td>
                                        <td>23</td>

                                        <td>-</td>
                                        <td>-</td>
                                        <td>1</td>
                                        <td>46,500</td>
                                        <td>-</td>
                                        <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                        <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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


                                        <td>24</td>
                                        <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                        <td>CSMSS/POLY/HCL/2010-11/CPU-27</td>
                                        <td>24</td>

                                        <td>-</td>
                                        <td>-</td>
                                        <td>1</td>
                                        <td>46,500</td>
                                        <td>-</td>
                                        <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                        <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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




                                        <td>25</td>
                                        <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                        <td>CSMSS/POLY/HCL/2010-11/CPU-28</td>
                                        <td>25</td>

                                        <td>-</td>
                                        <td>-</td>
                                        <td>1</td>
                                        <td>46,500</td>
                                        <td>-</td>
                                        <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                        <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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




                                        <td>26</td>
                                        <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                        <td>CSMSS/POLY/HCL/2010-11/CPU-29</td>
                                        <td>26</td>

                                        <td>-</td>
                                        <td>-</td>
                                        <td>1</td>
                                        <td>46,500</td>
                                        <td>-</td>
                                        <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                        <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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


                                        <td>27</td>
                                        <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                        <td>CSMSS/POLY/HCL/2010-11/CPU-30</td>
                                        <td>27</td>

                                        <td>-</td>
                                        <td>-</td>
                                        <td>1</td>
                                        <td>46,500</td>
                                        <td>-</td>
                                        <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                        <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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


                                        <td>28</td>
                                        <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                        <td>CSMSS/POLY/HCL/2010-11/CPU-31</td>
                                        <td>28</td>

                                        <td>-</td>
                                        <td>-</td>
                                        <td>1</td>
                                        <td>46,500</td>
                                        <td>-</td>
                                        <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                        <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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




                                        <td>29</td>
                                        <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                        <td>CSMSS/POLY/HCL/2010-11/CPU-32</td>
                                        <td>29</td>

                                        <td>-</td>
                                        <td>-</td>
                                        <td>1</td>
                                        <td>46,500</td>
                                        <td>-</td>
                                        <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                        <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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



                                        <td>30</td>
                                        <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                        <td>CSMSS/POLY/HCL/2010-11/CPU-33</td>
                                        <td>30</td>

                                        <td>-</td>
                                        <td>-</td>
                                        <td>1</td>
                                        <td>46,500</td>
                                        <td>-</td>
                                        <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                        <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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



                                        <td>31</td>
                                        <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                        <td>CSMSS/POLY/HCL/2010-11/CPU-34</td>
                                        <td>31</td>

                                        <td>-</td>
                                        <td>-</td>
                                        <td>1</td>
                                        <td>46,500</td>
                                        <td>-</td>
                                        <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                        <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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



                                        <td>32</td>
                                        <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                        <td>CSMSS/POLY/HCL/2010-11/CPU-35</td>
                                        <td>32</td>

                                        <td>-</td>
                                        <td>-</td>
                                        <td>1</td>
                                        <td>46,500</td>
                                        <td>-</td>
                                        <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                        <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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



                                        <td>33</td>
                                        <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                        <td>CSMSS/POLY/HCL/2010-11/CPU-36</td>
                                        <td>33</td>

                                        <td>-</td>
                                        <td>-</td>
                                        <td>1</td>
                                        <td>46,500</td>
                                        <td>-</td>
                                        <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                        <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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



                                        <td>34</td>
                                        <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                        <td>CSMSS/POLY/HCL/2010-11/CPU-37</td>
                                        <td>34</td>

                                        <td>-</td>
                                        <td>-</td>
                                        <td>1</td>
                                        <td>46,500</td>
                                        <td>-</td>
                                        <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                        <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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



                                        <td>35</td>
                                        <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                        <td>CSMSS/POLY/HCL/2010-11/CPU-38</td>
                                        <td>34</td>

                                        <td>-</td>
                                        <td>-</td>
                                        <td>1</td>
                                        <td>46,500</td>
                                        <td>-</td>
                                        <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                        <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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


                                        <td>36</td>
                                        <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                        <td>CSMSS/POLY/HCL/2010-11/CPU-39</td>
                                        <td>36</td>

                                        <td>-</td>
                                        <td>-</td>
                                        <td>1</td>
                                        <td>46,500</td>
                                        <td>-</td>
                                        <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                        <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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


                                        <td>37</td>
                                        <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                        <td>CSMSS/POLY/HCL/2010-11/CPU-40</td>
                                        <td>37</td>

                                        <td>-</td>
                                        <td>-</td>
                                        <td>1</td>
                                        <td>46,500</td>
                                        <td>-</td>
                                        <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                        <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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



                                        <td>38</td>
                                        <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                        <td>CSMSS/POLY/HCL/2010-11/CPU-41</td>
                                        <td>38</td>

                                        <td>-</td>
                                        <td>-</td>
                                        <td>1</td>
                                        <td>46,500</td>
                                        <td>-</td>
                                        <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                        <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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


                                        <td>39</td>
                                        <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                        <td>CSMSS/POLY/HCL/2010-11/CPU-42</td>
                                        <td>39</td>

                                        <td>-</td>
                                        <td>-</td>
                                        <td>1</td>
                                        <td>46,500</td>
                                        <td>-</td>
                                        <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                        <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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



                                        <td>40</td>
                                        <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                        <td>CSMSS/POLY/HCL/2010-11/CPU-43</td>
                                        <td>40</td>

                                        <td>-</td>
                                        <td>-</td>
                                        <td>1</td>
                                        <td>46,500</td>
                                        <td>-</td>
                                        <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                        <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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




                                        <td>41</td>
                                        <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                        <td>CSMSS/POLY/HCL/2010-11/CPU-44</td>
                                        <td>41</td>

                                        <td>-</td>
                                        <td>-</td>
                                        <td>1</td>
                                        <td>46,500</td>
                                        <td>-</td>
                                        <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                        <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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



                                        <td>42</td>
                                        <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                        <td>CSMSS/POLY/HCL/2010-11/CPU-45</td>
                                        <td>42</td>

                                        <td>-</td>
                                        <td>-</td>
                                        <td>1</td>
                                        <td>46,500</td>
                                        <td>-</td>
                                        <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                        <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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


                                        <td>43</td>
                                        <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                        <td>CSMSS/POLY/HCL/2010-11/CPU-46</td>
                                        <td>43</td>

                                        <td>-</td>
                                        <td>-</td>
                                        <td>1</td>
                                        <td>46,500</td>
                                        <td>-</td>
                                        <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                        <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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



                                        <td>44</td>
                                        <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                        <td>CSMSS/POLY/HCL/2010-11/CPU-47</td>
                                        <td>44</td>

                                        <td>-</td>
                                        <td>-</td>
                                        <td>1</td>
                                        <td>46,500</td>
                                        <td>-</td>
                                        <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                        <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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




                                        <td>45</td>
                                        <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                        <td>CSMSS/POLY/HCL/2010-11/CPU-48</td>
                                        <td>45</td>

                                        <td>-</td>
                                        <td>-</td>
                                        <td>1</td>
                                        <td>46,500</td>
                                        <td>-</td>
                                        <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                        <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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


                                        <td>46</td>
                                        <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                        <td>CSMSS/POLY/HCL/2010-11/CPU-49</td>
                                        <td>46</td>

                                        <td>-</td>
                                        <td>-</td>
                                        <td>1</td>
                                        <td>46,500</td>
                                        <td>-</td>
                                        <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                        <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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



                                        <td>47</td>
                                        <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                        <td>CSMSS/POLY/HCL/2010-11/CPU-50</td>
                                        <td>47</td>

                                        <td>-</td>
                                        <td>-</td>
                                        <td>1</td>
                                        <td>46,500</td>
                                        <td>-</td>
                                        <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                        <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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

                                        <td>48</td>
                                        <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                        <td>CSMSS/POLY/HCL/2010-11/CPU-51</td>
                                        <td>48</td>

                                        <td>-</td>
                                        <td>-</td>
                                        <td>1</td>
                                        <td>46,500</td>
                                        <td>-</td>
                                        <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                        <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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

                                        <td>49</td>
                                        <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                        <td>CSMSS/POLY/HCL/2010-11/CPU-52</td>
                                        <td>49</td>

                                        <td>-</td>
                                        <td>-</td>
                                        <td>1</td>
                                        <td>46,500</td>
                                        <td>-</td>
                                        <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                        <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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


                                        <td>50</td>
                                        <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                        <td>CSMSS/POLY/HCL/2010-11/CPU-53</td>
                                        <td>50</td>

                                        <td>-</td>
                                        <td>-</td>
                                        <td>1</td>
                                        <td>46,500</td>
                                        <td>-</td>
                                        <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                        <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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



                                        <td>51</td>
                                        <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                        <td>CSMSS/POLY/HCL/2010-11/CPU-54</td>
                                        <td>51</td>

                                        <td>-</td>
                                        <td>-</td>
                                        <td>1</td>
                                        <td>46,500</td>
                                        <td>-</td>
                                        <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                        <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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




                                        <td>52</td>
                                        <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                        <td>CSMSS/POLY/HCL/2010-11/CPU-55</td>
                                        <td>52</td>

                                        <td>-</td>
                                        <td>-</td>
                                        <td>1</td>
                                        <td>46,500</td>
                                        <td>-</td>
                                        <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                        <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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



                                        <td>53</td>
                                        <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                        <td>CSMSS/POLY/HCL/2010-11/CPU-56</td>
                                        <td>53</td>

                                        <td>-</td>
                                        <td>-</td>
                                        <td>1</td>
                                        <td>46,500</td>
                                        <td>-</td>
                                        <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                        <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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


                                        <td>54</td>
                                        <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                        <td>CSMSS/POLY/HCL/2010-11/CPU-57</td>
                                        <td>54</td>

                                        <td>-</td>
                                        <td>-</td>
                                        <td>1</td>
                                        <td>46,500</td>
                                        <td>-</td>
                                        <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                        <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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


                                        <td>55</td>
                                        <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                        <td>CSMSS/POLY/HCL/2010-11/CPU-58</td>
                                        <td>55</td>

                                        <td>-</td>
                                        <td>-</td>
                                        <td>1</td>
                                        <td>46,500</td>
                                        <td>-</td>
                                        <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                        <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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




                                        <td>56</td>
                                        <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                        <td>CSMSS/POLY/HCL/2010-11/CPU-59</td>
                                        <td>56</td>

                                        <td>-</td>
                                        <td>-</td>
                                        <td>1</td>
                                        <td>46,500</td>
                                        <td>-</td>
                                        <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                        <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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



                                        <td>57</td>
                                        <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                        <td>CSMSS/POLY/HCL/2010-11/CPU-60</td>
                                        <td>57</td>

                                        <td>-</td>
                                        <td>-</td>
                                        <td>1</td>
                                        <td>46,500</td>
                                        <td>-</td>
                                        <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                        <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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




                                        <td>58</td>
                                        <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                        <td>CSMSS/POLY/HCL/2010-11/CPU-61</td>
                                        <td>58</td>

                                        <td>-</td>
                                        <td>-</td>
                                        <td>1</td>
                                        <td>46,500</td>
                                        <td>-</td>
                                        <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                        <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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

                                        <td>59</td>
                                        <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                        <td>CSMSS/POLY/HCL/2010-11/CPU-62</td>
                                        <td>59</td>

                                        <td>-</td>
                                        <td>-</td>
                                        <td>1</td>
                                        <td>46,500</td>
                                        <td>-</td>
                                        <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                        <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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







                                        <td>60</td>
                                        <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                        <td>CSMSS/POLY/HCL/2010-11/CPU-63</td>
                                        <td>60</td>

                                        <td>-</td>
                                        <td>-</td>
                                        <td>1</td>
                                        <td>46,500</td>
                                        <td>-</td>
                                        <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                        <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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



                                        <td>61</td>
                                        <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                        <td>CSMSS/POLY/Lenovo/2014-15/CPU-24</td>
                                        <td>61</td>

                                        <td>-</td>
                                        <td>-</td>
                                        <td>1</td>
                                        <td>46,500</td>
                                        <td>-</td>
                                        <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                        <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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




                                        <td>62</td>
                                        <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                        <td>CSMSS/POLY/Lenovo/2014-15/CPU-25</td>
                                        <td>62</td>

                                        <td>-</td>
                                        <td>-</td>
                                        <td>1</td>
                                        <td>46,500</td>
                                        <td>-</td>
                                        <td>HCLDesktopIntelCore
                                                2.53GHzG-31Chipset 1GB RAM,160 HDD,15.6 LCD,
                                                Keyboard,Optical Mouse.</td>
                                            <td></td>
                                        <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="edit_Student-Association.php?id=<?php echo $student_row['id']; ?>" class="text-white">
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

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--/ Hoverable Table rows -->


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

        <?php include('../common/footer_link.php'); ?>
</body>

</html>