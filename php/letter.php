<?php

if(isset($_POST['email']) && isset($_POST['name']) && isset($_POST['message'])){
    $to = "kuprianovpavel9@gmail.com";
    $subject = "Письмо от посетителя";
    $message = "Имя клиента: " . $_POST['name'] . "<br>";
    $message .= "Почта клиента: " . $_POST['email'] . "<br>";
    $message .= "Сообщение клиента: " . $_POST['message'] . "<br>";
    mail ($to, $subject, $message);

    echo "Письмо отправлено <br>" ;
    echo $_SERVER['HTTP_REFERER'];

    $new_url = isset($_SERVER['HTTP_REFERER'])? $_SERVER['HTTP_REFERER']:'../index.html';
    header('Location: '.$new_url);
    exit();
}

?>
