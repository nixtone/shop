<?
// Подключаем настройки
$config = require_once($_SERVER['DOCUMENT_ROOT'].'/config.php');

// Собираем блоки
function content() {
	global $config;
	if(array_key_exists($_SERVER['REQUEST_URI'], $config['ROUTES'])) {
		foreach($config['ROUTES'][$_SERVER['REQUEST_URI']] as $blockFile) {
			require_once($_SERVER['DOCUMENT_ROOT'].'/src/'.$blockFile);
		}
	}
}
 
// Формируем и буфферизуем страницу
ob_start();
require_once($_SERVER['DOCUMENT_ROOT']."/src/".$config['DESIGN']);
$page = ob_get_contents();
ob_end_clean();

// Вывод страницы
echo $page;

// Формирование статической страницы
if($config['STATIC']) {
	file_put_contents($_SERVER['DOCUMENT_ROOT']."/dist/".(empty(substr($_SERVER['REQUEST_URI'],1)) ? 'index' : str_replace("/", ".", substr($_SERVER['REQUEST_URI'],1))).".html", $page);
}
