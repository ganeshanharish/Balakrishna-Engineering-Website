<?php
session_start();

// Simple Hardcoded Admin Authentication
define('ADMIN_USER', 'admin');
define('ADMIN_PASS', 'admin123'); // In production, don't hardcode passwords

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === ADMIN_USER && $password === ADMIN_PASS) {
        $_SESSION['admin_logged_in'] = true;
        header('Location: index.php');
        exit;
    } else {
        $error = "Invalid Username or Password";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Login - Balakrishna Engineering</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Inter', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .login-card {
            width: 100%;
            max-width: 400px;
            border: none;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            background: #fff;
            padding: 2.5rem;
        }
    </style>
</head>

<body>

    <div class="login-card">
        <div class="text-center mb-4">
            <h3 class="fw-bold text-success mb-1">Balakrishna</h3>
            <p class="text-muted small text-uppercase tracking-wider">Engineering Admin</p>
        </div>

        <?php if (isset($error)): ?>
            <div class="alert alert-danger py-2">
                <?php echo $error; ?>
            </div>
        <?php endif; ?>

        <form method="POST" action="">
            <div class="mb-3">
                <label class="form-label text-muted small fw-bold">Username</label>
                <input type="text" name="username" class="form-control form-control-lg bg-light border-0" required
                    autofocus>
            </div>
            <div class="mb-4">
                <label class="form-label text-muted small fw-bold">Password</label>
                <input type="password" name="password" class="form-control form-control-lg bg-light border-0" required>
            </div>
            <button type="submit" name="login" class="btn btn-success btn-lg w-100 fw-bold rounded-pill">Secure
                Login</button>
        </form>
    </div>

</body>

</html>