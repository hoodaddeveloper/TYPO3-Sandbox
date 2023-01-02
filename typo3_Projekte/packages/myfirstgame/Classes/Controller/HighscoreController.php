<?php

declare(strict_types=1);

namespace Hoodad\Myfirstgame\Controller;


/**
 * This file is part of the "my First Game" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2023 hoodad <hoodad94@gmail.com>, EWS
 */

/**
 * HighscoreController
 */
class HighscoreController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * highscoreRepository
     *
     * @var \Hoodad\Myfirstgame\Domain\Repository\HighscoreRepository
     */
    protected $highscoreRepository = null;

    /**
     * @param \Hoodad\Myfirstgame\Domain\Repository\HighscoreRepository $highscoreRepository
     */
    public function injectHighscoreRepository(\Hoodad\Myfirstgame\Domain\Repository\HighscoreRepository $highscoreRepository)
    {
        $this->highscoreRepository = $highscoreRepository;
    }

    /**
     * action list
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function listAction(): \Psr\Http\Message\ResponseInterface
    {
        $highscores = $this->highscoreRepository->findAll();
        $this->view->assign('highscores', $highscores);
        return $this->htmlResponse();
    }

    /**
     * action new
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function newAction(): \Psr\Http\Message\ResponseInterface
    {
        return $this->htmlResponse();
    }

    /**
     * action create
     *
     * @param \Hoodad\Myfirstgame\Domain\Model\Highscore $newHighscore
     */
    public function createAction(\Hoodad\Myfirstgame\Domain\Model\Highscore $newHighscore)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/p/friendsoftypo3/extension-builder/master/en-us/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->highscoreRepository->add($newHighscore);
        $this->redirect('list');
    }

    /**
     * action edit
     *
     * @param \Hoodad\Myfirstgame\Domain\Model\Highscore $highscore
     * @TYPO3\CMS\Extbase\Annotation\IgnoreValidation("highscore")
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function editAction(\Hoodad\Myfirstgame\Domain\Model\Highscore $highscore): \Psr\Http\Message\ResponseInterface
    {
        $this->view->assign('highscore', $highscore);
        return $this->htmlResponse();
    }

    /**
     * action update
     *
     * @param \Hoodad\Myfirstgame\Domain\Model\Highscore $highscore
     */
    public function updateAction(\Hoodad\Myfirstgame\Domain\Model\Highscore $highscore)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/p/friendsoftypo3/extension-builder/master/en-us/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->highscoreRepository->update($highscore);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \Hoodad\Myfirstgame\Domain\Model\Highscore $highscore
     */
    public function deleteAction(\Hoodad\Myfirstgame\Domain\Model\Highscore $highscore)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/p/friendsoftypo3/extension-builder/master/en-us/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->highscoreRepository->remove($highscore);
        $this->redirect('list');
    }
}
