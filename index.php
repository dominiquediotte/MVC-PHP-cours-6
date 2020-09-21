<?php

session_start();
$cookieName = 'phpKey';
$cookieValue = 'value';
$expirationTime = 3600;
$path = '/';
setcookie($cookieName, $cookieValue, time() + $expirationTime, $path);

?>

<!DOCTYPE html>
<html lang="en">
<script>
    function setCookie(name, value, expirationTime) {
        let date = new Date();
        date.setTime(date.getTime() + expirationTime);
        let expirationDateOption = 'expires=' + date.toUTCString();
        document.cookie = name + '=' + value + ';' + expirationDateOption + ';path=/';
    }

    setCookie('key', 'value', 3600);
</script>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Exercice</h1>
        <form action="/login.php" method="POST">
            <div class="form-group">
                <label for="username">Votre compte</label>
                <input type="text" class="form-control" name="username" id="username" pattern="\D{8,10}" required>
            </div>
            <div class="form-group">
                <label for="password">Votre mot de passe</label>
                <input type="text" class="form-control" name="password" id="password" required>
            </div>
            <input class="btn btn-primary" type="submit" value="Me connecter">
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>