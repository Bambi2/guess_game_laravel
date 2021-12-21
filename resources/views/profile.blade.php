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
    <title>My Profile</title>
</head>
<body>
    <div class="container">
        <div class="navbar">
            <a href="/profile" id="clicked">My Profile</a>
			<a href="/leaderboard">Leaderboard</a>
			<a href="/game">Play</a>
        </div>
        <div class="profile-area">
            <h1 class="profile-name">{{$username}}</h1>
            <h2 class="profile-stat">Your score: {{$score}}</h2>
            <div class="game-input-area">
                <form action="{{route('logout')}}"><button class="game-button" type="submit">Log Out</button></form>
                <!-- <a href="/logout" class="game-button">Log Out</a> -->
            </div>
            <div class="game-input-area">
                <form action="{{route('deleteAccount')}}"><button class="game-button" type="submit">Delete Account</button></form>
            </div>
        </div>
    </div>
</body>
</html>