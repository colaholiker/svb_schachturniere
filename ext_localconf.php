<?php

defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function ($extKey) {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'SvbSchachturniere',
            'Viewtournament',
            [
                \SchachvereinBalingen\SvbSchachturniere\Controller\viewtournamentController::class => 'view'
            ],
            // non-cacheable actions
            [
                
            ]
        );

    // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
			wizards.newContentElement.wizardItems.plugins {
				elements {
					viewtournament {
						icon = &#039; . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($extKey) . &#039;Resources/Public/Icons/user_plugin_viewtournament.svg
						title = LLL:EXT:svb_schachturniere/Resources/Private/Language/locallang_db.xlf:tx_svb_schachturniere_domain_model_viewtournament
						description = LLL:EXT:svb_schachturniere/Resources/Private/Language/locallang_db.xlf:tx_svb_schachturniere_domain_model_viewtournament.description
						tt_content_defValues {
							CType = list
							list_type = svbschachturniere_viewtournament
						}
					}
				}
				show = *
			}
	   }'
        );
    },
    'svb_schachturniere'
);
