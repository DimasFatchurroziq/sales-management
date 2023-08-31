<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('autentikasi/login.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="wrapper">
        <form action="">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" placeholder="username" required>
                <i class="bi bi-person-fill"></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="password" required>
                <i class="bi bi-lock-fill"></i>
            </div>
            <div class="remember-forget">
                <div class="remember">
                    <label><input type="checkbox">Remember me</label>
                </div>
                <div class="forget">
                    <a href="_blank">Forget password</a>
                </div>
            </div>
            <div class="button">
                <button>Login</button>
            </div>
            <div class="register">
                <p>Don't have an account? <span><a href="_blank">Register</a></span></p>
            </div>
        </form>
    </div>

</body>
</html>