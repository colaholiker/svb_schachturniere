<?php

defined('TYPO3') || die('Access denied.');


call_user_func(
    static function () {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'SvbSchachturniere',
            'Viewtournament',
            'viewtournament'
        );

        #$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['svbschachturniere_viewtournament'] = 'pi_flexform';
        #\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue('svbschachturniere_viewtournament', 'FILE:EXT:svb_schachturniere/Configuration/FlexForm/flexform_schachturniere.xml');
    },
);

