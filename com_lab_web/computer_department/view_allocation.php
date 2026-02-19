<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "", "computer");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// DELETE HANDLER
if (isset($_POST['delete_btn'])) {
    $delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);
    $delete_query = "DELETE FROM co_view_allocation WHERE system_no='$delete_id'";
    mysqli_query($conn, $delete_query);
}

// SEARCH HANDLER
$search = "";
if (isset($_GET['search'])) {
    $search = mysqli_real_escape_string($conn, $_GET['search']);
    $query = "SELECT * FROM co_view_allocation
              WHERE system_no LIKE '%$search%'
              OR lab_name LIKE '%$search%'
              OR teacher_name LIKE '%$search%'";
} else {
    $query = "SELECT * FROM co_view_allocation";
}

$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Computer Allocation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
<div class="container mt-4">

    <div class="row">
        <div class="col-lg-6"></div>
        <div class="col-lg-6 d-flex justify-content-end">

            <!-- SEARCH -->
            <form method="get" class="d-flex">
                <input type="text" name="search" class="form-control m-4 shadow-none"
                       placeholder="Search..." value="<?php echo htmlspecialchars($search); ?>">
            </form>

            <a href="allocation.php">
                <button type="button" class="btn btn-primary m-4">ADD+</button>
            </a>

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
            <?php
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['system_no']); ?></td>
                        <td><?php echo htmlspecialchars($row['allocated_to']); ?></td>
                        <td><?php echo htmlspecialchars($row['lab_name']); ?></td>
                        <td><?php echo $row['teacher_name'] ? htmlspecialchars($row['teacher_name']) : '-'; ?></td>

                        <td>
                            <!-- Edit Button -->
                            <a href="edit_allocation.php?system_no=<?php echo urlencode($row['system_no']); ?>">
                                <button type="button" class="btn rounded-pill btn-primary">Edit</button>
                            </a>

                            <!-- Delete Button -->
                            <form method="post" class="d-lg-inline">
                                <input type="hidden" name="delete_id" value="<?php echo htmlspecialchars($row['system_no']); ?>">
                                <button type="submit" name="delete_btn" class="btn rounded-pill btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <?php
                }
            } else {
                echo "<tr><td colspan='5'>No Records Found</td></tr>";
            }
            ?>
            </tbody>

        </table>
    </div>
</div>

</body>
</html>

<?php mysqli_close($conn); ?>
