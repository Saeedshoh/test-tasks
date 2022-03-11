<?php session_start();
$s_login = $_SESSION['login'];
if (isset($s_login) and $s_login == 'admin')
{
    
}
else{
    echo 404;
} 