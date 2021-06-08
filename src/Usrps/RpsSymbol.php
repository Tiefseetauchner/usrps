<?php

namespace Usrps;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="rpsSybol")
 */
class RpsSymbol
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     * @var int
     */
    public $symbolId;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    public $symbolName;

    /**
     * @ORM\Column(type="blob")
     * @var string
     */
    public $symbolImage;

    /**
     * RpsSymbol constructor.
     * @param int $symbolId
     * @param string $symbolName
     * @param string $symbolImage
     */
    public function __construct($symbolId, $symbolName, $symbolImage)
    {
        $this->symbolId = $symbolId;
        $this->symbolName = $symbolName;
        $this->symbolImage = $symbolImage;
    }

}
