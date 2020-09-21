<?php

session_start();

if (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] === true) {
    echo 'Connected';
} else {
    header('Location: http://devweb3cours6.com/index.php');
}
