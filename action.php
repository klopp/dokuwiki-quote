<?php
/**
 * Action Plugin: Inserts a button into the toolbar to add quote
 *
 * @author klopp@yandex.ru
 */

if (!defined('DOKU_INC')) die();
if (!defined('DOKU_PLUGIN')) define('DOKU_PLUGIN', DOKU_INC . 'lib/plugins/');
require_once (DOKU_PLUGIN . 'action.php');

class action_plugin_quote extends DokuWiki_Action_Plugin {

	function register(&$controller)
	{
		$controller->register_hook('TOOLBAR_DEFINE', 'AFTER', $this, 'handle_toolbar', array ());
	}

	function handle_toolbar(& $event, $param) {
		$event->data[] = array (
				'type' => 'format',
				'title' => $this->getLang('quote'),
				'icon' => '../../plugins/quote/quote.png',
				'open' => '> ',
				'close' => '\n',
				'block' => false
		);
	}

}
