<?php
// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__ . "/src"), $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);

$conn = array(
    'driver' => 'mysqli',
    'user' => 'dbuser',
    'password' => 'asdf',
    'dbname' => 'usrps',
    'host' => '127.0.0.1'
);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);