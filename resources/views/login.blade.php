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
        <form action="{{route('login')}}" method="post" class="form" id="login">
            @csrf
            <!-- Login -->
            <h1 class="form-title">Login</h1>
            <!-- Form Message -->
            @if(Session::has('error')) 
                <div class="form-message"> {{Session::get('error')}} </div>
            @endif
            <!-- Email -->
            <div class="form-input-group">
                <input type="email" class="form-input" autofocus placeholder="Email" name="email">
            </div>
            <!-- Password -->
            <div class="form-input-group">
                <input type="password" class="form-input" autofocus placeholder="Password" name="password">
            </div>
            <!-- Button -->
            <button class="form-button" type="submit" name="login">Login</button>
            <!-- Switch to sign up -->
            <p class="form-text">
                <a class="form-link" href="signup" id="linkCreateAccount">Don't have an account? Create account</a>
            </p>
        </form>
    </div>
</body>
</html>