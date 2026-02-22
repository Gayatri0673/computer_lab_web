<?php
session_start();

// require_once '../PHPMailer/src/PHPMailer.php';
// require_once '../PHPMailer/src/SMTP.php';
// require_once '../PHPMailer/src/Exception.php';


$conn = mysqli_connect("localhost", "root", "", "computer");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST['name']);
    $branch = trim($_POST['branch']);
    $post = $_POST['post'];
    $lab = trim($_POST['lab']);
    $user_email = $_POST['email'];
    $user_name = trim($_POST['user_name']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Password match check
    if ($password !== $confirm_password) {
        echo "<script>alert('Passwords do not match');</script>";
        exit();
    }

    // Role-based logic
    if ($post == "principal") {
        $branch = NULL;
        $lab = NULL;
    } elseif ($post == "hod") {
        if (empty($branch)) {
            echo "<script>alert('Branch is required for HOD');</script>";
            exit();
        }
        $lab = NULL;
    } elseif ($post == "lab-assistant") {
        if (empty($branch) || empty($lab)) {
            echo "<script>alert('Branch and Lab are required');</script>";
            exit();
        }
    } else {
        echo "<script>alert('Invalid role selected');</script>";
        exit();
    }

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepared statement (safe)
    $stmt = $conn->prepare(
        "INSERT INTO register (name, branch, post, lab, email, user_name, password)
         VALUES (?, ?, ?, ?, ?, ?, ?)"
    );

    $stmt->bind_param(
        "sssssss",
        $name,
        $branch,
        $post,
        $lab,
        $user_email,
        $user_name,
        $hashed_password
    );

    //   $mail = new PHPMailer\PHPMailer\PHPMailer(true);

    // try {
    //     $mail->isSMTP();
    //     $mail->Host       = 'smtp.gmail.com';
    //     $mail->SMTPAuth   = true;
    //     $mail->Username   = 'yourgmail@gmail.com';
    //     $mail->Password   = 'your_app_password';
    //     $mail->SMTPSecure = 'tls';
    //     $mail->Port       = 587;

    //     $mail->setFrom('yourgmail@gmail.com', 'Computer Lab System');
    //     $mail->addAddress($user_email, $name);

    //     $mail->isHTML(true);
    //     $mail->Subject = 'Registration Successful';
    //     $mail->Body = "
    //         <h3>Hello $name</h3>
    //         <p>Your account has been successfully registered.</p>
    //         <p><b>Username:</b> $user_name</p>
    //         <p><b>Role:</b> $post</p>
    //         <p>Thank you.</p>
    //     ";

    //     $mail->send();

    // } catch (PHPMailer\PHPMailer\Exception $e) {
    //     echo 'Mailer Error: ' . $e->getMessage();
    // }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f5f5f5;
        }

        .register-card {
            max-width: 450px;
            margin: 80px auto;
            padding: 30px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .register-card h3 {
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="register-card">
            <h3>Register</h3>
            <form method="POST" action="send_mail.php">

                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter your full name" required>
                </div>

                <div class="mb-3">
                    <label for="post" class="form-label">Post</label>
                    <select name="post" id="post" class="form-select" required>
                        <option value="">Select your post</option>
                        <option value="principal">Principal</option>
                        <option value="hod">HOD</option>
                        <option value="lab-assistant">Lab Assistant</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="branch" class="form-label">Branch</label>
                    <input type="text" name="branch" id="branch" class="form-control" placeholder="Enter branch">
                </div>

                <div class="mb-3" id="labDiv">
                    <label for="lab" class="form-label">Lab</label>
                    <input type="text" name="lab" id="lab" class="form-control" placeholder="Enter lab name">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required>
                </div>

                <div class="mb-3">
                    <label for="user_name" class="form-label">Username</label>
                    <input type="text" name="user_name" id="user_name" class="form-control" placeholder="Create username" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Create password" required>
                </div>

                <div class="mb-3">
                    <label for="confirm_password" class="form-label">Confirm Password</label>
                    <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Confirm password" required>
                </div>

                <button class="btn btn-primary w-100">Register</button>

                <div class="text-center mt-3">
                    <small>Do you have an account? <a href="login.php">log in</a></small>
                </div>
            </form>
        </div>
    </div>

    <script>
        const postSelect = document.getElementById("post");
        const labDiv = document.getElementById("labDiv");
        const branchInput = document.querySelector("input[name='branch']");

        function toggleFields() {
            const role = postSelect.value;
            if (role === "principal") {
                labDiv.style.display = "none";
                branchInput.parentElement.style.display = "none";
            } else if (role === "hod") {
                labDiv.style.display = "none";
                branchInput.parentElement.style.display = "block";
            } else if (role === "lab-assistant") {
                labDiv.style.display = "block";
                branchInput.parentElement.style.display = "block";
            } else {
                labDiv.style.display = "block";
                branchInput.parentElement.style.display = "block";
            }
        }

        postSelect.addEventListener("change", toggleFields);
        window.addEventListener("load", toggleFields);
    </script>

</body>

</html>