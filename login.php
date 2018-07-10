<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="css/index.css" />
    <title>Chat</title>
</head>
<body>
    <div class="form">
        <img src="css/heart.gif" id = "welcome" class="heart"></br>

        <div class="wrap wrapun">
            <span class="wrap2 un">
                <lable class="userText">Username:</lable>
            </span>
                <input class="user input" name="username" placeholder="Cutie's Username"></input>
        </div>

        <div class="wrap wrappa">
            <span class="wrap2 pa">
                <lable class="passText">Password:</lable>
            </span>
                    <input class="pass input" name="password" placeholder="Cutie's Password"></input>
        </div>       
        <span class="submit">Logins</span></br>
    </div>
</body>
</html>