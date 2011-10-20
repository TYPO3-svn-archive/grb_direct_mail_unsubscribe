<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2011 Juerg Langhard <langhard@greenbanana.ch>, GreenBanana GmbH - www.greenbanana.ch
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
 * FrontendUser
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */

 class Tx_GrbDirectMailUnsubscribe_Domain_Model_FrontendUser extends Tx_Extbase_Domain_Model_FrontendUser {

  	/**
	 * newsletter
	 * @var int
	 */
	protected $newsletter;

  	/**
	 * Getter for newsletter
	 * @return int newsletter
	 */
	public function getNewsletter() {
		return $this->newsletter;
	}

	/**
	 * Setter for newsletter
	 * @param int $newsletter newsletter
	 * @return void
	 */
	public function setNewsletter($newsletter) {
		$this->newsletter = $newsletter;
	}
	
  	/**
	 * pid
	 * @var int
	 */
	protected $pid;

  	/**
	 * Getter for pid
	 * @return int pid
	 */
	public function getPid() {
		return $this->pid;
	}

	/**
	 * Setter for pid
	 * @param int $pid pid
	 * @return void
	 */
	public function setPid($pid) {
		$this->pid = $pid;
	}	
	
}
?>