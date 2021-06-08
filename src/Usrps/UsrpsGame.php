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
    public $date;

    /**
     * @ORM\Column(type="integer")
     * @var int
     * @ORM\ManyToOne(targetEntity="Player")
     * @ORM\JoinColumn(name="player1_id", referencedColumnName="playerId")
     */
    public $player1;

    /**
     * @ORM\Column(type="integer")
     * @var int
     * @ORM\ManyToOne(targetEntity="Player")
     * @ORM\JoinColumn(name="player2_id", referencedColumnName="playerId")
     */
    public $player2;

    /**
     * @ORM\Column(type="integer")
     * @var int
     * @ORM\ManyToOne(targetEntity="RpsSymbol")
     * @ORM\JoinColumn(name="player1_symbol", referencedColumnName="symbolId")
     */
    public $player1Symbol;

    /**
     * @ORM\Column(type="integer")
     * @var int
     * @ORM\ManyToOne(targetEntity="RpsSymbol")
     * @ORM\JoinColumn(name="player2_symbol", referencedColumnName="symbolId")
     */
    public $player2Symbol;

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
        $this->date = $date;
        $this->player1 = $player1;
        $this->player2 = $player2;
        $this->player1Symbol = $player1Symbol;
        $this->player2Symbol = $player2Symbol;
    }

}