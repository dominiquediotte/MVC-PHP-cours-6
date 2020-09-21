<?php

session_start();
$_SESSION['firstName'] = $_POST['first-name'];
echo 'On connait votre nom';
