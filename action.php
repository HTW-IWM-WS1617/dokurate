<?php
/**
 * DokuWiki Plugin dokurate (Action Component)
 *
 * @license GPL 2 http://www.gnu.org/licenses/gpl-2.0.html
 * @author  Gruppe DokuRate <htw_docurate@fraunhofer.de>
 */

// must be run within Dokuwiki
if(!defined('DOKU_INC')) die();
if(!defined('DOKU_PLUGIN')) define('DOKU_PLUGIN',DOKU_INC.'lib/plugins/');
require_once(DOKU_PLUGIN.'action.php');

class action_plugin_dokurate extends DokuWiki_Action_Plugin {


    /**
     * Registers a callback function for a given event
     *
     * @param Doku_Event_Handler $controller DokuWiki's event controller object
     * @return void
     */
    public function register(Doku_Event_Handler $controller) {


			 $controller->register_hook('TPL_ACT_RENDER', 'BEFORE', $this, 'ShowStars');

    }

    /**
     * [Custom event handler which performs action]
     *
     * @param Doku_Event $event  event object by reference
     * @param mixed      $param  [the parameters passed as fifth argument to register_hook() when this
     *                           handler was registered]
     * @return void
     */

		 public function ShowStars(Doku_Event &$event, $param) {
		     //if($event->data != 'Call') return;
		       //$event->preventDefault();
		       $dokurate = plugin_load('helper','dokurate');
		       if($dokurate) echo $dokurate->dokurate_display();
		     }



}
