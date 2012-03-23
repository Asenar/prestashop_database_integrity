<?php

class AdminDatabaseIntegrity extends AdminTab
{
	
	public function postProcess()
	{
		/* PrestaShop demo mode*/
		parent::postProcess();
	}
	
	public function display()
	{
		echo '
		<h2>'.$this->l('Information').'</h2>
		<fieldset>
			<legend><img src="../img/t/AdminInformation.gif" alt="" /> '.$this->l('Information about your configuration').'</legend>
			<h3>'.$this->l('Server information').'</h3>
			<p>
				<b>'.$this->l('Prestashop Version').':</b> 
				'._PS_VERSION_.'
			</p>';
			
	}
}
