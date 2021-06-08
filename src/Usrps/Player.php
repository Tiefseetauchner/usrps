<?php


namespace Usrps;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="players")
 */
class Player
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     * @var int
     */
    public $playerId;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    public $nickname;

    /**
     * Player constructor.
     * @param int $playerId
     */
    public function __construct($playerId, $nickname)
    {
        $this->playerId = $playerId;
        $this->nickname = $nickname;
    }
}