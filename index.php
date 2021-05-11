<?php

use Doctrine\DBAL\DriverManager;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

require "vendor/autoload.php";

ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

$connectionParams = array(
    'dbname' => 'usrps',
    'user' => 'dbuser',
    'password' => 'asdf',
    'host' => 'localhost',
    'driver' => 'pdo_mysql',
);

try {
    $conn = DriverManager::getConnection($connectionParams);
    $conn->prepare("asdf");

} catch (\Doctrine\DBAL\Exception $e) {
    die("An error occured, please panic and scream around and panic a bit more");
}
$loader = new FilesystemLoader('./templates');
$twig = new Environment($loader);

$template = $twig->load('template.twig');

echo $template->render();