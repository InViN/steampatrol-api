<?php
require 'vendor/autoload.php';

$settings = array(
    'driver' => 'mysql',
    'host' => '127.0.0.1',
    'database' => 'steampatrol',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => ''
);

$connFactory = new \Illuminate\Database\Connectors\ConnectionFactory(new \Illuminate\Container\Container());
$conn = $connFactory->make($settings);
$resolver = new \Illuminate\Database\ConnectionResolver();
$resolver->addConnection('default', $conn);
$resolver->setDefaultConnection('default');
\Illuminate\Database\Eloquent\Model::setConnectionResolver($resolver);