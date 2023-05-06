<?php

require 'php/connect.php';
global $db;

$idBox = $_POST['id-box'];
$idClient = $_POST['id-client'];
$dateEnd = $_POST['date'];
$currentDate = date('Y-m-d');
function countDaysBetweenDates($d1, $d2) {
    $date1 = new DateTime($d1);
    $date2 = new DateTime($d2);
    return $date2->diff($date1);
}

$diff = countDaysBetweenDates($currentDate, $dateEnd);

$dataBookingClient = $_POST;


echo "<pre>";
print_r($_POST);
echo "</pre>";

$resultAddUser = mysqli_query($db, "UPDATE boxing SET status = 'Аренда', `id_client` = '$idClient' 
    WHERE number_box = '$idBox'");

$result = mysqli_query($db, "SELECT * FROM `users-box` WHERE `id` = '$idClient' ");

$currentUser = mysqli_fetch_assoc($result);
$currentArr = (array) $diff; //Преобразуем объект в масив

print_r($currentArr);

echo "<pre>";
print_r($currentArr);
echo "</pre>";

$year = $currentArr['y'];
$month = $currentArr['m'];
$day = $currentArr['d'];




echo "<pre>";
print_r($currentUser);
echo "</pre>";



?>

<!doctype html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <title>Личный кабинет</title>
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
									<!--									<li><a href="class-single.php">Статья №1</a></li>-->
									<!--									<li><a href="class-single.php">Статья №1</a></li>-->
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
							<h2 class="uppercase text-center mb64 mb-xs-24">
                                Уважаемый <?= $currentUser['name'] . ' ' . $currentUser['patronymic'] ; ?>
                            </h2>
							<div class="col-md-8 col-md-offset-2">
								<div class="mb40 mb-xs-24">
									<p class="large mb32">
										<strong>
                                            Вы успешно подали заявку на аренду бокса №<?= $idBox ; ?>
                                        </strong>
									</p>
							
									<p>
                                        С сегодняшнего числа до заказанного Вами <?= $dateEnd; ?> продолжительность и
                                        общая стоимость аренды составит:
									</p>
                                    <ul class="bullets">
                                        <?php if($year): ?>
                                        <li><span>Количество лет - </span> <?= $year; ?> <span> - <?php echo ($year*200000); ?> руб. </span></li>
                                        <?php endif; ?>

                                        <?php if($month): ?>
                                            <li><span>Количество месяцев - </span> <?= $month; ?> <span> - <?php echo ($month*25000); ?> руб. </span></li>
                                        <?php endif; ?>

                                        <?php if($day): ?>
                                            <li><span>Количество лет - </span> <?= $day; ?> <span> - <?php echo ($day*1000); ?> руб. </span></li>
                                        <?php endif; ?>

                                        <li><span><strong>Общая сумма аренды составит - <?php echo (($year*200000)+($month*25000)+($day*1000)); ?> руб.</strong></span></li>

                                    </ul>
							

								</div>
						
								<div class="bg-white pt40 pb16 overflow-hidden">
									<div class="col-sm-8 p32">
										<p>
                                            Для подтверждения завершения бронирования и оплаты или при желании приобрести бокс в собственность
                                            свяжитесь с нами
										</p>
									</div>
							
									<div class="col-sm-4">
										<a class="btn mb0" href="tel:+79093935444">Позвонить</a>
									</div>
								</div>
							</div>
						</div>
					</div><!--end of row-->
				</div><!--end of container-->	
			</section>
	
<!--			<section data-sr="enter bottom move 20px over .5s and scale 0% and wait 0s">-->
<!--		<div class="container">-->
<!--			<div class="row mb64 mb-xs-32">-->
<!--				<div class="col-sm-12 text-center">-->
<!--					<div class="bg-secondary pt64 pb64">-->
<!--						<h4 class="uppercase mb16">Подписаться</h4>-->
<!--						<p>-->
<!--							Будьте в курсе всех событий-->
<!--						</p>-->
<!--						<form action="php/subscription.php" method="post"  class="form-newsletter" data-success="Отправлено!">-->
<!--							<input required name="email"  type="text" class="validate-required validate-email signup-email-field" placeholder="Введите Email" />-->
<!--							<input type="submit" class="btn" value="Подписаться" />-->
<!--						</form>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div><!--end of row-->-->
<!--			-->
<!--			<div class="row">-->
<!--				<div class="col-sm-12 text-center">-->
<!--					<ul class="list-inline social-list wide">-->
<!--						<li><a href="#"><i class="icon icon-sm ti-twitter-alt"></i></a></li>-->
<!--						<li><a href="#"><i class="icon icon-sm ti-facebook"></i></a></li>-->
<!--						<li><a href="#"><i class="icon icon-sm ti-instagram"></i></a></li>-->
<!--					</ul>-->
<!--				</div>-->
<!--			</div><!--end of row-->-->
<!--		</div><!--end of container-->-->
<!--	</section>-->

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
    </body>

</html>
