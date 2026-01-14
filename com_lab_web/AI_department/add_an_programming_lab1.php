<?php
 $conn = mysqli_connect("localhost", "root", "", "computer");

if (!$conn) {
    die("Database Connection Failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $Name_of_Equipment = $_POST['Name_of_Equipment'];
    $Accession_No = $_POST['Accession_No'];
    $Configration = $_POST['Configration'];
    $Maintenance = $_POST['Maintenance'];
    $System_no = $_POST['System_no'];
    $GRN_no = $_POST['GRN_no'];
    $Unit_Rate = $_POST['Unit_Rate'];
    $Quantity = $_POST['Quantity'];
    $Amount = $_POST['Amount'];
    $Remark = $_POST['Remark'];

    $query = "INSERT INTO an_programming_lab1
        (name_of_equipment, accession_no, configration, Maintenance, System_no, GRN_no, Unit_Rate, Quantity, Amount, Remark)
        VALUES 
        ('$Name_of_Equipment', '$Accession_No', '$Configration', '$Maintenance', '$System_no', '$GRN_no', '$Unit_Rate', '$Quantity', '$Amount', '$Remark')";
    
    if (mysqli_query($conn, $query)) {
        header("Location: AN_programming_lab1.php?msg=added");
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr"
    data-theme="theme-default" data-assets-path="../assets/"
    data-template="vertical-menu-template-free">
<?php include '../common/header_link.php'; ?>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <?php include '../common/AI_hod_sidebar.php';?>
            <div class="layout-page">
                <?php include '../common/header.php'; ?>
                <div class="container-p-x">
                    <div class="card my-4">
                        <h5 class="card-header">ADD Details</h5>
                        <div class="card-body">
                            <form method="POST">
                                <div class="row mt-3">
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="Name_of_Equipment" required />
                                            <label>Name of Equipment</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="number" step="0.01" class="form-control" name="Accession_No" required />
                                            <label>Accession No.</label>
                                        </div>
                                    </div>
                                </div>

                                  <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="Configration" required />
                                            <label>Configration</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="number" step="0.01" class="form-control" name="Maintenance" required />
                                            <label>Maintenance</label>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="System_no" required />
                                            <label>System no</label>
                                        </div>
                                    </div>


                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="GRN_no" required />
                                            <label>GRN no</label>
                                        </div>
                                    </div>



                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="Unit_Rate" required />
                                            <label>Unit Rate</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="Quantity" required />
                                            <label>Quantity</label>
                                        </div>
                                    </div>


                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="Amount" required />
                                            <label>Amount</label>
                                        </div>
                                    </div>


                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="Remark" required />
                                            <label>Remark</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Add</button>
                                    <a href="./AN_programming_lab1.php" class="btn btn-secondary">Back</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
           
</body>

</html>