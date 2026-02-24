<?php
session_start();

// DATABASE CONNECTION
$conn = mysqli_connect("localhost", "root", "", "computer");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$error = "";

// LOGIN PROCESS
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = trim($_POST['username']);
    $password = $_POST['password'];

    // Prepared statement
    $stmt = $conn->prepare("SELECT * FROM register WHERE user_name = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {

        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {

            // Store session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['user_name'];
            $_SESSION['role'] = $user['post'];
            $_SESSION['branch'] = $user['branch'];
            $_SESSION['lab'] = $user['lab'];

            // ROLE REDIRECTION
            if ($user['post'] === "principal") {

                header("Location: principal/index.php");
                exit();

            } elseif ($user['post'] === "hod") {

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
                    $error = "Branch folder not found.";
                }

            } elseif (strtolower($user['post']) === "lab-assistant") {

                $lab_folder = trim($user['lab']);
                $file_path = __DIR__ . "/lab_assistants/$lab_folder/index.php";
                $url_path  = "lab_assistants/$lab_folder/index.php";

                if (file_exists($file_path)) {
                    header("Location: $url_path");
                    exit();
                } else {
                    $error = "Lab folder not found.";
                }

            } else {
                $error = "Invalid role.";
            }

        } else {
            $error = "Incorrect password.";
        }

    } else {
        $error = "Username not found.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login Page</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

<style>
body {
  height: 100vh;
  background: linear-gradient(135deg, #1e3c72, #2a5298);
  display: flex;
  justify-content: center;
  align-items: center;
  font-family: 'Segoe UI', sans-serif;
}

.login-card {
  width: 100%;
  max-width: 420px;
  padding: 35px;
  border-radius: 20px;
  background: #ffffff;
  box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
  animation: fadeIn 0.8s ease-in-out;
}

.login-card h2 {
  text-align: center;
  font-weight: 700;
  margin-bottom: 25px;
  color: #1e3c72;
}

.form-control {
  border-radius: 10px;
  padding-left: 40px;
  height: 45px;
}

.input-group-text {
  border-radius: 10px 0 0 10px;
  background: #e9f1ff;
  border: none;
}

.btn-login {
  background: linear-gradient(45deg, #1e3c72, #2a5298);
  border: none;
  border-radius: 10px;
  height: 45px;
  font-weight: 600;
  transition: 0.3s ease;
}

.btn-login:hover {
  background: linear-gradient(45deg, #2a5298, #1e3c72);
  transform: translateY(-2px);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}

.register-link {
  text-align: center;
  margin-top: 15px;
}

.register-link a {
  text-decoration: none;
  font-weight: 600;
  color: #2a5298;
}

.register-link a:hover {
  text-decoration: underline;
}

@keyframes fadeIn {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
</style>
</head>

<body>

<div class="login-card">
  <h2>Login</h2>

  <!-- ERROR MESSAGE -->
  <?php if (!empty($error)) : ?>
    <div class="alert alert-danger text-center">
      <?php echo $error; ?>
    </div>
  <?php endif; ?>

  <form action="" method="POST">

    <!-- Username -->
    <div class="mb-3 input-group">
      <span class="input-group-text">
        <i class="bi bi-person-fill"></i>
      </span>
      <input type="text" name="username" class="form-control" placeholder="Enter your username" required>
    </div>
<!-- Password Field -->
<div class="mb-3 input-group">
  <span class="input-group-text">
    <i class="bi bi-lock-fill"></i>
  </span>

  <input type="password"
         name="password"
         id="password"
         class="form-control"
         placeholder="Enter your password"
         required>

  <!-- Eye Toggle -->
  <span class="input-group-text" style="cursor:pointer;">
    <i class="bi bi-eye-fill" id="toggleIcon"></i> <!-- Start with visible icon (eye) -->
  </span>
</div>

    <!-- Button -->
    <button type="submit" class="btn btn-login w-100 text-white">
      Login
    </button>

    <div class="register-link">
      <small>Don’t have an account?
        <a href="register.php">Register</a>
      </small>
    </div>

  </form>
</div>
<script>
const passwordField = document.getElementById('password');
const toggleIcon = document.getElementById('toggleIcon');

toggleIcon.addEventListener('click', () => {
    if (passwordField.type === 'password') {
        // Show password
        passwordField.type = 'text';
        toggleIcon.classList.remove('bi-eye-fill');
        toggleIcon.classList.add('bi-eye-slash-fill'); // Eye with slash
    } else {
        // Hide password
        passwordField.type = 'password';
        toggleIcon.classList.remove('bi-eye-slash-fill');
        toggleIcon.classList.add('bi-eye-fill'); // Normal eye
    }
});
</script>
</body>
</html>