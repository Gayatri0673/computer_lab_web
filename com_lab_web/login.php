<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Page</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #f5f5f5;
    }
    .login-box {
      max-width: 400px;
      margin: 100px auto;
      padding: 25px;
      background: white;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    .login-box h3 {
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
    <div class="login-box">
      <h3>Login</h3>
      <form action="login.php" method="POST">
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" name="username" id="username" class="form-control" placeholder="Enter your username" required>
        </div>
        
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" required>
        </div>
        
        <button type="submit" class="btn btn-primary btn-custom">Login</button>
        
        <div class="text-center mt-3">
          <small>Don’t have an account? <a href="register.php">Register</a></small>
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>