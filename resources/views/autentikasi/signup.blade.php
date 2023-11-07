<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
    <link rel="stylesheet" href="{{ asset('autentikasi/login.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        <form action="">
            <h1><b>Sign Up</b></h1>
            <div class="input-box">
                <input type="text" placeholder="username" required>
                <i class='bx bxs-user'></i>
            </div><div class="input-box">
                <input type="email" placeholder="email" required>
                <i class='bx bxs-envelope' ></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="input-box">
                <input type="text" placeholder="repeat your password" required>
                <i class='bx bxs-key'></i>
            </div>
            <div class="remember-forget">
                <div class="remember">
                    <label><input type="checkbox">Remember me</label>
                </div>
                <!-- <div class="forget">
                    <a href="_blank">Forget password</a>
                </div> -->
            </div>
            <button type="submit" class="btn">Sign Up</button>
            <!-- <div class="register">
                <p>Don't have an account? <span><a href="_blank">Register</a></span></p>
            </div> -->
        </form>
    </div>

</body>
</html>