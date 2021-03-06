<?php
/**
* Mailing List extension for the phpBB Forum Software package.
*
* @copyright (c) 2015 DavidIQ.com
* @license GNU General Public License, version 2 (GPL-2.0)
*/

namespace davidiq\mailinglist\migrations\v10x;

/**
* Migration stage 3: Initial module
*/
class initial_module extends \phpbb\db\migration\migration
{
	/**
	* Add or update data in the database
	*
	* @return array Array of table data
	* @access public
	*/
	public function update_data()
	{
		return array(
			array('module.add', array('acp', 'ACP_CAT_DOT_MODS', 'ACP_CAT_MAILINGLIST')),
			array('module.add', array(
				'acp', 'ACP_CAT_MAILINGLIST', array(
					'module_basename'	=> '\davidiq\mailinglist\acp\mailinglist_module',
					'modes'				=> array('main'),
				),
			)),
		);
	}
}
