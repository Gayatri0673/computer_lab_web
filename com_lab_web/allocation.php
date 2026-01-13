<!DOCTYPE html>
<html lang="en">
<head>
    <title>Computer Allocation</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-4">

    <h2 class="text-center text-primary mb-4">Computer Allocation Form</h2>

    <form>
        <div class="row justify-content-center">
            <div class="col-md-6">

                <!-- System No -->
                <div class="mb-3">
                    <label class="form-label">System No</label>
                    <input type="text" class="form-control" placeholder="Enter System No">
                </div>

                <!-- Allocate To -->
                <div class="mb-3">
                    <label class="form-label">Allocate To</label>
                    <select class="form-select">
                        <option>Select</option>
                        <option>Lab</option>
                        <option>Teacher</option>
                    </select>
                </div>

                <!-- Lab Name -->
                <div class="mb-3">
                    <label class="form-label">Lab Name</label>
                    <select class="form-select">
                        <option>Select Lab</option>
                        <option>Project Lab</option>
                        <option>Networking Lab</option>
                        <option>Programming Lab1</option>
                        <option>Programming Lab2</option>
                        <option>Software Development Lab</option>
                    </select>
                </div>

                <!-- Teacher Name -->
                <div class="mb-3">
                    <label class="form-label">Teacher Name</label>
                    <input type="text" class="form-control" placeholder="Enter Teacher Name">
                </div>

                <!-- Button -->
                <div class="text-center">
                    <form method="post">

    <button type="submit" formaction="view_allocation.php" class="btn btn-primary">
        Allocate Computer
    </button>

    <button type="submit" formaction="edit_allocation.php" class="btn btn-primary">
        Edit
    </button>

</form>
                </div>
                

            </div>
        </div>
    </form>

   
</body>
</html>