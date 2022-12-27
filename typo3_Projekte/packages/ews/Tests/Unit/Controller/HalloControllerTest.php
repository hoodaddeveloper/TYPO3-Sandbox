<?php

declare(strict_types=1);

namespace Hoodad\Ews\Tests\Unit\Controller;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;
use TYPO3Fluid\Fluid\View\ViewInterface;

/**
 * Test case
 *
 * @author Hoodi <hoodad94@gmail.com>
 */
class HalloControllerTest extends UnitTestCase
{
    /**
     * @var \Hoodad\Ews\Controller\HalloController|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder($this->buildAccessibleProxy(\Hoodad\Ews\Controller\HalloController::class))
            ->onlyMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllHallosFromRepositoryAndAssignsThemToView(): void
    {
        $allHallos = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $halloRepository = $this->getMockBuilder(\Hoodad\Ews\Domain\Repository\HalloRepository::class)
            ->onlyMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $halloRepository->expects(self::once())->method('findAll')->will(self::returnValue($allHallos));
        $this->subject->_set('halloRepository', $halloRepository);

        $view = $this->getMockBuilder(ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('hallos', $allHallos);
        $this->subject->_set('view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenHalloToView(): void
    {
        $hallo = new \Hoodad\Ews\Domain\Model\Hallo();

        $view = $this->getMockBuilder(ViewInterface::class)->getMock();
        $this->subject->_set('view', $view);
        $view->expects(self::once())->method('assign')->with('hallo', $hallo);

        $this->subject->showAction($hallo);
    }
}
