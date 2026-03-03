<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../PHPMailer/src/Exception.php';
require __DIR__ . '/../PHPMailer/src/PHPMailer.php';
require __DIR__ . '/../PHPMailer/src/SMTP.php';

$conn = mysqli_connect("localhost", "root", "", "computer");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST['name']);
    $branch = trim($_POST['branch']);
    $post = $_POST['post'];
    $lab = trim($_POST['lab']);
    $user_name = trim($_POST['user_name']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // ✅ Email validation
    if (isset($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $user_email = $_POST['email'];
    } else {
        die("<script>alert('Invalid Email Address'); window.history.back();</script>");
    }

    // ✅ Password match check
    if ($password !== $confirm_password) {
        die("<script>alert('Passwords do not match'); window.history.back();</script>");
    }

    // ✅ Role-based logic
    if ($post == "principal") {
        $branch = NULL;
        $lab = NULL;
    } elseif ($post == "hod") {
        if (empty($branch)) {
            die("<script>alert('Branch is required for HOD'); window.history.back();</script>");
        }
        $lab = NULL;
    } elseif ($post == "lab-assistant") {
        if (empty($branch) || empty($lab)) {
            die("<script>alert('Branch and Lab are required'); window.history.back();</script>");
        }
    } else {
        die("<script>alert('Invalid role selected'); window.history.back();</script>");
    }

    // ✅ Check duplicate email or username
    $check_stmt = $conn->prepare("SELECT id FROM register WHERE email = ? OR user_name = ?");
    $check_stmt->bind_param("ss", $user_email, $user_name);
    $check_stmt->execute();
    $check_stmt->store_result();

    if ($check_stmt->num_rows > 0) {
        die("<script>alert('Email or Username already exists'); window.history.back();</script>");
    }
    // ===============================
// ✅ Principal already exists check
// ===============================
if ($post == "principal") {
    // Check if a Principal already exists
    $checkPrincipal = $conn->prepare("SELECT id FROM register WHERE post = 'principal' LIMIT 1");
    $checkPrincipal->execute();
    $checkPrincipal->store_result();

    if ($checkPrincipal->num_rows > 0) {
        // Close statement and stop execution with alert
        $checkPrincipal->close();
        die("<script>
                alert('Principal already exists! Cannot register again.');
                window.history.back();
             </script>");
    }
    $checkPrincipal->close();
}
    $check_stmt->close();

    // ✅ Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // ✅ Insert user
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

    if ($stmt->execute()) {

        // ===============================
        // ✅ SEND EMAIL
        // ===============================

        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'sonkamblerohini8@gmail.com';
            $mail->Password   = 'hsrsjcolmoaaxemq';

            $mail->SMTPSecure = 'tls';
            $mail->Port       = 587;

            $mail->setFrom('sonkamblerohini8@gmail.com', 'Computer Lab System');
            $mail->addAddress($user_email, $name);

            $mail->isHTML(true);
            $mail->Subject = 'Registration Successful';
            $body = "
    <h3>Hello $name,</h3>
    <p>Your account has been successfully registered.</p>
    <p><b>Username:</b> $user_name</p>
    <p><b>Role:</b> $post</p>
";

// If NOT principal, show branch
if ($post != "principal") {
    $body .= "<p><b>Branch:</b> $branch</p>";
}

// If lab-assistant, show lab
if ($post == "lab-assistant") {
    $body .= "<p><b>Lab:</b> $lab</p>";
}

$body .= "
    <br>
    <p>Thank you for using Computer Lab System.</p>
";

$mail->Body = $body;

            $mail->send();
        } catch (Exception $e) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        }

        echo "<script>
                alert('Registration Successful! Email Sent.');
                window.location.href='login.php';
              </script>";
    } else {
        echo "Database Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
