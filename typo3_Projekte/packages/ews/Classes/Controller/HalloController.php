<?php

declare(strict_types=1);

namespace Hoodad\Ews\Controller;


/**
 * This file is part of the "my first plugin" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2022 Hoodi <hoodad94@gmail.com>, Umbrella
 */

/**
 * HalloController
 */
class HalloController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * halloRepository
     *
     * @var \Hoodad\Ews\Domain\Repository\HalloRepository
     */
    protected $halloRepository = null;

    /**
     * @param \Hoodad\Ews\Domain\Repository\HalloRepository $halloRepository
     */
    public function injectHalloRepository(\Hoodad\Ews\Domain\Repository\HalloRepository $halloRepository)
    {
        $this->halloRepository = $halloRepository;
    }

    /**
     * action list
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function listAction(): \Psr\Http\Message\ResponseInterface
    {
        $hallos = $this->halloRepository->findAll();
        $this->view->assign('hallos', $hallos);
        return $this->htmlResponse();
    }

    /**
     * action show
     *
     * @param \Hoodad\Ews\Domain\Model\Hallo $hallo
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function showAction(\Hoodad\Ews\Domain\Model\Hallo $hallo): \Psr\Http\Message\ResponseInterface
    {
        $this->view->assign('hallo', $hallo);
        return $this->htmlResponse();
    }
}
