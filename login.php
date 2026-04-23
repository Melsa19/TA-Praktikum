<?php
session_start();

// Cek cookie (remember me)
$username_cookie = "";
if (isset($_COOKIE['username'])) {
    $username_cookie = $_COOKIE['username'];
}

// Proses login
$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $remember = isset($_POST['remember']);

    // Validasi (hardcode)
    if ($username === "admin" && $password === "123") {
        
        $_SESSION['login'] = true;
        $_SESSION['username'] = $username;

        // Cookie
        if ($remember) {
            setcookie("username", $username, time() + (60 * 60 * 24)); // 1 hari
        }

        header("Location: index.php");
        exit;
    } else {
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center vh-100">

<div class="card p-4 shadow" style="width: 350px;">
    <h3 class="text-center">Login</h3>

    <?php if ($error): ?>
        <div class="alert alert-danger"><?= $error ?></div>
    <?php endif; ?>

    <form method="POST">
        <input type="text" name="username" class="form-control mb-2" placeholder="Username" value="<?= $username_cookie ?>">
        <input type="password" name="password" class="form-control mb-2" placeholder="Password">

        <div class="form-check mb-2">
            <input type="checkbox" name="remember" class="form-check-input">
            <label class="form-check-label">Remember Me</label>
        </div>

        <button class="btn btn-primary w-100">Login</button>
    </form>
</div>

</body>
</html>