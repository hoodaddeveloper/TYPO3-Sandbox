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
    public function getTitleReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getTitle()
        );
    }

    /**
     * @test
     */
    public function setTitleForStringSetsTitle(): void
    {
        $this->subject->setTitle('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('title'));
    }

    /**
     * @test
     */
    public function getHighscoreReturnsInitialValueForPlayeer(): void
    {
        self::assertEquals(
            null,
            $this->subject->getHighscore()
        );
    }

    /**
     * @test
     */
    public function setHighscoreForPlayeerSetsHighscore(): void
    {
        $highscoreFixture = new \Hoodad\Myfirstgame\Domain\Model\Playeer();
        $this->subject->setHighscore($highscoreFixture);

        self::assertEquals($highscoreFixture, $this->subject->_get('highscore'));
    }
}
