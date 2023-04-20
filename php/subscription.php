<?php

if(isset($_POST['email'])){
    $to = "kuprianovpavel9@gmail.com";
    $subject = "Подписка на новости";
    $message = $_POST['email'];
    mail ($to, $subject, $message);

    echo "Письмо отправлено <br>" ;
    echo $_SERVER['HTTP_REFERER'];

    $new_url = isset($_SERVER['HTTP_REFERER'])? $_SERVER['HTTP_REFERER']:'../index.html';
    header('Location: '.$new_url);
    exit();
}

?>
