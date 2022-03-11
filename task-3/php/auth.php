<?php session_start();
$login = $_GET['login'];

$password = $_GET['pasword'];

$login = stripcslashes($login);
$login = htmlspecialchars($login);
$login = trim($login);
$password = stripcslashes($password);
$password = htmlspecialchars($password);
$password = trim($password);

if ($login == 'admin' && $password == '55555') {
    $_SESSION['login'] = $login;
    echo 'ok';
} else {
    echo 'valid_data';
}
