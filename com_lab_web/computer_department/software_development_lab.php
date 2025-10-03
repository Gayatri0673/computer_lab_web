<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pxro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
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
<!-- <style>
    .page-para {
        width: 300px;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 3;
        overflow: hidden;
    }

    .one {
        width: 50px;
        height: 50px;
    }
</style> -->

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
                        <h4 class="text-muted fw-bold py-3 mb-4">SOFTWARE DEVELOPMENT LAB</h4>




                        <!-- Hoverable Table rows -->
                        <div class="card">
                            <div class="row">
                                <div class="col-lg-6 ">
                                    <div class="h5 card-header">SOFTWARE DEVELOPMENT LAB</div>
                                </div>

                                <div class="col-lg-6 d-flex justify-content-end">
                                    <a href="./add_software_development_lab.php">
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
                                            <th>System No.</th>
                                            <th>GRN no</th>
                                            <th>Unit Rate</th>
                                            <th>Quantity</th>
                                            <th>Amount</th>
                                            <th>Remark</th>
                                            <th>Actions</th>




                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>CPU-HP Desktop Model,HP Keyboard,HP Mouse,HP Monitor</td>
                                            <td>CSMSSPOLY/24-25/CO/CPU/01</td>
                                            <td>01</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                    <a href="./edit_software_development_lab.php" class="text-white">
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
                                            <th scope="row">2</th>
                                            <td>CPU-HP Desktop Model,HP Keyboard,HP Mouse,HP Monitor</td>
                                            <td>CSMSSPOLY/24-25/CO/CPU/02</td>
                                            <td>02</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                    <a href="./edit_software_development_lab.php" class="text-white">
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
                                            <td>CPU-HP Desktop Model,HP Keyboard,HP Mouse,HP Monitor</td>
                                            <td>CSMSSPOLY/24-25/CO/CPU/03</td>
                                            <td>03</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                    <a href="./edit_software_development_lab.php" class="text-white">
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
                                            <td>CPU-HP Desktop Model,HP Keyboard,HP Mouse,HP Monitor</td>
                                            <td>CSMSSPOLY/24-25/CO/CPU/04</td>
                                            <td>04</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                    <a href="./edit_software_development_lab.php" class="text-white">
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
                                            <td>CPU-HP Desktop Model,HP Keyboard,HP Mouse,HP Monitor</td>
                                            <td>CSMSSPOLY/24-25/CO/CPU/05</td>
                                            <td>05</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                    <a href="./edit_software_development_lab.php" class="text-white">
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
                                            <td>CPU-HP Desktop Model,HP Keyboard,HP Mouse,HP Monitor</td>
                                            <td>CSMSSPOLY/24-25/CO/CPU/06</td>
                                            <td>06</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                    <a href="./edit_software_development_lab.php" class="text-white">
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
                                            <td>CPU-HP Desktop Model,HP Keyboard,HP Mouse,HP Monitor</td>
                                            <td>CSMSSPOLY/24-25/CO/CPU/07</td>
                                            <td>07</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                    <a href="./edit_software_development_lab.php" class="text-white">
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
                                            <td>CPU-HP Desktop Model,HP Keyboard,HP Mouse,HP Monitor</td>
                                            <td>CSMSSPOLY/24-25/CO/CPU/08</td>
                                            <td>08</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                    <a href="./edit_software_development_lab.php" class="text-white">
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
                                            <td>CPU-HP Desktop Model,HP Keyboard,HP Mouse,HP Monitor</td>
                                            <td>CSMSSPOLY/24-25/CO/CPU/09</td>
                                            <td>09</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                    <a href="./edit_software_development_lab.php" class="text-white">
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
                                            <td>CPU-HP Desktop Model,HP Keyboard,HP Mouse,HP Monitor</td>
                                            <td>CSMSSPOLY/24-25/CO/CPU/10</td>
                                            <td>10</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                    <a href="./edit_software_development_lab.php" class="text-white">
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
                                            <th scope="row">11</th>
                                            <td>CPU-HP Desktop Model,HP Keyboard,HP Mouse,HP Monitor</td>
                                            <td>CSMSSPOLY/24-25/CO/CPU/011</td>
                                            <td>11</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                    <a href="./edit_software_development_lab.php" class="text-white">
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
                                            <th scope="row">12</th>
                                            <td>CPU-HP Desktop Model,HP Keyboard,HP Mouse,HP Monitor</td>
                                            <td>CSMSSPOLY/24-25/CO/CPU/12</td>
                                            <td>12</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                    <a href="./edit_software_development_lab.php" class="text-white">
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
                                            <th scope="row">13</th>
                                            <td>CPU-HP Desktop Model,HP Keyboard,HP Mouse,HP Monitor</td>
                                            <td>CSMSSPOLY/24-25/CO/CPU/13</td>
                                            <td>13</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                    <a href="./edit_software_development_lab.php" class="text-white">
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
                                            <th scope="row">14</th>
                                            <td>CPU-HP Desktop Model,HP Keyboard,HP Mouse,HP Monitor</td>
                                            <td>CSMSSPOLY/24-25/CO/CPU/14</td>
                                            <td>14</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                    <a href="./edit_software_development_lab.php" class="text-white">
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
                                            <th scope="row">15</th>
                                            <td>CPU-HP Desktop Model,HP Keyboard,HP Mouse,HP Monitor</td>
                                            <td>CSMSSPOLY/24-25/CO/CPU/15</td>
                                            <td>15</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                    <a href="./edit_software_development_lab.php" class="text-white">
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
                                            <th scope="row">16</th>
                                            <td>CPU-HP Desktop Model,HP Keyboard,HP Mouse,HP Monitor</td>
                                            <td>CSMSSPOLY/24-25/CO/CPU/16</td>
                                            <td>16</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                    <a href="./edit_software_development_lab.php" class="text-white">
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
                                            <th scope="row">17</th>
                                            <td>CPU-HP Desktop Model,HP Keyboard,HP Mouse,HP Monitor</td>
                                            <td>CSMSSPOLY/24-25/CO/CPU/17</td>
                                            <td>17</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                    <a href="./edit_software_development_lab.php" class="text-white">
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
                                            <th scope="row">18</th>
                                            <td>CPU-HP Desktop Model,HP Keyboard,HP Mouse,HP Monitor</td>
                                            <td>CSMSSPOLY/24-25/CO/CPU/18</td>
                                            <td>18</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                    <a href="./edit_software_development_lab.php" class="text-white">
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
                                            <th scope="row">19</th>
                                            <td>CPU-HP Desktop Model,HP Keyboard,HP Mouse,HP Monitor</td>
                                            <td>CSMSSPOLY/24-25/CO/CPU/19</td>
                                            <td>19</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                    <a href="./edit_software_development_lab.php" class="text-white">
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
                                            <th scope="row">20</th>
                                            <td>CPU-HP Desktop Model,HP Keyboard,HP Mouse,HP Monitor</td>
                                            <td>CSMSSPOLY/24-25/CO/CPU/20</td>
                                            <td>20</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                    <a href="./edit_software_development_lab.php" class="text-white">
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
                                            <th scope="row">21</th>
                                            <td>CPU-HP Desktop Model,HP Keyboard,HP Mouse,HP Monitor</td>
                                            <td>CSMSSPOLY/24-25/CO/CPU/21</td>
                                            <td>21</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                    <a href="./edit_software_development_lab.php" class="text-white">
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
                                            <th scope="row">22</th>
                                            <td>CPU-HP Desktop Model,HP Keyboard,HP Mouse,HP Monitor</td>
                                            <td>CSMSSPOLY/24-25/CO/CPU/22</td>
                                            <td>22</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                    <a href="./edit_software_development_lab.php" class="text-white">
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
                        ->
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

     
        <!-- Core JS -->

</body>

</html>