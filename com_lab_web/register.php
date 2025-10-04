<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f5f5f5;
        }

        .register-box {
            max-width: 450px;
            margin: 80px auto;
            padding: 25px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .register-box h3 {
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
            color: #333;
        }

        .btn-custom {
            width: 100%;
            border-radius: 8px;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="register-box">
            <h3>Register</h3>
            <form action="register.php" method="POST">

                <div class="mb-3">
                    <label for="fullname" class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name" required>
                </div>

                <div class="mb-3">
                    <label for="branch" class="form-label">Branch</label>
                    <input type="branch" name="branch" id="branch" class="form-control" placeholder="Enter your branch" required>
                </div>

                <div class="mb-3">
  <label for="post" class="form-label">Post</label>
  <select name="post" id="post" class="form-select" required>
    <option value="">Select post</option>
    <option value="hod">HOD</option>
    <option value="lab-assistant">Lab Assistant</option>
    <option value="lecturer">Lecturer</option>
  </select>
</div>

                <div class="mb-3">
                    <label for="lab" class="form-label">Lab</label>
                    <input type="lab" name="lab" id="lab" class="form-control" placeholder="Enter lab name" required>
                </div>

                <div class="mb-3">
                    <label for="user_name" class="form-label">User Name</label>
                    <input type="user_name" name="user_name" id="user_name" class="form-control" placeholder="Create a password" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Create a password" required>
                </div>

                <div class="mb-3">
                    <label for="confirm_password" class="form-label">Confirm Password</label>
                    <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Confirm password" required>
                </div>

                <button type="submit" class="btn btn-primary btn-custom">Register</button>

                <div class="text-center mt-3">
                    <small>Already have an account? <a href="login.php">Login</a></small>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>