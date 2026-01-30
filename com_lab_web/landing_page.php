<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CSMSS College Computer Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", Arial, sans-serif;
        }

        body {
            background: #f2f6fb;
        }

        /* ================= HERO ================= */
        .hero {
            background: linear-gradient(to right, #0b3c6f, #2b78d6);
            color: #fff;
            padding: 100px 8%;
            height: 300px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .hero-text h1 {
            font-size: 38px;
        }

        .hero-text p {
            margin-top: 10px;
            font-size: 16px;
        }

        .hero-img-wrapper {
            position: relative;
        }

        .hero img {
            width: 350px;
            border-radius: 10px;
        }

        /* LOGIN & LOGOUT BUTTONS */
        .auth-buttons {
            position: absolute;
            top: -40px;
            right: 0;
            display: flex;
            gap: 15px;
            z-index: 10;
        }

        .auth-btn {
            background: #ffffff;
            color: #0b3c6f;
            padding: 8px 18px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
            text-decoration: none;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            transition: 0.3s ease;
        }

        .auth-btn:hover {
            background: #0b3c6f;
            color: #ffffff;
        }

        /* ================= CONTENT ================= */
        .container {
            padding: 60px 8%;
            background: #fff;
        }

        /* TEXT + IMAGE SECTION */
        .manage-section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 40px;
        }

        .manage-text {
            max-width: 600px;
        }

        .manage-text h2 {
            color: #0b3c6f;
            margin-bottom: 10px;
        }

        .manage-text p {
            color: #555;
            font-size: 16px;
        }

        .manage-image img {
            width: 350px;
            border-radius: 10px;
            box-shadow: 0 6px 14px rgba(0, 0, 0, 0.15);
        }

        /* ================= SECTION TITLE ================= */
        .section-title {
            text-align: center;
            font-size: 26px;
            color: #0b3c6f;
            margin: 60px 0 30px;
        }

        /* ================= USER ROLES ================= */
        .roles {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .role-card {
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 6px 14px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .role-header {
            background: #0b3c6f;
            color: #fff;
            padding: 12px;
            font-size: 18px;
            font-weight: 600;
        }

        .role-body {
            padding: 15px;
            font-size: 16px;
        }

        /* ================= KEY FEATURES ================= */
        .features {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .feature-box {
            background: #e6f0ff;
            border-radius: 10px;
            padding: 25px;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }

        .feature-box h4 {
            color: #0b3c6f;
            margin-bottom: 8px;
        }

        /* ================= FOOTER ================= */
        .footer {
            background: #0b3c6f;
            color: #fff;
            text-align: center;
            padding: 15px;
            margin-top: 50px;
            font-size: 14px;
        }

        /* ================= RESPONSIVE ================= */
        @media(max-width:900px) {
            .hero {
                flex-direction: column;
                text-align: center;
                height: auto;
            }

            .manage-section {
                flex-direction: column;
                text-align: center;
            }

            .hero img,
            .manage-image img {
                width: 100%;
            }

            .roles,
            .features {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <!-- HERO -->
    <div class="hero">
        <div class="hero-text">
            <h1>CSMSS College Computer Management System</h1>
            <p>Efficient Lab Computer Monitoring & Management Platform</p>
        </div>

        <div class="hero-img-wrapper">
            <img src="assets/img/first.png" alt="Dashboard">

            <div class="auth-buttons">
                <a href="./login.php" class="auth-btn">Login</a>
                <a href="./logout.php" class="auth-btn">Logout</a>
            </div>
        </div>
    </div>

    <!-- DESCRIPTION WITH IMAGE RIGHT -->
    <div class="container">

        <div class="manage-section">
            <div class="manage-text">
                <h2>Manage All Laboratory Computers in One Place</h2>
                <p>
                    The CSMSS College Computer Management System helps educational institutes monitor and manage
                    multiple computer labs with role-based access for Principal, HOD,
                    and Lab Assistants.
                </p>
            </div>

            <div class="manage-image">
                <img src="assets/img/second.png" alt="Lab Dashboard">
            </div>
        </div>

        <!-- USER ROLES -->
         
        <h2 class="section-title">User Roles</h2>

        <div class="roles">
            <div class="role-card">
                <div class="role-header">Principal</div>
                <div class="role-body">
                    View all departments and labs in the institute.
                </div>
            </div>

            <div class="role-card">
                <div class="role-header">HOD</div>
                <div class="role-body">
                    Manage labs in their own department.
                </div>
            </div>

            <div class="role-card">
                <div class="role-header">Lab Assistant</div>
                <div class="role-body">
                    Update Computer status in assigned lab.
                </div>
            </div>
        </div>

        <!-- KEY FEATURES -->
        <h2 class="section-title">Key Features</h2>

        <div class="features">
            <div class="feature-box">
                <h4>Multi-User Login</h4>
                <p>Login for Principal, HOD & Lab Assistant.</p>
            </div>

            <div class="feature-box">
                <h4>Lab-wise Computer Status</h4>
                <p>Monitor working & faulty Computers.</p>
            </div>

            <div class="feature-box">
                <h4>Department Management</h4>
                <p>View labs by department.</p>
            </div>

            <div class="feature-box">
                <h4>Secure Access</h4>
                <p>Role-based data security.</p>
            </div>

            <div class="feature-box">
                <h4>Easy Interface</h4>
                <p>Simple & user-friendly design.</p>
            </div>

            <div class="feature-box">
                <h4>Reports & Analytics</h4>
                <p>Generate lab and Computer reports.</p>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <div class="footer">
         CSMSS College Computer Management System © 2026 | Developed by ....
    </div>

</body>

</html>