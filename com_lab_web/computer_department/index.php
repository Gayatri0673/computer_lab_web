<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
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
  data-assets-path=".../assets/"
  data-template="vertical-menu-template-free">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="../assets/css/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="./apexcharts.css">
<link rel="stylesheet" href="./sass.css">
<link rel="stylesheet" href="./core.css">
<link rel="stylesheet" href="./style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700" rel="stylesheet" />
</head>
<?php
include '../common/header_link.php';

?>
<?php
$conn = mysqli_connect("localhost", "root", "", "computer");

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

/* ==========================================
   OVERALL TOTAL (ALL COMPUTER DEPARTMENT LABS)
   ========================================== */
$total_query = "
SELECT
IFNULL((SELECT SUM(Quantity) FROM networking_lab),0) +
IFNULL((SELECT SUM(Quantity) FROM programming_lab1),0) +
IFNULL((SELECT SUM(Quantity) FROM programming_lab2),0) +
IFNULL((SELECT SUM(Quantity) FROM project_lab),0)
AS total_pc
";
$total_pc = mysqli_fetch_assoc(mysqli_query($conn, $total_query))['total_pc'];


/* ==========================================
   WORKING PC (Maintenance = 'No')
   ========================================== */
$working_query = "
SELECT
IFNULL((SELECT SUM(Quantity) FROM networking_lab WHERE Maintenance='No'),0) +
IFNULL((SELECT SUM(Quantity) FROM programming_lab1 WHERE Maintenance='No'),0) +
IFNULL((SELECT SUM(Quantity) FROM programming_lab2 WHERE Maintenance='No'),0) +
IFNULL((SELECT SUM(Quantity) FROM project_lab WHERE Maintenance='No'),0)
AS working_pc
";
$working_pc = mysqli_fetch_assoc(mysqli_query($conn, $working_query))['working_pc'];


/* ==========================================
   DEFECTED PC (Remark = 'Defected')
   ========================================== */
$defected_query = "
SELECT
IFNULL((SELECT SUM(Quantity) FROM networking_lab WHERE Remark='Defected'),0) +
IFNULL((SELECT SUM(Quantity) FROM programming_lab1 WHERE Remark='Defected'),0) +
IFNULL((SELECT SUM(Quantity) FROM programming_lab2 WHERE Remark='Defected'),0) +
IFNULL((SELECT SUM(Quantity) FROM project_lab WHERE Remark='Defected'),0)
AS defected_pc
";
$defected_pc = mysqli_fetch_assoc(mysqli_query($conn, $defected_query))['defected_pc'];


/* ==========================================
   UNDER MAINTENANCE (Maintenance = 'Yes')
   ========================================== */
$maintenance_query = "
SELECT
IFNULL((SELECT SUM(Quantity) FROM networking_lab WHERE Maintenance='Yes'),0) +
IFNULL((SELECT SUM(Quantity) FROM programming_lab1 WHERE Maintenance='Yes'),0) +
IFNULL((SELECT SUM(Quantity) FROM programming_lab2 WHERE Maintenance='Yes'),0) +
IFNULL((SELECT SUM(Quantity) FROM project_lab WHERE Maintenance='Yes'),0)
AS maintenance_pc
";
$maintenance_pc = mysqli_fetch_assoc(mysqli_query($conn, $maintenance_query))['maintenance_pc'];
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
          <section class="dashboard-top-sec">
            <div class="container-fluid">
              <div class="row" style="margin-top: 15px;">
                <div class="col-lg-8">
                  <div class="bg-white top-chart-earn">
                    <div class="row">
                      <div class="col-sm-4 my-2 pe-0">
                        <div class="last-month">
                          <h5>Dashboard</h5>
                          <p>Overview of Latest Month</p>

                          <div class="earn">
                            <h2>3367</h2>
                            <p>Current Month Sales</p>
                          </div>
                          <div class="sale mb-3">
                            <h2>95</h2>
                            <p>Current Month Sales</p>
                          </div>
                          <a href="" class="di-btn purple-gradient">Last Month Summary</a>
                        </div>
                      </div>

                      <div class="col-sm-8 my-2 ps-0">
                        <div class="classic-tabs">
                          <!-- -------Nav Tabs------- -->
                          <div class="tabs-wrapper">
                            <ul class="nav nav-pills chart-header-tab mb-3" id="pills-tab" role="tablist">
                              <li class="nav-item">
                                <a href="#" class="nav-link chart-nav  active" id="pills-week-tab" data-bs-toggle="pill" data-bs-target="#pills-month" type="button" role="tab" aria-controls="pills-month" aria-selected="true">Month</a>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="nav-link chart-nav " id="pills-year-tab" data-bs-toggle="pill" data-bs-target="#pills-year" type="button" role="tab" aria-controls="pills-year" aria-selected="false">Year</a>
                              </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                              <div class="tab-pane fade show active" id="pills-month" role="tabpanel" aria-labelledby="pills-month-tab">
                                <div class="box">
                                  <div id="bar"></div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="pills-year" role="tabpanel" aria-labelledby="pills-year-tab">year</div>
                            </div>
                          </div>
                        </div>


                      </div>
                    </div>

                    <div class="wre-sec">
                      <div class="row">
                        <div class="col-md-3 col-sm-3 col-6 my-1 bdr-cls">
                          <div class="earn-view">
                            <spna class="fas fa-computer earn-icon" style="color:black;"></spna>

                            <div class="earn-view-text">
                              <p class="name-text" style="color:black;">
                                Total PC
                              </p>
                              <h6 class="balance-text"><?php echo $total_pc; ?></h6>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-3 col-sm-3 col-6 my-1 bdr-cls">
                          <div class="earn-view">
                            <spna class="fas fa-computer earn-icon" style="color:black;"></spna>

                            <div class="earn-view-text">
                              <p class="name-text" style="color:black;">
                                Working PC
                              </p>
                              <h6 class="balance-text"><?php echo $working_pc; ?></h6>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-3 col-sm-3 col-6 my-1 bdr-cls">
                          <div class="earn-view">
                            <spna class="fas fa-computer earn-icon" style="color:black;"></spna>

                            <div class="earn-view-text">
                              <p class="name-text" style="color:black;">
                                Defected PC
                              </p>
                              <h6 class="balance-text"><?php echo $defected_pc; ?></h6>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-3 col-sm-3 col-6 my-1 bdr-cls">
                          <div class="earn-view">
                            <spna class="fas fa-computer earn-icon" style="color:black;"></spna>

                            <div class="earn-view-text">
                              <p class="name-text" style="color:black;">
                                Under Maintenance
                              </p>
                              <h6 class="balance-text"><?php echo $maintenance_pc; ?></h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4">
                  <div class="bg-white top-chart-earn">
                    <div id="donut"></div>
                  </div>

                  <div class="bg-white top-chart-earn mt-3">
                    <div class="classic-tabs">
                      <!-- Nav Tabs -->
                      <div class="tabs-wrapper">
                        <ul class="nav nav-pills year-tab mb-3" id="year-tab" role="tablist">

                          <li class="nav-item">
                            <a href="#" class="nav-link chart-nav  active" id="year-2024-tab" data-bs-toggle="pill" data-bs-target="#pills-2024" type="button" role="tab" aria-controls="pills-week" aria-selected="true">2024</a>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link chart-nav " id="year-2025-tab" data-bs-toggle="pill" data-bs-target="#pills-2025" type="button" role="tab" aria-controls="pills-month" aria-selected="false">2025</a>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link chart-nav " id="year-2026-tab" data-bs-toggle="pill" data-bs-target="#pills-2026" type="button" role="tab" aria-controls="pills-year" aria-selected="false">2026</a>
                          </li>

                        </ul>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </section>
<!-- 
          <section>
            <div class="sm-chart-sec mt-3">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-lg-4 col-md-6 col-sm-6 my-2">
                    <a href="computer_department/networking_lab.php">
                      <div class="revinue revinue-one_hybrid w-px-350">
                        <div class="revinue-hedding">
                          <div class="w-title">
                            <div class="w-icon">
                              <span class="fas fa-computer"></span>
                            </div>
                            <div class="sm-chart-text">
                              <p class="w-value"><?php echo $computer_total; ?></p>
                              <h5 style="color: white;">Computer Department</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>


                  <div class="col-lg-4 col-md-6 col-sm-6 my-2">
                    <a href="AI_department/AN_programming_lab1.php">
                      <div class="revinue revinue-one_hybrid w-px-350">
                        <div class="revinue-hedding">
                          <div class="w-title">
                            <div class="w-icon">
                              <span class="fas fa-computer"></span>
                            </div>
                            <div class="sm-chart-text">
                              <p class="w-value"><?php echo $ai_total; ?></p>
                              <h5 style="color: white;">Artificial Intelligence Department</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>

                  <div class="col-lg-4 col-md-6 col-sm-6 my-2">
                    <a href="electrical_department/basic_electrical_engineering_laboratory.php" style="text-decoration: none;">
                      <div class="revinue revinue-one_hybrid w-px-350">
                        <div class="revinue-hedding">
                          <div class="w-title">
                            <div class="w-icon">
                              <span class="fas fa-computer"></span>
                            </div>
                            <div class="sm-chart-text">
                              <p class="w-value"><?php echo $electrical_total; ?></p>
                              <h5 style="color: white;">Electrical Department</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>

                  <div class="col-lg-4 col-md-6 col-sm-6 my-2">
                    <a href="Electronics_department/basic_electronics_lab.php" style="text-decoration: none;">
                      <div class="revinue revinue-one_hybrid w-px-350">
                        <div class="revinue-hedding">
                          <div class="w-title">
                            <div class="w-icon">
                              <span class="fas fa-computer"></span>
                            </div>
                            <div class="sm-chart-text">
                              <p class="w-value"><?php echo $electronics_total; ?></p>
                              <h5 style="color: white;">Electronics Department</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>

                  <div class="col-lg-4 col-md-6 col-sm-6 my-2">
                    <a href="Mechanical_department/me_lab_3.php" style="text-decoration: none;">
                      <div class="revinue revinue-one_hybrid w-px-350">
                        <div class="revinue-hedding">
                          <div class="w-title">
                            <div class="w-icon">
                              <span class="fas fa-computer"></span>
                            </div>
                            <div class="sm-chart-text">
                              <p class="w-value"><?php echo $mechanical_total; ?></p>
                              <h5 style="color: white;">Mechanical Department</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </section> -->

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
  include '../../com_lab_web/common/footer_link.php';

  ?>
  
  <!-- Core JS -->
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>


  <!-- <script src="../assets/js/main.js"></script> -->
  <script src="/computer_lab_web/com_lab_web/assets/js/jquery.js"></script>
  <script src="./scripts.js"></script>
  <script src="./data.js"></script>
  <script src="../assets/js/chart/apexcharts.min.js"></script>
  <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
</body>

</html>