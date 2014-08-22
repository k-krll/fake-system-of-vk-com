<?php

require_once __DIR__.'/vendor/autoload.php';

$app = new Silex\Application();

$app->get('/', function () {
   return file_get_contents(__DIR__.'/login.tpl');
});

$app->post('/', function () {
	return "{$_REQUEST['email']} {$_REQUEST['pass']}";
});

$app->run();