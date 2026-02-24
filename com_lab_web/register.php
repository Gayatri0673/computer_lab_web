<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "computer");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST['name']);
    $post = $_POST['post'];
    $branch = trim($_POST['branch']);
    $lab = trim($_POST['lab']);
    $email = trim($_POST['email']);
    $username = trim($_POST['user_name']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // All required validation
    if (empty($name) || empty($post) || empty($branch) || empty($lab) || empty($email) || empty($username) || empty($password) || empty($confirm_password)) {
        echo "<script>alert('All fields are required');</script>";
        exit();
    }

    if ($password !== $confirm_password) {
        echo "<script>alert('Passwords do not match');</script>";
        exit();
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO register (name, branch, post, lab, email, user_name, password) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $name, $branch, $post, $lab, $email, $username, $hashed_password);

    if ($stmt->execute()) {
        echo "<script>alert('Registration Successful'); window.location='login.php';</script>";
    } else {
        echo "<script>alert('Error: Username or Email may already exist');</script>";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Register</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body {
    margin: 0;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: linear-gradient(135deg, #1e4f8a, #3b82f6);
    overflow: hidden; /* No scroll */
}

.card-box {
    width: 380px;
    padding: 25px;
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
}

.card-box h4 {
    text-align: center;
    margin-bottom: 15px;
    font-weight: 600;
    color: #1e4f8a;
}

.form-control, .form-select {
    height: 38px;
    font-size: 14px;
}

.btn-custom {
    background: linear-gradient(135deg, #1e4f8a, #3b82f6);
    border: none;
    height: 40px;
    font-weight: 600;
}

.btn-custom:hover {
    opacity: 0.9;
}
</style>
</head>

<body>

<div class="card-box">
    <h4>Register</h4>

    <form method="POST">

        <input type="text" name="name" class="form-control mb-2" placeholder="Full Name" required>

        <select name="post" class="form-select mb-2" required>
            <option value="">Select Role</option>
            <option value="principal">Principal</option>
            <option value="hod">HOD</option>
            <option value="lab-assistant">Lab Assistant</option>
        </select>

        <input type="text" name="branch" class="form-control mb-2" placeholder="Branch" required>

        <input type="text" name="lab" class="form-control mb-2" placeholder="Lab" required>

        <input type="email" name="email" class="form-control mb-2" placeholder="Email" required>

        <input type="text" name="user_name" class="form-control mb-2" placeholder="Username" required>

        <input type="password" name="password" class="form-control mb-2" placeholder="Password" required>

        <input type="password" name="confirm_password" class="form-control mb-3" placeholder="Confirm Password" required>

        <button type="submit" class="btn btn-custom text-white w-100">
            Register
        </button>

        <div class="text-center mt-2">
            <small><a href="login.php">Already have account?</a></small>
        </div>

    </form>
</div>

</body>
</html>
