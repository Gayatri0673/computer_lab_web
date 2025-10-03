
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
  data-template="vertical-menu-template-free"
>
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
.one{
  width:50px;
  height:50px;
}
  </style>
  -->
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
              <h4 class="text-muted fw-bold py-3 mb-4">COMPUTER CENTER</h4>

             
                          
            
              <!-- Hoverable Table rows -->
              <div class="card">
                <div class="row">
                  <div class="col-lg-6 ">
                    <div class="h5 card-header">Programming Lab 2</div>
                  </div>
                 
                  <div class="col-lg-6 d-flex justify-content-end">
                    <a href="./add_programming_lab2.php">
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
                <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/HCL/2009-10/CPU-01</td>
                <td>01</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/HCL/2009-10/CPU-02</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-03</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-04</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-05</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-06</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-07</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-08</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-09</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-10</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-69</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-12</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-13</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-14</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-15</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-16</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-17</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-18</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-19</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-20</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-21</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-22</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-23</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-24</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-25</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-26</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-27</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-028</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-70</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-30</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-62</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-32</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-51</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-28</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-33</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-34</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-35</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-52</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-37</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-38</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-39</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-40</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-41</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-42</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-43</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-53</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-45</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-46</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-47</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-48</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-49</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-54</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-54</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-81</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-80</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-79</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-64</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-65</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-66</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-69</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-61</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-107</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                <td>CSMSS/POLY/HCL/2009-10/CPU-76</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                        <th scope="row">64</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/HCL/2009-10/CPU-70</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                        <th scope="row">65</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/HCL/2009-10/CPU-71</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                        <th scope="row">66</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/HCL/2009-10/CPU-72</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                        <th scope="row">67</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/HCL/2009-10/CPU-73</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                        <th scope="row">68</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/HCL/2009-10/CPU-74</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                        <th scope="row">69</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/HCL/2009-10/CPU-76</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                        <th scope="row">70</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/HCL/2009-10/CPU-58</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                        <th scope="row">71</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/HCL/2009-10/CPU-05</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                        <th scope="row">72</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/HCL/2009-10/CPU-10</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                        <th scope="row">73</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/HCL/2009-10/CPU-24</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                        <th scope="row">74</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/HCL/2009-10/CPU-89</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                        <th scope="row">75</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/HCL/2009-10/CPU-69</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                        <th scope="row">76</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/HCL/2009-10/CPU-82</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                        <th scope="row">77</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/HCL/2009-10/CPU-68</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                        <th scope="row">78</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/HCL/2009-10/CPU-89</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                        <th scope="row">79</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/HCL/2009-10/CPU-86</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                        <th scope="row">80</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/HCL/2009-10/CPU-66</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                        <th scope="row">81</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/HCL/2009-10/CPU-83</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                        <th scope="row">82</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/HCL/2009-10/CPU-83</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                        <th scope="row">83</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/HCL/2009-10/CPU-45</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                        <th scope="row">84</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/HCL/2009-10/CPU-56</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                        <th scope="row">85</th>
                        <td>CPU-LENOVO Desktop Model,LENOVO  Keyboard,LENOVO Mouse,LENOVO Monitor</td>
                <td>CSMSS/POLY/HCL/2009-10/CPU-68</td>
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
                                                <a href="./edit_programming_lab2.php" class="text-white">
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
                      <!-- <?php 
                      include '../common/dbcon.php';
                      $sql = "SELECT event_id,title,description,image FROM event"; 
                      $result = mysqli_query($conn, $sql);
                      if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                          echo "
                          <tr>
                            <td><i class=\"fab fa-angular fa-lg text-danger me-3\"></i> <strong>".htmlspecialchars($row['event_id'])."</strong></td>
                            <td><p class=\"page-para \">".htmlspecialchars($row['title'])."</p></td>
                            <td>
                              <img src=\"".htmlspecialchars($row['image'])."\" alt=\"Avatar\" class=\"one\" />
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