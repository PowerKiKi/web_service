<?php
namespace Vanilla\WebService\UserFunction;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 Fabien Udriot <fabien.udriot@typo3.org>
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
use TYPO3\CMS\Core\SingletonInterface;

/**
 * Controller class for handling action related to a product.
 */
class RealUrl implements SingletonInterface {

	/**
	 * @param $params
	 * @param $ref
	 * @return bool|int|string
	 */
	public function getDataType($params, $ref) {

		var_dump($params);
		$result = $params['origValue'];
		if ($params['origValue'] == 'processes') {
			$result = 'tx_bobst_processes';
		}

		return $result;
	}


}