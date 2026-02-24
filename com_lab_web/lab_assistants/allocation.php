<?php
// ===========================
// Backend: Database connection
// ===========================
$conn = mysqli_connect("localhost", "root", "", "computer");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// ===========================
// Handle form submission
// ===========================
if (isset($_POST['allocate_btn'])) {
    // Get form data safely
    $system_no = mysqli_real_escape_string($conn, $_POST['system_no']);
    $allocated_to = mysqli_real_escape_string($conn, $_POST['allocated_to']);
    $lab_name = mysqli_real_escape_string($conn, $_POST['lab_name']);
    $teacher_name = mysqli_real_escape_string($conn, $_POST['teacher_name']);

    // Insert into database
    $insert_query = "INSERT INTO co_view_allocation (system_no, allocated_to, lab_name, teacher_name) 
                     VALUES ('$system_no', '$allocated_to', '$lab_name', '$teacher_name')";

    if (mysqli_query($conn, $insert_query)) {
        // Redirect to view page after successful insertion
        header("Location: view_allocation.php");
        exit();
    } else {
        $error = "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Computer Allocation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
<div class="container mt-4">

    <h2 class="text-center text-primary mb-4">Computer Allocation Form</h2>

    <?php if (isset($error)) { ?>
        <div class="alert alert-danger"><?php echo $error; ?></div>
    <?php } ?>

    <!-- Form starts -->
    <form method="post">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <!-- System No -->
                <div class="mb-3">
                    <label class="form-label">System No</label>
                    <input type="text" name="system_no" class="form-control" placeholder="Enter System No" required>
                </div>

                <!-- Allocate To -->
                <div class="mb-3">
                    <label class="form-label">Allocate To</label>
                    <select class="form-select" name="allocated_to" required>
                        <option value="">Select</option>
                        <option value="Lab">Lab</option>
                        <option value="Teacher">Teacher</option>
                    </select>
                </div>

                <!-- Lab Name -->
                <div class="mb-3">
                    <label class="form-label">Lab Name</label>
                    <select class="form-select" name="lab_name">
                        <option value="">Select Lab</option>
                        <option value="Project Lab">Project Lab</option>
                        <option value="Networking Lab">Networking Lab</option>
                        <option value="Programming Lab1">Programming Lab1</option>
                        <option value="Programming Lab2">Programming Lab2</option>
                        <option value="Software Development Lab">Software Development Lab</option>
                    </select>
                </div>

                <!-- Teacher Name -->
                <div class="mb-3">
                    <label class="form-label">Teacher Name</label>
                    <input type="text" name="teacher_name" class="form-control" placeholder="Enter Teacher Name">
                </div>

                <!-- Buttons -->
                <div class="text-center">
                    <button type="submit" name="allocate_btn" class="btn btn-primary">Allocate Computer</button>
                    <a href="view_allocation.php" class="btn btn-danger">Back</a>
                </div>

            </div>
        </div>
    </form>
    <!-- Form ends -->

</div>
</body>
</html>

<?php mysqli_close($conn); ?>
