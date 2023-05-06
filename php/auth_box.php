<?php

$login = filter_var(trim($_POST['login']), FILTER_UNSAFE_RAW);
$pass = filter_var(trim($_POST['pass']), FILTER_UNSAFE_RAW);

$pass = md5($pass."region34");

@$mysql = new mysqli('localhost', 'root', '', 'register-bd');

$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass' " );

$user = $result->fetch_assoc();

//echo "<pre>";
//print_r($user);
//echo "</pre>";

if(empty($user) or count($user)==0) {
    echo "Такой пользователь не найден!";
    exit();
}

setcookie('user', $user['name'], time()+3600, "/");




$mysql->close();

header('Location: /');
