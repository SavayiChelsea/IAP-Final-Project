<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name')}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="row justify-content-center">
        <div class="col-12 col-sm-8 col-md-6">
        @if(session('status'))
        <div>{{ session('status') }}</div>
        @endif
            <form class="form mt-5" method="POST" action="{{ route('register') }}">
            @csrf
                <h3 class="text-center text-dark">Register</h3>
                <div class="form-group">
                    <label for="name" class="text-dark">Name:</label><br>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
                <div class="form-group mt-3">
                    <label for="email" class="text-dark">Email:</label><br>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div class="form-group mt-3">
                    <label for="phoneNumber" class="text-dark">PhoneNumber:</label><br>
                    <input type="tel" name="pnumber" id="pnumber" class="form-control" required>
                </div> 
                <div class="row">
                    <div class="col form-group mt-3">
                        <label for="CarType" class="text-dark">CarType:</label><br>
                        <input type="text" name="Cartype" id="Cartype" class="form-control" required>
                    </div> 
                    <div class="col form-group mt-3">
                        <label for="NumberPlate" class="text-dark">NumberPlate:</label><br>
                        <input type="text" name="numplate" id="numplate" class="form-control" required>
                    </div> 
                </div>
                <div class="form-group mt-3">
                    <label for="password" class="text-dark">Password:</label><br>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <div class="form-group mt-3">
                    <label for="password_confirmation" class="text-dark">Confirm Password:</label><br>
                    <input type="password" name="password_confirmation" id="confirm-password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="remember-me" class="text-dark"></label><br>
                    <input type="submit" name="submit" class="btn btn-success btn-md" value="submit">
                </div>
                <div class="text-center mt-2">
                    <a href="{{ route('login') }}" class="text-dark">Login here</a>
                </div>
            </form>
            @if(session('success'))
        <div class="alert alert-success">
        {{ session('success') }}
        </div>
        @endif
        </div>
        @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
