<?php
require_once '../vendor/autoload.php';
require_once '../config.php';

$app = new \Slim\Slim();
$app->response->headers->set('Content-Type', 'application/json');

// REST API endpoints are put into here
$app->get('/', function () {
    echo \User::all()->toJson();
});

$app->run();