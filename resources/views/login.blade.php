<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Login Page</title>
</head>
<body>
    <section>
        <div class="form-box">
        @csrf
            <form method="POST" action="{{ route('login') }}">
            @csrf
                <h2>Login</h2>
                <div class="inputbox">
                    <ion-icon name="text-outline"></ion-icon>
                    <input type="email" required name= "email">
                    <label for="">Email</label>
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
                    <p>Don't have an account? <a href="{{ route('register') }}"> Register</a></p>
                </div>
            </form>
        </div>
    </section>

    <script type="module" src="https://unpkg.com/ionicon@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script type="module" src="https://ionic.io/ionicons"></script>
    <script src="https://unpkg.com/ionicons@latest/dist/ionicons.js"></script>
</body>
</html>
