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
        
        <!-- Left image -->
        <div class="col-md-4">
          <img src="../assets/img/computer.png" 
               class="img-fluid rounded-start" alt="Equipment">
        </div>

        <!-- Right details -->
        <div class="col-md-8">
          <div class="card-body">
            <h3 class="card-title">Computer Equipment Details</h3>
            

            <ul class="list-group mb-3">
              <li class="list-group-item"><strong>Name of Equipment:</strong>CPU-HP Desktop Model,HP Keyboard,HP Mouse,HP Monitor</li>
              <li class="list-group-item"><strong>Accession No:</strong>CSMSSPOLY/24-25/CO/CPU/01 </li>
              <li class="list-group-item"><strong>System No:</strong> 01</li>
              <li class="list-group-item"><strong>Amount:</strong> ₹ 46,500</li>
              <li class="list-group-item"><strong>Quantity:</strong> 10</li>
              <li class="list-group-item"><strong>Configuration:</strong> 8GB RAM, 512GB SSD, Intel UHD</li>
              <li class="list-group-item"><strong>Maintenance:</strong> Change the keyboard and mouse</li>
              <li class="list-group-item"><strong>Warranty:</strong> 5 Years</li>
              <li class="list-group-item"><strong>Processor:</strong> Intel Core i5 12th Gen</li>
            </ul>

            <!-- Notes Area -->
            <div class="mb-3">
              <label for="notes" class="form-label"><strong>Remarks:</strong></label>
              <textarea id="notes" class="form-control" rows="3" placeholder="Enter remarks about this equipment..."></textarea>
            </div>

            <!-- Action Buttons -->
            <div class="d-flex gap-2">
              <a href="edit_networking_lab.php" class="btn btn-success">Update</a>
              <a href="#" class="btn btn-danger">Delete</a>
              <a href="networking_lab.php" class="btn btn-secondary">Back</a>
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>