<?php
session_start();

// Connect to database
$conn = mysqli_connect("localhost", "root", "", "computer");
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $username = trim($_POST['username']);
  $password = $_POST['password'];

  // Prepare statement to prevent SQL injection
  $stmt = $conn->prepare("SELECT * FROM register WHERE user_name = ?");
  $stmt->bind_param("s", $username);
  $stmt->execute();

  $result = $stmt->get_result();

  if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();

    // Verify password
    if (password_verify($password, $user['password'])) {
      // Store info in session
      $_SESSION['user_id'] = $user['id'];
      $_SESSION['user_name'] = $user['user_name'];
      $_SESSION['role'] = $user['post'];
      $_SESSION['branch'] = $user['branch'];
      $_SESSION['lab'] = $user['lab'];

      // Redirect based on role
      if ($user['post'] === "principal") {
        header("Location: principal/index.php");
        exit();
      } elseif ($user['post'] === "hod") {
        // Map branch to department folder
        $branch_map = [
          "computer" => "computer_department",
          "civil" => "civil_department",
          "electrical" => "electrical_department",
          "electronics" => "electronics_department",
          "mechanical" => "mechanical_department",
          "ai" => "AI_department"
        ];

        $branch_lower = strtolower(trim($user['branch']));
        $folder = $branch_map[$branch_lower] ?? null;

        if ($folder) {
          header("Location: $folder/index.php");
          exit();
        } else {
          echo "<script>alert('Branch folder not found');</script>";
        }
      }
    



      
elseif (strtolower($user['post']) === "lab-assistant") {

    $lab_folder = trim($user['lab']); // project_lab

    $file_path = __DIR__ . "/lab_assistants/$lab_folder/index.php";
    $url_path  = "/computer_lab_web/com_lab_web/lab_assistants/$lab_folder/";

    if (file_exists($file_path)) {
        header("Location: $url_path");
        exit();
    } else {
        echo "<script>alert('Index file not found in $lab_folder');</script>";
    }
}




  } else {
    echo "<script>alert('Invalid role');</script>";
  }
} else {
  echo "<script>alert('Incorrect password');</script>";
}
}
//   } else {
//   echo "<script>alert('Username not found');</script>";
// }

?>


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
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
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