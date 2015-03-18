<?php
/**
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    boxdrop Group AG
 * @copyright boxdrop Group AG
 * @license   http://opensource.org/licenses/afl-3.0.php Academic Free License (AFL 3.0)
 * International Registered Trademark & Property of boxdrop Group AG
 */

if (!defined('_PS_VERSION_'))
	exit;

/**
 * Upgrades a module to 1.0.5.
 * Removes old hook
 * 
 * @author sweber <sw@boxdrop.com>
 * @param  mixed  $object
 * @return boolean
 */
function upgrade_module_1_0_5($object)
{
	return ($object->unregisterHook('displayAdminOrderContentShip'));
}