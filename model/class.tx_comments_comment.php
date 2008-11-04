<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2007-2008 Dmitry Dulepov <dmitry@typo3.org>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
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
 * [CLASS/FUNCTION INDEX of SCRIPT]
 *
 * $Id$
 */


/**
 * This class is a data record for comments.
 *
 * @author	Dmitry Dulepov <dmitry@typo3.org>
 * @package	TYPO3
 * @subpackage	tx_comments
 */
class tx_comments_comment {

	/**
	 * Data behind this instance
	 *
	 * @var	array
	 */
	protected $row;

	/**
	 * Changed data behind this instance
	 *
	 * @var	array
	 */
	protected $updatedRow;

	/**
	 * Creates an instance of this class
	 *
	 * @param	array	$row	Data row
	 */
	public function __construct($row = array()) {
		$this->updatedRow = $this->row = $row;
	}

	/**
	 * Retrieves ID of the comment record
	 *
	 * @return	int	ID of the record
	 */
	public function getId() {
		return $this->updatedRow['id'];
	}

	/**
	 * Sets id of the record. This function must be called only for new items!
	 *
	 * @param	int	$id	New id of the record
	 * @return	void
	 */
	public function setId($id) {
		if (!isset($this->updatedRow['id'])) {
			$this->updatedRow['id'] = $id;
		}
	}

	/**
	 * Retrieves comment record page id
	 *
	 * @return	int	Page id
	 */
	public function getPid() {
		return $this->updatedRow['pid'];
	}

	/**
	 * Sets page id of the record
	 *
	 * @param	int	$pid	Page id of the record
	 * @return	void
	 */
	public function setPid($pid) {
		$this->updatedRow['pid'] = $pid;
	}

	/**
	 * Retrieves comment record approval flag
	 *
	 * @return	boolean	true if comment is approved
	 */
	public function isApproved() {
		return (boolean)$this->updatedRow['approved'];
	}

	/**
	 * Sets id of the record. This function must be called only for new items!
	 *
	 * @param	boolean	$approved	true if approved
	 */
	public function setApproved($approved = true) {
		$this->updatedRow['approved'] = $approved ? 1 : 0;
	}

	/**
	 * Retrieves first name
	 *
	 * @return	string	First name
	 */
	public function getFirstName() {
		return $this->updatedRow['firstname'];
	}

	/**
	 * Sets first name
	 *
	 * @param	string	$firstName	First name of the user
	 * @return	void
	 */
	public function setFirstName($firstName) {
		$this->updatedRow['firstname'] = $firstName;
	}

	/**
	 * Retrieves last name
	 *
	 * @return	string	Last name
	 */
	public function getLastName() {
		return $this->updatedRow['lastname'];
	}

	/**
	 * Sets last name
	 *
	 * @param	string	$lastName	Last name of the user
	 * @return	void
	 */
	public function setLastName($lastName) {
		$this->updatedRow['lastname'] = $lastName;
	}

	/**
	 * Retrieves e-mail
	 *
	 * @return	string	E-mail
	 */
	public function getEmail() {
		return $this->updatedRow['email'];
	}

	/**
	 * Sets e-mail
	 *
	 * @param	string	$email	E-mail of the user
	 * @return	void
	 */
	public function setEmail($email) {
		$this->updatedRow['e-mail'] = $email;
	}
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/comments/model/class.tx_comments_comment.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/comments/model/class.tx_comments_comment.php']);
}

?>