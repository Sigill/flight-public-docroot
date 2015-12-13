<?php

require dirname(__DIR__) . '/vendor/autoload.php';

Flight::route('/', function(){
	echo "OK Route: /";
});

Flight::route('/something', function(){
	echo "OK Route: /something";
});

Flight::map('notFound', function(){
	echo "KO";
});

Flight::start();
