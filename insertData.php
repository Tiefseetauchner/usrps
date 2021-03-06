<?php

use Doctrine\ORM\EntityManager;
use Usrps\Player;
use Usrps\RpsSymbol;
use Usrps\UsrpsGame;

ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

require "vendor/autoload.php";
require_once "bootstrap.php";

$entityManager = EntityManager::create($conn, $config);

function var_dump_pre($mixed = null)
{
    echo '<pre>';
    echo htmlspecialchars(\Usrps\var_dump_ret($mixed));
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

$rockBlob =

$games = [
    0 => new UsrpsGame(new DateTime('2020-05-08 15:02:43'), 4, 3, 0, 1),
    1 => new UsrpsGame(new DateTime('2020-05-08 15:11:14'), 2, 1, 0, 2),
    2 => new UsrpsGame(new DateTime('2021-12-16 17:24:32'), 6, 5, 1, 1),
    3 => new UsrpsGame(new DateTime('2021-12-16 17:26:25'), 5, 7, 2, 0),
    4 => new UsrpsGame(new DateTime('2021-12-17 17:32:54'), 5, 8, 2, 1),
];

$rpsSymbols = [
    0=>new RpsSymbol(0, 'Rock', $rockBlob),
    1=>new RpsSymbol(1, 'Paper', $paperBlob),
    2=>new RpsSymbol(2, 'Scissors', $scissorBlob),
];

$players = [
    0 => new Player(1, 'Dorka'),
    1 => new Player(2, 'DMurnett'),
    2 => new Player(3, 'Gwen Tech witch'),
    3 => new Player(4, 'Jessica'),
    4 => new Player(5, 'E_Lay'),
    5 => new Player(6, 'LukeChriswalker '),
    6 => new Player(7, 'Kali'),
    7 => new Player(8, 'Garlic'),
];

foreach ($players as $player) {
    $entityManager->persist($player);
}

foreach ($games as $game) {
    $entityManager->persist($game);
}

$entityManager->flush();
