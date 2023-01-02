<?php

declare(strict_types=1);

namespace Hoodad\Myfirstgame\Domain\Model;


/**
 * This file is part of the "my First Game" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2023 hoodad <hoodad94@gmail.com>, EWS
 */

/**
 * Highscore
 */
class Highscore extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * player
     *
     * @var \Hoodad\Myfirstgame\Domain\Model\Player
     */
    protected $player = null;

    /**
     * Returns the player
     *
     * @return \Hoodad\Myfirstgame\Domain\Model\Player
     */
    public function getPlayer()
    {
        return $this->player;
    }

    /**
     * Sets the player
     *
     * @param \Hoodad\Myfirstgame\Domain\Model\Player $player
     * @return void
     */
    public function setPlayer(\Hoodad\Myfirstgame\Domain\Model\Player $player)
    {
        $this->player = $player;
    }
}
