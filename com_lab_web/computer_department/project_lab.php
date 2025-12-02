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
            include '../common/sidebar.php';
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
                                          <div class="text-center">
                <button onclick="window.print()" class="btn btn-primary m-4">Print</button>
            </div>
                                    <a href="./add_project_lab.php">
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
                                            <td>CSMSSPOLY/24-25/CO/CPU/23</td>
                                            <td>01</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                            <div>
                                                <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                    <button type="button" class="btn rounded-pill btn-success">
                                                        <i class="bx bx-show me-1"></i> Show
                                                    </button>
                                                </a>
                                                <a href="./edit_project_lab.php" class="text-white">
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
                                            <td>CSMSSPOLY/24-25/CO/CPU/24</td>
                                            <td>02</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                <a href="./edit_project_lab.php" class="text-white">
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
                                            <td>CSMSSPOLY/24-25/CO/CPU/25</td>
                                            <td>03</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                <a href="./edit_project_lab.php" class="text-white">
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
                                            <td>CSMSSPOLY/24-25/CO/CPU/26</td>
                                            <td>04</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                <a href="./edit_project_lab.php" class="text-white">
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
                                            <td>CSMSSPOLY/24-25/CO/CPU/27</td>
                                            <td>05</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                <a href="./edit_project_lab.php" class="text-white">
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
                                            <td>CSMSSPOLY/24-25/CO/CPU/28</td>
                                            <td>06</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                <a href="./edit_project_lab.php" class="text-white">
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
                                            <td>CSMSSPOLY/24-25/CO/CPU/29</td>
                                            <td>08</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                <a href="./edit_project_lab.php" class="text-white">
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
                                            <td>CSMSSPOLY/24-25/CO/CPU/30</td>
                                            <td>09</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                <a href="./edit_project_lab.php" class="text-white">
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
                                            <td>CSMSSPOLY/24-25/CO/CPU/31</td>
                                            <td>10</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                <a href="./edit_project_lab.php" class="text-white">
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
                                            <td>CSMSSPOLY/24-25/CO/CPU/32</td>
                                            <td>11</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                <a href="./edit_project_lab.php" class="text-white">
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
                                            <td>CSMSSPOLY/24-25/CO/CPU/33</td>
                                            <td>12</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                <a href="./edit_project_lab.php" class="text-white">
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
                                            <td>CSMSSPOLY/24-25/CO/CPU/34</td>
                                            <td>13</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                <a href="./edit_project_lab.php" class="text-white">
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
                                            <td>CSMSSPOLY/24-25/CO/CPU/35</td>
                                            <td>14</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                <a href="./edit_project_lab.php" class="text-white">
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
                                            <td>CSMSSPOLY/24-25/CO/CPU/36</td>
                                            <td>15</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                <a href="./edit_project_lab.php" class="text-white">
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
                                            <td>CSMSSPOLY/24-25/CO/CPU/37</td>
                                            <td>16</td>

                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                <a href="./edit_project_lab.php" class="text-white">
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
                                            <td>CSMSSPOLY/24-25/CO/CPU/38</td>
                                            <td>17</td>

                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                <a href="./edit_project_lab.php" class="text-white">
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
                                            <td>CSMSSPOLY/24-25/CO/CPU/39</td>
                                            <td>18</td>

                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                <a href="./edit_project_lab.php" class="text-white">
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
                                            <td>CSMSSPOLY/24-25/CO/CPU/40</td>
                                            <td>19</td>

                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                <a href="./edit_project_lab.php" class="text-white">
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
                                            <td>CSMSSPOLY/24-25/CO/CPU/41</td>
                                            <td>20</td>

                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                <a href="./edit_project_lab.php" class="text-white">
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

                                            <td>21</td>
                                            <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                            <td>CSMSSPOLY/24-25/CO/CPU/42</td>
                                            <td>21</td>

                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                <a href="./edit_project_lab.php" class="text-white">
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

                                            <td>22</td>
                                            <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                            <td>CSMSSPOLY/24-25/CO/CPU/43</td>
                                            <td>22</td>

                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                <a href="./edit_project_lab.php" class="text-white">
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

                                            <td>23</td>
                                            <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                            <td>CSMSSPOLY/24-25/CO/CPU/44</td>
                                            <td>23</td>

                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                <a href="./edit_project_lab.php" class="text-white">
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

                                            <td>24</td>
                                            <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                            <td>CSMSSPOLY/24-25/CO/CPU/45</td>
                                            <td>24</td>

                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                <a href="./edit_project_lab.php" class="text-white">
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

                                            <td>25</td>
                                            <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                            <td>CSMSSPOLY/24-25/CO/CPU/46</td>
                                            <td>25</td>

                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                <a href="./edit_project_lab.php" class="text-white">
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

                                            <td>26</td>
                                            <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                            <td>CSMSSPOLY/24-25/CO/CPU/47</td>
                                            <td>26</td>

                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                <a href="./edit_project_lab.php" class="text-white">
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

                                            <td>27</td>
                                            <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                            <td>CSMSSPOLY/24-25/CO/CPU/48</td>
                                            <td>27</td>

                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                <a href="./edit_project_lab.php" class="text-white">
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

                                            <td>28</td>

                                            <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                            <td>CSMSSPOLY/24-25/CO/CPU/49</td>
                                            <td>28</td>

                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                <a href="./edit_project_lab.php" class="text-white">
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

                                            <td>29</td>

                                            <td>CPU-HP Desktop model,HP Keyboard,HP Mouse,HP Monitor</td>
                                            <td>CSMSSPOLY/24-25/CO/CPU/50</td>
                                            <td>29</td>

                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>46,500</td>
                                            <td>-</td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div>
                                                    <a href="delete_Student-Association.php?id=<?php echo $student_row['id']; ?>">
                                                        <button type="button" class="btn rounded-pill btn-success">
                                                            <i class="bx bx-show me-1"></i> Show
                                                        </button>
                                                    </a>
                                                <a href="./edit_project_lab.php" class="text-white">
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

</body>

</html>
<!DOCTYPE html>