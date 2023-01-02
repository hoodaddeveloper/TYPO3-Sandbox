<?php

declare(strict_types=1);

namespace Hoodad\Myfirstgame\Tests\Unit\Domain\Model;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 *
 * @author hoodad <hoodad94@gmail.com>
 */
class HighscoreTest extends UnitTestCase
{
    /**
     * @var \Hoodad\Myfirstgame\Domain\Model\Highscore|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = $this->getAccessibleMock(
            \Hoodad\Myfirstgame\Domain\Model\Highscore::class,
            ['dummy']
        );
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getPlayerReturnsInitialValueForPlayer(): void
    {
        self::assertEquals(
            null,
            $this->subject->getPlayer()
        );
    }

    /**
     * @test
     */
    public function setPlayerForPlayerSetsPlayer(): void
    {
        $playerFixture = new \Hoodad\Myfirstgame\Domain\Model\Player();
        $this->subject->setPlayer($playerFixture);

        self::assertEquals($playerFixture, $this->subject->_get('player'));
    }
}
