<?php

//error_reporting(E_ALL ^ E_WARNING);
//if(!$_COOKIE['user']):

require 'php/connect.php';
$login = trim($_POST['login']);
$pass = trim($_POST['pass']);
$pass = md5($pass."region34");

$option = $_POST['option'];
global $db;

if ($option == 'registr') {
    $res = mysqli_query($db, "SELECT * FROM `users-box` WHERE `login` = '$login' ");
    $user = mysqli_fetch_all($res);


    //echo "<pre>";
    //print_r($user);
    //echo "</pre>";

    if(!empty($user) ) {
    //    echo "<pre>";
    //    print_r($user);
    //    echo "</pre>";
    //    header('Location: /class-single-box.php');
        echo "Такой пользователь уже существует! Возможно, Вам стоит авторизоваться";
        ?>
        <br>
        <a href="/class-single-box.php">Перейти на страницу регистрации</a>
        <?php
        exit();
    }



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
    } else if (mb_strlen($pass) < 3 ) {
        echo "Недопустимая длина пароля";
        exit();
    }


    $resultAddUser = mysqli_query($db, "INSERT INTO `users-box` (`login`, `pass`, `name`, `patronymic`, `surname`, `phone`, `email`) 
    VALUES ('$login', '$pass', '$name', '$patronymic', '$surname', '$tel', '$email')");
} else {
    $result = mysqli_query($db, "SELECT * FROM `users-box` WHERE `login` = '$login' AND `pass` = '$pass' " );

    $user = mysqli_fetch_assoc($result);

echo "<pre>";
print_r($user);
echo "</pre>";

    if(empty($user) or count($user)==0) {
        echo "Такой пользователь не найден!";
        ?>
        <br>
        <a href="/class-single-box.php">Перейти на страницу регистрации</a>
        <?php
        exit();
    }

    $name = $user['name'];
    $patronymic = $user['patronymic'];
    $surname = $user['surname'];
    $tel = $user['phone'];
    $email = $user['email'];
}


$resultGetUser = mysqli_query($db, "SELECT * FROM `users-box` WHERE `login` = '$login' AND `pass` = '$pass' ");

$userGetUser = mysqli_fetch_assoc($resultGetUser);
$idBookingUser = $userGetUser['id'];

//echo "<pre>";
//print_r($idBookingUser);
//echo "</pre>";

echo $idBookingUser;
//$mysql->close();
?>

<!doctype html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <title>Клиентам</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/themify-icons.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/lightbox.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
        
    </head>
    <body>
    	<div class="nav-container">
			<nav>
				<div class="nav-utility">
					<div class="module left col-sm-12 col-xs-12 col-md-4 text-center-xs">
						<ul class="list-inline social-list">
							<li>
								<a href="https://wa.me/79093935444" target="_blank">
									<img src="img/whatsapp.svg" alt="">
								</a>
							</li>
							<li>
								<a href="https://t.me/d14_555d" target="_blank">
									<img src="img/telegram.svg" alt="">
								</a>
							</li>
							<li>
								<span class="sub">
									<a href="mailto:dima_dubovskiy@mail.ru">dima_dubovskiy@mail.ru</a>
								</span>
							</li>
						</ul>
					</div>

					<div class="module right">

					</div>
				</div>

				<div class="nav-bar text-center">
					<div class="col-md-2 col-md-push-5 col-sm-12 text-center">
						<a href="index.html" id="logo-text">
							"СЕЙФ"
						</a>
					</div>

					<div class="col-sm-12 col-md-5 col-md-pull-2">
						<ul class="menu pull-right">
							<li><a href="index.html">Главная</a>
							</li>
							<li><a href="about.html">О нас</a></li>
							<li><a href="news.html">Подробности</a></li>
						</ul>
					</div>

					<div class="col-md-5 col-sm-12 pb-xs-24">
						<ul class="menu">
							<li><a  style="color: darkred;" href="#">Клиентам</a>
								<ul>
									<li><a href="class-single-parking.php">Парковка</a></li>
									<li><a href="class-single-box.php">Боксы</a></li>
									<!--									<li><a href="class-single.html">Статья №1</a></li>-->
									<!--									<li><a href="class-single.html">Статья №1</a></li>-->
								</ul>
							</li>
							<li><a href="info.html">Стоимость</a></li>
							<li><a href="contact-form.html">Контакты</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="module widget-handle mobile-toggle right visible-sm visible-xs">
					<i class="ti-menu"></i>
				</div>
			</nav>
    	</div>
        <div class="main-container">
           
			<section class="pt240 pb160 pt-xs-80 pb-xs-80 image-bg page-title">
				<div class="background-image-holder">
					<img alt="Pic" class="background-image" src="img/large3.jpg" />
				</div>
			</section>

			<section class="contained-page p0">
				<div class="container">
					<div class="row">
						<div class="col-md-10 col-md-offset-1 pt64 pb64 bg-secondary">
							<h2 class="uppercase text-center mb64 mb-xs-24">Личный кабинет</h2>
							<div class="col-md-12 col-md-offset-2 contairer-person">
								<div class="mb40 mb-xs-24">
									<p class="large mb32">
										<strong>Здравствуйте,
                                            <?php echo $name . " " . $patronymic;  ?>
                                        </strong>
									</p>
<!--                                    --><?php //else: ?>
<!--                                    <p>Привет, --><?//= $_COOKIE['user'];
//                                    endif;
//                                    ?><!-- </p>-->
									<p>
										Давайте посмотрим, какие боксы свободны
									</p>

                                    <p>
                                        Красный цвет означает, что бокс в собственности, <br> желтый - отдан в аренду, <br> зеленый - свободен
                                    </p>

                                    <div class="col-md-8 box-container">
                                        <div class="box-top mb40 mb-xs-24">

                                            <?php

                                            $resultBox = mysqli_query($db, "SELECT * FROM `boxing` ");

                                            $boxes = mysqli_fetch_all($resultBox);

//                                                       echo "<pre>";
//                                                       print_r($boxes);
//                                                       echo "</pre>";

                                                       foreach ($boxes as $box) {

                                                               ?>
                                                               <div id="<?= $box[1]; ?>"
                                                                    <?php if ($box[2] == "Собственность") {
                                                                        ?>
                                                                        style="background-color: #cb8381;"
                                                                        <?php
                                                                    } elseif ($box[2] == "Аренда") {
                                                                        ?>
                                                                    style="background-color: #eff1b5;"
                                                                    <?php } else {
                                                                        ?>
                                                                        style="background-color: #beee7c; "
                                                                        <?php
                                                                    } ?>

                                                                    class="box-item">
                                                                   Бокс №<?php echo $box[1];
                                                                       if ($box[2] == "Свободен") {
                                                                   ?>
                                                                   <a class="link-arenda" href="#trans">Арендовать</a>
                                                                   <?php } ?>

                                                               </div>
                                                               <?php
                                                       }
                                            ?>
                                        </div>
                                    </div>
							
									<p class="mb32">
									</p>
							
									<p class="large mb32">
										<strong></strong>
									</p>
								</div>
							</div>
						</div>
					</div><!--end of row-->
				</div><!--end of container-->	
			</section>
	
			<section id="trans" class="cta bg-white pt180">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center rent">
                            <p id="control"  class="lead mb48 mb-xs-24"></p>
                            <p class="lead mb48 mb-xs-24">Выберите дату окончания аренды</p>
                            <form action="class-single.php" method="post">
                                <input type="hidden" id="id-box" name="id-box"  > <br>
                                <input type="hidden" id="id-client" name="id-client" value="<?php echo $idBookingUser; ?>" > <br>
                                <input type="date" class="form-date" id="date" name="date" placeholder="До какого числа планируется аренда" ><br>
                                <button id="btn-reg-sbm" class="btn btn-success" type="submit" >Подтвердить аренду</button>
                            </form>

<!--							<p id="control"  class="lead mb48 mb-xs-24">Хотите заниматься любимым делом и получать за это деньги?</p>-->
<!--							<a class="btn btn-lg block-xs" href="#">Присоеденяйтесь</a><br />-->
<!--							<a class="fade-half" href="#">Мы Вам в этом поможем!</a>-->
						</div>
					</div><!--end of row-->
				</div><!--end of container-->
			</section>


			<section data-sr="enter bottom move 20px over .5s and scale 0% and wait 0s">
		<div class="container">
			<div class="row mb64 mb-xs-32">
				<div class="col-sm-12 text-center">
					<div class="bg-secondary pt64 pb64">
						<h4 class="uppercase mb16">Подписаться</h4>
						<p>
							Будьте в курсе всех событий
						</p>
						<form action="php/subscription.php" method="post"  class="form-newsletter" data-success="Отправлено!">
							<input required name="email"  type="text" class="validate-required validate-email signup-email-field" placeholder="Введите Email" />
							<input type="submit" class="btn" value="Подписаться" />
						</form>
					</div>
				</div>
			</div><!--end of row-->
			
			<div class="row">
				<div class="col-sm-12 text-center">
					<ul class="list-inline social-list wide">
						<li><a href="#"><i class="icon icon-sm ti-twitter-alt"></i></a></li>
						<li><a href="#"><i class="icon icon-sm ti-facebook"></i></a></li>
						<li><a href="#"><i class="icon icon-sm ti-instagram"></i></a></li>
					</ul>
				</div>
			</div><!--end of row-->
		</div><!--end of container-->
	</section>

    <footer class="footer-2 bg-dark pt16 pb16 text-center">

        <div class="row footer__row">
            <div class="col-sm-12 text-center">
                <ul class="list-inline social-list wide">
                    <li>
                        <a href="https://wa.me/79093935444" target="_blank">
                            <img src="img/whatsapp.svg" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="https://t.me/d14_555d" target="_blank">
                            <img src="img/telegram.svg" alt="">
                        </a>
                    </li>

                </ul>
            </div>
        </div><!--end of row-->

        <div class="col-sm-2">
            &nbsp;
        </div>

        <div class="col-sm-8 text-center">
            <span class="fade-1-4">&copy; 2023 | Гаражный кооператив "СЕЙФ"</span>
        </div>

        <div class="col-sm-2 text-right text-center-xs">
            <a class="underline" href=""></a>
        </div>
    </footer>
        </div><!--end of main container-->
        
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/flexslider.min.js"></script>
        <script src="js/lightbox.min.js"></script>
        
        <script src="js/spectragram.min.js"></script>
		<script src="js/parallax.js"></script>
		<script src="js/scrollreveal.min.js"></script>	
        <script src="js/scripts.js"></script>
        <script src="js/cabinet.js"></script>
    </body>

</html>
