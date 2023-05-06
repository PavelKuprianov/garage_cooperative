<?php

$postArr = $_POST;

$login = trim($_POST['login']);
$pass = trim($_POST['pass']);
$name = trim($_POST['name']);
$patronymic = trim($_POST['patronymic']);
$surname = trim($_POST['surname']);
$tel = trim($_POST['tel']);
$email = trim($_POST['email']);

if(mb_strlen($login) < 4 || mb_strlen($login) > 90) {
    echo "Недопустимая длина логина";
    exit();
} else if (mb_strlen($name) < 3 || mb_strlen($name) > 90) {
    echo "Недопустимая длина имени";
    exit();
} else if (mb_strlen($pass) < 3 || mb_strlen($pass) > 8) {
    echo "Недопустимая длина пароля";
    exit();
}

$pass = md5($pass."region34");

@$mysql = new mysqli('localhost', 'root', '', 'garage');


$mysql->query("INSERT INTO `users-box` (`login`, `pass`, `name`, `patronymic`, `surname`, `phone`, `email`) 
VALUES ('$login', '$pass', '$name', '$patronymic', '$surname', '$tel', '$email')");

$mysql->close();

header('Location: /user-kabinet-box.php?login=`$login`');
