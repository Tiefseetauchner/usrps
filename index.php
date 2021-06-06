<?php

namespace Usrps;

use Doctrine\ORM\EntityManager;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

require "vendor/autoload.php";
require_once "bootstrap.php";

$entityManager = EntityManager::create($conn, $config);

function var_dump_pre($mixed = null)
{
    echo '<pre>';
    echo htmlspecialchars(var_dump_ret($mixed));
    echo '</pre>';
    return null;
}

function var_dump_ret($mixed = null)
{
    ob_start();
    var_dump($mixed);
    $content = ob_get_contents();
    ob_end_clean();
    return $content;
}

$query = $entityManager->createQueryBuilder()
    ->select('*')
    ->from(UsrpsGame::class, "gr")
//    ->join("gameRounds", "players", "p1", "player1 = p1.playerId")
//    ->join("gameRounds", "players", "p2", "player2 = p2.playerId")
    ->getQuery();

echo "1";

$results = $query->getArrayResult();

echo "2";

$loader = new FilesystemLoader('./templates');
$twig = new Environment($loader);

$games = $results;

$twig->addGlobal("games", $games);
$template = $twig->load('template.twig');

echo $template->render();