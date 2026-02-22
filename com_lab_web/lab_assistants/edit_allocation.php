<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "", "computer");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$row = null;

// Fetch record using system_no from GET
if (isset($_GET['system_no'])) {
    $system_no = mysqli_real_escape_string($conn, $_GET['system_no']);

    $query = "SELECT * FROM co_view_allocation WHERE system_no = '$system_no'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        die("Record not found.");
    }
}

// Handle update
if (isset($_POST['update_btn'])) {

    // NEW system no (editable)
    $new_system_no = mysqli_real_escape_string($conn, $_POST['system_no']);

    // ORIGINAL system no (hidden)
    $old_system_no = mysqli_real_escape_string($conn, $_POST['old_system_no']);

    $allocated_to = mysqli_real_escape_string($conn, $_POST['allocated_to']);
    $lab_name = mysqli_real_escape_string($conn, $_POST['lab_name']);
    $teacher_name = mysqli_real_escape_string($conn, $_POST['teacher_name']);

    $update_query = "UPDATE co_view_allocation SET 
                        system_no = '$new_system_no',
                        allocated_to = '$allocated_to',
                        lab_name = '$lab_name',
                        teacher_name = '$teacher_name'
                     WHERE system_no = '$old_system_no'";

    if (mysqli_query($conn, $update_query)) {
        header("Location: view_allocation.php");
        exit();
    } else {
        $error = "Error updating record: " . mysqli_error($conn);
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

    <form method="post">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <!-- System No (Editable) -->
                <div class="mb-3">
                    <label class="form-label">System No Name</label>
                    <input type="text" name="system_no" class="form-control"
                           value="<?php echo $row['system_no']; ?>" required>
                </div>

                <!-- Hidden original system_no -->
                <input type="hidden" name="old_system_no"
                       value="<?php echo $row['system_no']; ?>">

                <div class="mb-3">
                    <label class="form-label">Allocate To</label>
                    <select class="form-select" name="allocated_to" required>
                        <option value="Lab" <?php echo $row['allocated_to']=='Lab'?'selected':''; ?>>Lab</option>
                        <option value="Teacher" <?php echo $row['allocated_to']=='Teacher'?'selected':''; ?>>Teacher</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Lab Name</label>
                    <select class="form-select" name="lab_name">
                        <option value="Project Lab" <?php echo $row['lab_name']=='Project Lab'?'selected':''; ?>>Project Lab</option>
                        <option value="Networking Lab" <?php echo $row['lab_name']=='Networking Lab'?'selected':''; ?>>Networking Lab</option>
                        <option value="Programming Lab1" <?php echo $row['lab_name']=='Programming Lab1'?'selected':''; ?>>Programming Lab1</option>
                        <option value="Programming Lab2" <?php echo $row['lab_name']=='Programming Lab2'?'selected':''; ?>>Programming Lab2</option>
                        <option value="Software Development Lab" <?php echo $row['lab_name']=='Software Development Lab'?'selected':''; ?>>Software Development Lab</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Teacher Name</label>
                    <input type="text" name="teacher_name" class="form-control"
                           value="<?php echo $row['teacher_name']; ?>" required>
                </div>

                <div class="text-center">
                    <button type="submit" name="update_btn" class="btn btn-primary">Update Allocation</button>
                    <a href="view_allocation.php" class="btn btn-danger">Back</a>
                </div>

            </div>
        </div>
    </form>
</div>

</body>
</html>

<?php mysqli_close($conn); ?>
