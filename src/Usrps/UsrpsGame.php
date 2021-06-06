<?php

namespace Usrps;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="gameRounds")
 */
class UsrpsGame
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     * @var int
     */
    protected $gameId;

    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    protected $date;

    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    protected $player1;

    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    protected $player2;

    /**
     * @ORM\Column(type="string", columnDefinition="ENUM('rock', 'paper', 'scissors')")
     * @var string
     */
    protected $player1Symbol;

    /**
     * @ORM\Column(type="string", columnDefinition="ENUM('rock', 'paper', 'scissors')")
     * @var string
     */
    protected $player2Symbol;

    /**
     * UsrpsGame constructor.
     * @param int $gameId
     * @param \DateTime $date
     * @param int $player1
     * @param int $player2
     * @param string $player1Symbol
     * @param string $player2Symbol
     */
    public function __construct(\DateTime $date, $player1, $player2, $player1Symbol, $player2Symbol)
    {
        $this->gameId = $gameId;
        $this->date = $date;
        $this->player1 = $player1;
        $this->player2 = $player2;
        $this->player1Symbol = $player1Symbol;
        $this->player2Symbol = $player2Symbol;
    }
}