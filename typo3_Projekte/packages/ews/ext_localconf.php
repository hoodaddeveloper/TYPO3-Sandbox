<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Ews',
        'Ews',
        [
            \Hoodad\Ews\Controller\HelloworldController::class => 'show'
        ],
        // non-cacheable actions
        [
            \Hoodad\Ews\Controller\HalloController::class => 'show, list'
        ]
    );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    ews {
                        iconIdentifier = ews-plugin-ews
                        title = LLL:EXT:ews/Resources/Private/Language/locallang_db.xlf:tx_ews_ews.name
                        description = LLL:EXT:ews/Resources/Private/Language/locallang_db.xlf:tx_ews_ews.description
                        tt_content_defValues {
                            CType = list
                            list_type = ews_ews
                        }
                    }
                }
                show = *
            }
       }'
    );
})();
