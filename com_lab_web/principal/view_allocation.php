<!DOCTYPE html>
<html lang="en">
<head>
    <title>Computer Allocation</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-4">
    <div class="row">
                                <div class="col-lg-6 ">

                                </div>

                                <div class="col-lg-6 d-flex justify-content-end">
                                    <input type="text" class="form-control border-black m-4 shadow-none" placeholder="Search..." aria-label="Search...">

                                    <a href="./allocation.php">
                                        <button type="button" class="btn btn-primary m-4">ADD+</button>
                                    </a>
                                     
                                    <div class="text-center">
                                        <button onclick="window.print()" class="btn btn-primary m-4">Print</button>
                                    </div>
                            </div>
    <h3 class="text-center text-primary mb-3">Allocated Computer List</h3>

    <div class="table-responsive">
        <table class="table table-bordered table-striped text-center">
            <thead class="table-primary">
                <tr>
                    <th>System No</th>
                    <th>Allocated To</th>
                    <th>Lab Name</th>
                    <th>Teacher Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>PC-01</td>
                    <td>Lab</td>
                    <td>Programming Lab 1</td>
                    <td>-</td>
                    <td><div>
                                                            <a href="show.php?lab=software_development_lab&accession_no=<?= $project_row['accession_no']; ?>">
                                                                <button class="btn rounded-pill btn-success me-1">Show</button>
                                                            </a>
                                                            </a>
                                                            <a href="./edit_allocation.php?accession_no=<?php echo $project_row["accession_no"]; ?>" class="text-white">
                                                                <button type="button" class="btn rounded-pill btn-primary">
                                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                                </button>
                                                            </a>

                                                            <form action="software_development_lab.php" method="POST" class="d-lg-inline">
                                                                <input type="hidden" name="delete_id" value="<?php echo $project_row['accession_no']; ?>">
                                                                <button type="submit" name="delete_btn" class="btn rounded-pill btn-danger">Delete</button>
                                                            </form>
                                                        </div></td>
                    
                    
                </tr>
                <tr>
                    <td>PC-02</td>
                    <td>Teacher</td>
                    <td>Programming Lab 2</td>
                    <td>Prof. Heena Pathan</td>
                    <td><div>
                                                            <a href="show.php?lab=software_development_lab&accession_no=<?= $project_row['accession_no']; ?>">
                                                                <button class="btn rounded-pill btn-success me-1">Show</button>
                                                            </a>
                                                            </a>
                                                            <a href="./edit_allocation.php?accession_no=<?php echo $project_row["accession_no"]; ?>" class="text-white">
                                                                <button type="button" class="btn rounded-pill btn-primary">
                                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                                </button>
                                                            </a>

                                                            <form action="software_development_lab.php" method="POST" class="d-lg-inline">
                                                                <input type="hidden" name="delete_id" value="<?php echo $project_row['accession_no']; ?>">
                                                                <button type="submit" name="delete_btn" class="btn rounded-pill btn-danger">Delete</button>
                                                            </form>
                                                        </div></td>
                </tr>
                <tr>
                    <td>PC-03</td>
                    <td>Teacher</td>
                    <td>Software Development Lab</td>
                    <td>Prof. Mohini Jadhav </td>
                    <td><div>
                                                            <a href="show.php?lab=software_development_lab&accession_no=<?= $project_row['accession_no']; ?>">
                                                                <button class="btn rounded-pill btn-success me-1">Show</button>
                                                            </a>
                                                            </a>
                                                            <a href="./edit_allocation.php?accession_no=<?php echo $project_row["accession_no"]; ?>" class="text-white">
                                                                <button type="button" class="btn rounded-pill btn-primary">
                                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                                </button>
                                                            </a>

                                                            <form action="software_development_lab.php" method="POST" class="d-lg-inline">
                                                                <input type="hidden" name="delete_id" value="<?php echo $project_row['accession_no']; ?>">
                                                                <button type="submit" name="delete_btn" class="btn rounded-pill btn-danger">Delete</button>
                                                            </form>
                                                        </div></td>
                </tr>
                <tr>
                <td>PC-04</td>
                    <td>Teacher</td>
                    <td>Programming Lab 2</td>
                    <td>Prof.Nisha Wagh</td>
                    <td><div>
                                                            <a href="show.php?lab=software_development_lab&accession_no=<?= $project_row['accession_no']; ?>">
                                                                <button class="btn rounded-pill btn-success me-1">Show</button>
                                                            </a>
                                                            </a>
                                                            <a href="./edit_allocation.php?accession_no=<?php echo $project_row["accession_no"]; ?>" class="text-white">
                                                                <button type="button" class="btn rounded-pill btn-primary">
                                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                                </button>
                                                            </a>

                                                            <form action="software_development_lab.php" method="POST" class="d-lg-inline">
                                                                <input type="hidden" name="delete_id" value="<?php echo $project_row['accession_no']; ?>">
                                                                <button type="submit" name="delete_btn" class="btn rounded-pill btn-danger">Delete</button>
                                                            </form>
                                                        </div></td>
                </tr>
                <tr>
                    <td>PC-05</td>
                    <td>Lab</td>
                    <td>Networking Lab</td>
                    <td>-</td>
                    <td><div>
                                                            <a href="show.php?lab=software_development_lab&accession_no=<?= $project_row['accession_no']; ?>">
                                                                <button class="btn rounded-pill btn-success me-1">Show</button>
                                                            </a>
                                                            </a>
                                                            <a href="./edit_allocation.php?accession_no=<?php echo $project_row["accession_no"]; ?>" class="text-white">
                                                                <button type="button" class="btn rounded-pill btn-primary">
                                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                                </button>
                                                            </a>

                                                            <form action="software_development_lab.php" method="POST" class="d-lg-inline">
                                                                <input type="hidden" name="delete_id" value="<?php echo $project_row['accession_no']; ?>">
                                                                <button type="submit" name="delete_btn" class="btn rounded-pill btn-danger">Delete</button>
                                                            </form>
                                                        </div></td>
                </tr> 
                <tr>
                    <td>PC-06</td>
                    <td>Lab</td>
                    <td>Programming Lab 1</td>
                    <td>-</td>
                    <td><div>
                                                            <a href="show.php?lab=software_development_lab&accession_no=<?= $project_row['accession_no']; ?>">
                                                                <button class="btn rounded-pill btn-success me-1">Show</button>
                                                            </a>
                                                            </a>
                                                            <a href="./edit_allocation.php.php?accession_no=<?php echo $project_row["accession_no"]; ?>" class="text-white">
                                                                <button type="button" class="btn rounded-pill btn-primary">
                                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                                </button>
                                                            </a>

                                                            <form action="software_development_lab.php" method="POST" class="d-lg-inline">
                                                                <input type="hidden" name="delete_id" value="<?php echo $project_row['accession_no']; ?>">
                                                                <button type="submit" name="delete_btn" class="btn rounded-pill btn-danger">Delete</button>
                                                            </form>
                                                        </div></td>
                </tr>
                <tr>
                    <td>PC-07</td>
                    <td>Teacher</td>
                    <td>Project Lab</td>
                    <td>Prof.Anu Kundlikar</td>
                    <td><div>
                                                            <a href="show.php?lab=software_development_lab&accession_no=<?= $project_row['accession_no']; ?>">
                                                                <button class="btn rounded-pill btn-success me-1">Show</button>
                                                            </a>
                                                            </a>
                                                            <a href="./edit_allocation.php.php?accession_no=<?php echo $project_row["accession_no"]; ?>" class="text-white">
                                                                <button type="button" class="btn rounded-pill btn-primary">
                                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                                </button>
                                                            </a>

                                                            <form action="software_development_lab.php" method="POST" class="d-lg-inline">
                                                                <input type="hidden" name="delete_id" value="<?php echo $project_row['accession_no']; ?>">
                                                                <button type="submit" name="delete_btn" class="btn rounded-pill btn-danger">Delete</button>
                                                            </form>
                                                        </div></td>
                </tr>
                <tr>
                    <td>PC-08</td>
                    <td>Lab</td>
                    <td>Programming Lab 1</td>
                    <td>-</td>
                    <td><div>
                                                            <a href="show.php?lab=software_development_lab&accession_no=<?= $project_row['accession_no']; ?>">
                                                                <button class="btn rounded-pill btn-success me-1">Show</button>
                                                            </a>
                                                            </a>
                                                            <a href="./edit_allocation.php.php?accession_no=<?php echo $project_row["accession_no"]; ?>" class="text-white">
                                                                <button type="button" class="btn rounded-pill btn-primary">
                                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                                </button>
                                                            </a>

                                                            <form action="software_development_lab.php" method="POST" class="d-lg-inline">
                                                                <input type="hidden" name="delete_id" value="<?php echo $project_row['accession_no']; ?>">
                                                                <button type="submit" name="delete_btn" class="btn rounded-pill btn-danger">Delete</button>
                                                            </form>
                                                        </div></td>
                </tr>
                <tr>
                    <td>PC-09</td>
                    <td>Lab</td>
                    <td>Programming Lab 2</td>
                    <td>-</td>
                    <td><div>
                                                            <a href="show.php?lab=software_development_lab&accession_no=<?= $project_row['accession_no']; ?>">
                                                                <button class="btn rounded-pill btn-success me-1">Show</button>
                                                            </a>
                                                            </a>
                                                            <a href="./edit_allocation.php.php?accession_no=<?php echo $project_row["accession_no"]; ?>" class="text-white">
                                                                <button type="button" class="btn rounded-pill btn-primary">
                                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                                </button>
                                                            </a>

                                                            <form action="software_development_lab.php" method="POST" class="d-lg-inline">
                                                                <input type="hidden" name="delete_id" value="<?php echo $project_row['accession_no']; ?>">
                                                                <button type="submit" name="delete_btn" class="btn rounded-pill btn-danger">Delete</button>
                                                            </form>
                                                        </div></td>
                </tr>
                <tr>
                    <td>PC-10</td>
                    <td>Lab</td>
                    <td>Software Development Lab</td>
                    <td>-</td>
                    <td><div>
                                                            <a href="show.php?lab=software_development_lab&accession_no=<?= $project_row['accession_no']; ?>">
                                                                <button class="btn rounded-pill btn-success me-1">Show</button>
                                                            </a>
                                                            </a>
                                                            <a href="./edit_allocation.php.php?accession_no=<?php echo $project_row["accession_no"]; ?>" class="text-white">
                                                                <button type="button" class="btn rounded-pill btn-primary">
                                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                                </button>
                                                            </a>

                                                            <form action="software_development_lab.php" method="POST" class="d-lg-inline">
                                                                <input type="hidden" name="delete_id" value="<?php echo $project_row['accession_no']; ?>">
                                                                <button type="submit" name="delete_btn" class="btn rounded-pill btn-danger">Delete</button>
                                                            </form>
                                                        </div></td>
                </tr>

            </tbody>
        </table>
    </div>

</div>
   
</body>
</html>