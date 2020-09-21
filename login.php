<?php

session_start();

if ($_POST['username'] === strrev($_POST['password'])) {
    $_SESSION['isLoggedIn'] = true;
    header('Location: http://devweb3cours6.com/connected.php');
} else {
    $_SESSION['isLoggedIn'] = false;
    header('Location: http://devweb3cours6.com/error.php');
}
