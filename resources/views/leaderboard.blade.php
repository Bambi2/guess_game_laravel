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
    <title>Leaderboard</title>
</head>
<body>
    <div class="container">
        <div class="navbar">
            <a href="/profile">My Profile</a>
			<a href="/leaderboard" id="clicked">Leaderboard</a>
			<a href="/game">Play</a>
        </div>
        <div class="leaderboard-area">
            <h1 class="profile-name">Leaderboard</h1>
            <table class="top-five-table">
                <tr>
                    <th>Place</th>
                    <th>Username</th>
                    <th>Score</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>{{$top_five[0]->user->name}}</td>
                    <td>{{$top_five[0]->score}}</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>{{$top_five[1]->user->name}}</td>
                    <td>{{$top_five[1]->score}}</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>{{$top_five[2]->user->name}}</td>
                    <td>{{$top_five[2]->score}}</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>{{$top_five[3]->user->name}}</td>
                    <td>{{$top_five[3]->score}}</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>{{$top_five[4]->user->name}}</td>
                    <td>{{$top_five[4]->score}}</td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>