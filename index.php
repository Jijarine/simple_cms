<?php

if (!defined('DS')) {
	define('DS', DIRECTORY_SEPARATOR);
}

if (!defined('ROOT')) {
	define('ROOT', dirname(__FILE__));
}

if (!defined('VIEWS')) {
	define('VIEWS', ROOT.DS.'views');
}

if (!defined('TEMPLATES')) {
	define('TEMPLATES',VIEWS.DS.'templates');
}

function debug($var) {
	$string = '<div class="debug-output">%s</div>';
	printf($string, print_r($var, true));
}

debug(ROOT);

spl_autoload_register(function ($className) {
	$ds = DIRECTORY_SEPARATOR;
	$dir = __DIR__;
	
	$className = str_replace('\\', $ds, $className);
	$className = str_replace('application/', '', $className);
	$file = "{$dir}{$ds}{$className}.php";

	if (is_readable($file)) {
		require_once $file;
	}
});

$model = new application\models\Model();
$controller = new application\controllers\Page($model);
$view = new application\views\View($controller, $model);
echo $view->output();

?>