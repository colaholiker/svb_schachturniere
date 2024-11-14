<?php

namespace SchachvereinBalingenEv\SvbSchachturniere\Controller;

/***
 *
 * This file is part of the "svb_schachturniere" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2017 Sebastian During <sebastian.during@svbalingen.de>, Schachverein Balingen e.V.
 *
 ***/

/**
 * SpielerController
 */
class ViewtournamentController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
	/**
	 * action list
	 *
	 * @return void
	 */
	public function viewAction()
	{
		$target = 'http://www.schachturniere.com/schach/swiss-iframe.cgi';
		$temp_post = $_GET;

		$temp_post['turnier_id'] = $this->settings['turnier_id'];
		$temp_post['session_key'] = $this->settings['session_key'];

		if (empty($temp_post['action'])) {
			$temp_post['action'] = 'tab_auflistung';
		}

		$target = $target . '?' . http_build_query($temp_post);

		if (is_resource(@fopen($target, 'r'))) {
			$doc = new \DOMDocument();
			$doc->preserveWhiteSpace = false;
			$doc->substituteEntities = false;
			@$doc->loadHTMLFile($target);


			$output = '';
			foreach ($doc->getElementsByTagName('table') as $key => $temp) {
				if ($key == 1) {
					$links = $temp->getElementsByTagName('a');

					foreach ($links as $link) {
						$temp_href = $link->getAttribute('href');

						$temp_href_query = parse_url($temp_href, PHP_URL_QUERY);
						parse_str($temp_href_query, $temp_href_options);

						$temp_href = $this->uriBuilder->reset()->setArguments($temp_href_options)->build();

						if ($link->getAttribute('target') != '_blank') {
							$link->setAttribute('href', utf8_encode($temp_href));
						}
					}

					$output .= html_entity_decode($doc->saveHTML($temp));
				}
			}
		} else {
			$output = '<p>die Daten könnten nicht eingelesen werden (' . $target . ')</p>';
		}

		$this->view->assign('output', $output);

		return $this->htmlResponse();
	}
}
