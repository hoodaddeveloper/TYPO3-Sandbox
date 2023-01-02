<?php

declare(strict_types=1);

namespace Hoodad\Myfirstgame\Domain\Model;


/**
 * This file is part of the "My First Game" Extension for TYPO3 CMS.
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
     * title
     *
     * @var string
     */
    protected $title = '';

    /**
     * highscore
     *
     * @var \Hoodad\Myfirstgame\Domain\Model\Playeer
     */
    protected $highscore = null;

    /**
     * Returns the title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    /**
     * Returns the highscore
     *
     * @return \Hoodad\Myfirstgame\Domain\Model\Playeer
     */
    public function getHighscore()
    {
        return $this->highscore;
    }

    /**
     * Sets the highscore
     *
     * @param \Hoodad\Myfirstgame\Domain\Model\Playeer $highscore
     * @return void
     */
    public function setHighscore(\Hoodad\Myfirstgame\Domain\Model\Playeer $highscore)
    {
        $this->highscore = $highscore;
    }
}
