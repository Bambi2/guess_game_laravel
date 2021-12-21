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
		<title>Play</title>
	</head>
	<body>
		<div class="container">
			<div class="navbar">
				<a href="/profile">My Profile</a>
				<a href="/leaderboard">Leaderboard</a>
				<a href="/game" id="clicked">Play</a>
			</div>
			<div class="header"></div>
			<h1 class="game-score">Current Score: {{$current_score}}</h1>
			<form class="game-area" action="{{route('confirm')}}" method="get" id="login">
				<!-- Word -->
				<h1 class="game-word">{{$word_shuffled}}</h1>
				<!-- Input -->
				<div class="game-input-area"><input type="text" name="guess" id="game-input" class="game-input"></div>
				<!-- Button -->
				<div class="game-input-area"><button class="game-button" type="submit">Confirm</button></div>
			</form>
		</div>
	</body>
	</html>