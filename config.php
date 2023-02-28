<?
return [

	// Шаблон сайта
	'DESIGN' => "design.php",

	// Формирование статической страницы
	'STATIC' => 1,

	// Разделы
	'ROUTES' => [

		// Главная
		'/' => [
			'main.php',
		],

		// Опознание
		'/login' => [
			'login.php',
		],
		'/reg' => [
			'reg.php',
		],
		'/profile' => [
			'profile.php',
		],

		// Покупка
		'/favorite' => [
			'favorite.php',
		],
		'/cart' => [
			'cart.php',
		],

		// Разделы
		'/catalog' => [
			'catalog/list.php',
		],
		'/catalog/item' => [
			'catalog/item.php'
		],
		'/post' => [
			'post/list.php',
		],
		'/post/item' => [
			'post/item.php'
		],


		// Админка

		// посты
		'/admin/post/list' => [
			'admin/post/list.php',
		],
		'/admin/post/new' => [
			'/admin/post/new.php',
		],
		'/admin/post/edit' => [
			'/admin/post/edit.php',
		],

		// товары
		'/admin/product/list' => [
			'admin/product/list.php',
		],
		'/admin/product/new' => [
			'/admin/product/new.php',
		],
		'/admin/product/edit' => [
			'/admin/product/edit.php',
		],

		// категории
		'/admin/category/list' => [
			'admin/category/list.php',
		],
		'/admin/category/new' => [
			'/admin/category/new.php',
		],
		'/admin/category/edit' => [
			'/admin/category/edit.php',
		],
		
		// теги
		'/admin/tag/list' => [
			'admin/tag/list.php',
		],
		'/admin/tag/new' => [
			'/admin/tag/new.php',
		],
		'/admin/tag/edit' => [
			'/admin/tag/edit.php',
		],
		
		/*
		'' => [
			'',
		],
		*/
		
	],
	
];
