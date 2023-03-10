<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/png" href="/favicon.png">
<title>Магазин</title>
<link rel="stylesheet" href="/static/custom.css">
</head>
<body>
<div id="wrapper">
	<div class="container">
		<header>
			<div class="row c1">
				<a href="/" id="logo"><img src="/static/images/logo.png" alt=""></a>
				<div class="contact_area">
					<a href="" class="phone">+7 900 123-45-67</a>
					<a href="" class="email">reply@shop.ru</a>
				</div>
				<div id="user_area">
					<!-- <a href="/login">Log In</a> | <a href="/reg">Sign Up</a> -->
					<div class="profile">
						<img src="/static/images/avatar.png" alt="" class="avatar">
						<div class="name">Вы вошли как <a href="/profile">Nixtone</a>,<br> <a href="" class="exit">Выйти</a></div>
					</div>
				</div>
			</div>
			<div class="row c2">
				<nav>
					<a href="/">Главная</a>
					<a href="/catalog">Каталог</a>
					<a href="/post">Посты</a>
				</nav>
				<div class="cart_area">
					<a href="/favorite" class="ico favorite"></a>
					<a href="/cart" class="ico cart has"><span class="count">2</span></a>
				</div>
			</div>
		</header>
		
		<? content() ?>

	</div>
</div>
<footer>
	<div class="container">&copy; 2022. Магазин барахла</div>
</footer>
</body>
</html>