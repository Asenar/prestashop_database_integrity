<?php

class Database_Integrity extends Module{

	public function __construct() {
		$this->name = 'Database Integrity check';
		$this->tab = 'dev';
		// version number x.y.z 
		// x=0 means not yet considered as fully stable
		// y+1 means a major bugfix or improvement
		// z+1 means a bugfix, optimization or minor improvements
		$this->version = '0.1';

		if (!defined('_PS_ADMIN_DIR_'))
		{
			if (defined('PS_ADMIN_DIR'))
				define('_PS_ADMIN_DIR_',PS_ADMIN_DIR);
		}

		parent::__construct();

		$this->displayName = $this->l('Database integrity check');
		$this->description = $this->l('Check all database tables and create a report related to database integrity (all rows in product_lang correspond to one row in product for example )');
	}
}
