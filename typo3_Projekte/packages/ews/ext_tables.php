<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_ews_domain_model_hallo', 'EXT:ews/Resources/Private/Language/locallang_csh_tx_ews_domain_model_hallo.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ews_domain_model_hallo');
})();
