<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
    <title>Guess</title>
</head>
<body>
    <div class="container">
    <form action="{{route('createUser')}}" class="form" id="createAccount" method="post">
            @csrf
            <!-- Create Account -->
            <h1 class="form-title">Create Account</h1>
            <!-- Username -->
            <div class="form-input-group">
                <input type="text" class="form-input" autofocus placeholder="Username" name="name">
                <!-- Username error -->
            <div class="form-input-error-message">@error('name') {{$message}} @enderror</div>
            </div>
            <!-- Email -->
            <div class="form-input-group">
                <input type="email" class="form-input" autofocus placeholder="Email" name="email">
                <!-- Email error -->
                <div class="form-input-error-message">@error('email') {{$message}} @enderror</div>
            </div>
            <!-- Password -->
            <div class="form-input-group">
                <input type="password" class="form-input" autofocus placeholder="Password" name="password">
                <!-- Password error -->
                <div class="form-input-error-message">@error('password') {{$message}} @enderror</div>
            </div>
            <!-- Repeat password -->
            <div class="form-input-group">
                <input type="password" class="form-input" autofocus placeholder="Confirm Password" name="password_repeat">
                <!-- Password Repeat error -->
                @if(Session::has('error'))
                <div class="form-input-error-message"> {{Session::get('error')}}</div>
                @endif
            </div>
            <!-- Button -->
            <button class="form-button" type="submit" name="signup">Sign Up</button>
            <!-- Switch to login -->
            <p class="form-text">
                    <a class="form-link" href="/" id="linkLogin">Already have an account? Sign in</a>
                </p>
        </form>
    </div>
</body>
</html>