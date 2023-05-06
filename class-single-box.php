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
							<li><a  style="color: darkred; text-shadow: 1px 1px 1px #ffffff;" href="#">Клиентам</a>
								<ul>
									<li><a href="class-single-parking.php">Парковка</a></li>
									<li><a href="#">Боксы</a></li>
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
							<h2 class="uppercase text-center mb64 mb-xs-24">Страница для владельцев и арендаторов бокса</h2>
							<div class="col-md-8 col-md-offset-2">
								<div class="mb40 mb-xs-24">
									<p class="large mb32">
										<strong>
                                            Для допуска к информации на этой странице необходимо авторизоваться или зарегистрироваться,
                                            если Вы впервые у нас
                                        </strong>
									</p>

                                    <div class="choice row">
                                        <div id="btn-reg" class="col">
                                            <button class="btn btn-success btn-reg">Зарегистрироваться</button>
                                        </div>
                                        <div id="btn-auth" class="col">
                                            <button class="btn btn-success btn-auth">Авторизоваться</button>
                                        </div>
                                    </div>

                                    <div class="row register">
                                        <h1>Форма регистрации</h1>

                                        <p class="large mb32">Все поля формы нужно обязательно заполнить!</p>
                                        <p class="large mb32">Иначе, как мы с Вами будем взаимодействовать?</p>


                                        <form action="user-kabinet-box.php" method="post">
                                            <input type="hidden" name="option" value="registr">
                                            <input type="text" class="form-control" id="login" name="login" placeholder="Введите логин" > <br>
                                            <input type="password" class="form-control" id="pass" name="pass" placeholder="Введите пароль" ><br>
                                            <input type="password" class="form-control" id="pass-dubl" name="pass" placeholder="Повторите пароль" ><br>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Введите имя" ><br>
                                            <input type="text" class="form-control" id="patronymic" name="patronymic" placeholder="Введите отчество" ><br>
                                            <input type="text" class="form-control" id="surname" name="surname" placeholder="Введите фамилию" ><br>
                                            <input type="tel" class="form-control" id="tel" name="tel" placeholder="Введите номер телефона" ><br>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Адрес электронной почты" ><br>
<!--                                            <label for="lease_time">Если вы планируете аренду бокса, введите количество месяцев аренды</label><br>-->
<!--                                            <input type="number" class="form-control" id="lease_time" name="lease_time" placeholder="Количество месяцев" ><br>-->
                                            <button id="btn-reg-sbm" class="btn btn-success" type="submit" >Зарегистрироваться</button>
                                        </form>
                                    </div>

                                    <div class="row author">
                                        <h1>Форма авторизации</h1>

                                        <form action="user-kabinet-box.php" method="post">
                                            <input type="hidden" name="option" value="author">
                                            <input type="text" class="form-control" id="loginAuth" name="login" placeholder="Введите логин" > <br>
                                            <input type="password" class="form-control" id="passAuth" name="pass" placeholder="Введите пароль" ><br>
                                            <button class="btn btn-success" type="submit">Авторизоваться</button>
                                        </form>
                                    </div>
							

								</div>
						

							</div>
						</div>
					</div><!--end of row-->
				</div><!--end of container-->	
			</section>
	
<!--			<section class="cta bg-white pt180">-->
<!--				<div class="container">-->
<!--					<div class="row">-->
<!--						<div class="col-sm-12 text-center">-->
<!--							<p class="lead mb48 mb-xs-24">Хотите заниматься любимым делом и получать за это деньги?</p>-->
<!--							<a class="btn btn-lg block-xs" href="#">Присоеденяйтесь</a><br />-->
<!--							<a class="fade-half" href="#">Мы Вам в этом поможем!</a>-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
<!--			</section>-->


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
<!--			</div>-->
<!--			-->
<!--			<div class="row">-->
<!--				<div class="col-sm-12 text-center">-->
<!--					<ul class="list-inline social-list wide">-->
<!--						<li><a href="#"><i class="icon icon-sm ti-twitter-alt"></i></a></li>-->
<!--						<li><a href="#"><i class="icon icon-sm ti-facebook"></i></a></li>-->
<!--						<li><a href="#"><i class="icon icon-sm ti-instagram"></i></a></li>-->
<!--					</ul>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
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
        <script src="js/main.js"></script>
    </body>

</html>
