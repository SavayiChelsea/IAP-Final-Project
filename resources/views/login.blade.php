<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">

    <title>Login Page</title>
</head>
<body>
    <section>
        <div class="form-box">
            <form action="">
                <h2>Login</h2>
                <div class="inputbox">
                    <ion-icon name="text-outline"></ion-icon>
                    <input type="text" required>
                    <label for="">Name</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" required>
                    <label for="">Password</label>
                </div>
                <div class="forget">
                    <label for=""><input type="checkbox">Remember me<a href="#">Forgot Password?</a></label>
                </div>
                <button>Log In</button>
                <div class="register">
<<<<<<< HEAD
                    <p>Don't have an account? <a href="#"> Register</a></p>
=======
                    <p>Don't have an account? <a href="{{ route('register') }}"> Register</a></p>
>>>>>>> 8319206df0c6a0d83b2d1525b82b5d61a9073b12
                </div>
            </form>
        </div>
    </section>

    <script type="module" src="https://unpkg.com/ionicon@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script type="module" src="https://ionic.io/ionicons"></script>
    <script src="https://unpkg.com/ionicons@latest/dist/ionicons.js"></script>

</body>
</html>
