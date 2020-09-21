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
</head>

<body>
    <h2><?php echo 'Votre prénom est ' . (isset($_SESSION['firstName']) ? $_SESSION['firstName'] : 'inconnu') ?></h2>
    <form action="/example_session.php" method="POST">
        <label for="first-name">Prénom</label>
        <input type="text" id="first-name" name="first-name">
        <input type="submit" value="Submit">
    </form>
</body>

</html>