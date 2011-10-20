<?php
/***************************************************************
*  Copyright notice
*
*  (c) 	2011 Juerg Langhard <langhard@greenbanana.ch> 
*  		GreenBanana GmbH - www.greenbanana.ch
*  	
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 3 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * Controller for the Unsubscribe object
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */

class Tx_GrbDirectMailUnsubscribe_Controller_UnsubscribeController extends Tx_Extbase_MVC_Controller_ActionController {
	
	/**
	 * frontendUserRepository
	 * @var Tx_GrbDirectMailUnsubscribe_Domain_Repository_FrontendUserRepository
	 */
	protected $frontendUserRepository;

	/**
	 * Initializes the current action
	 * @return void
	 */
	protected function initializeAction() {
		$this->frontendUserRepository = t3lib_div::makeInstance('Tx_GrbDirectMailUnsubscribe_Domain_Repository_FrontendUserRepository');
	}
	
		
	/**
	 * Displays a single Unsubscribe
	 * @return string The rendered view
	 */
	public function showAction() {
		$gpvars = t3lib_div::_GP(grb_direct_mail_unsubscribe);
		$user = $this->frontendUserRepository->findByUid($gpvars['uid']);
			
		if(is_object($user) && $gpvars['action']=='unsubscribe'){
			$this->view->assign('unsubscribe',true);
			$user->setNewsletter(0);
		
			// Update Object
			$this->frontendUserRepository->update($user);
		
			// Send User-Object to View
			$this->view->assign('user',$user);
			
		}else{
			$this->view->assign('unsubscribe',false);
		}
	}
	
}
?>