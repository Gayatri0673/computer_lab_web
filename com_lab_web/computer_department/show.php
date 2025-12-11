<?php
$conn = mysqli_connect("localhost", "root", "", "computer");
if (!isset($_GET['lab']) || !isset($_GET['accession_no'])) {
  die("Invalid Request!");
}

$lab = $_GET['lab'];
$accession_no = $_GET['accession_no'];
$allowed_labs = [
  "programming_lab1",
  "programming_lab2",
  "networking_lab",
  "project_lab",
  "software_development_lab"
];

if (!in_array($lab, $allowed_labs)) {
  die("Unauthorized Table Access!");
}
$query = "SELECT * FROM $lab WHERE accession_no='$accession_no'";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) == 0) {
  die("Record Not Found!");
}
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Equipment Details</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
  <div class="container my-5">
    <div class="card shadow-lg">
      <div class="row g-0">

        <div class="col-md-4">
          <img src="../assets/img/computer.png" class="img-fluid rounded-start">
        </div>

        <div class="col-md-8">
          <div class="card-body">
            <h3 class="card-title">Equipment Details</h3>

            <ul class="list-group mb-3">
              <li class="list-group-item"><strong>Name:</strong> <?= $row['name_of_equipment']; ?></li>
              <li class="list-group-item"><strong>Accession No:</strong> <?= $row['accession_no']; ?></li>
              <li class="list-group-item"><strong>System No:</strong> <?= $row['System_no']; ?></li>
              <li class="list-group-item"><strong>GRN No:</strong> <?= $row['GRN_no']; ?></li>
              <li class="list-group-item"><strong>Unit Rate:</strong> <?= $row['Unit_Rate']; ?></li>
              <li class="list-group-item"><strong>Quantity:</strong> <?= $row['Quantity']; ?></li>
              <li class="list-group-item"><strong>Amount:</strong> <?= $row['Amount']; ?></li>
              <li class="list-group-item"><strong>Configuration:</strong> <?= $row['configration']; ?></li>
              <li class="list-group-item"><strong>Maintenance:</strong> <?= $row['Maintenance']; ?></li>
              <li class="list-group-item"><strong>Remarks:</strong> <?= $row['Remark']; ?></li>
            </ul>

            <div class="d-flex gap-2">
              <a href="edit_<?= $lab ?>.php?accession_no=<?= $row['accession_no']; ?>" class="btn btn-success">Update</a>

              <form action="<?= $lab ?>.php" method="POST">
                <input type="hidden" name="delete_id" value="<?= $row['accession_no']; ?>">
                <button type="submit" name="delete_btn" class="btn btn-danger">Delete</button>
              </form>

              <a href="<?= $lab ?>.php" class="btn btn-secondary">Back</a>
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>
</body>

</html>