<?php

require 'connect.php';
global $db;

$idBox = $_POST['id-box'];
$idClient = $_POST['id-client'];
$dateEnd = $_POST['date'];

$dataBookingClient = $_POST;


echo "<pre>";
print_r($_POST);
 echo "</pre>";

$resultAddUser = mysqli_query($db, "UPDATE boxing SET status = 'Аренда', `id_client` = '$idClient' 
    WHERE number_box = '$idBox'");

$result = mysqli_query($db, "SELECT * FROM `users-box` WHERE `id` = '$idClient' ");

$currentUser = mysqli_fetch_assoc($result);



header('Location: ../class-single.php');
