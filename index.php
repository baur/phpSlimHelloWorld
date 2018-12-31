<?php
use Slim\Views\PhpRenderer;
require 'vendor/autoload.php';

$app = new Slim\App();

$container = $app->getContainer();
$container['renderer'] = new PhpRenderer("./templates");

$app->get('/hello/{name}', function ($request, $response, $args) {
	    return $response->getBody()->write("Hello, " . $args['name']);
});

$app->get('/about', function ($request, $response, $args) {
	      return $this->renderer->render($response, "/about.phtml", $args);
	        });

$app->run();
