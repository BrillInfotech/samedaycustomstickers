<?php
class Setting extends BackendAppModel {

	var $name = 'Setting';
	var $useTable = 'setting';
	var $actsAs = array('Multivalidatable');
	var $validationSets = array(
			/*'WebsiteSetting' => array(
				'ema' => array(
					'rule'    => array('extension',array('png', 'PNG')),
					'allowEmpty'=>true,
					'message' => 'Please upload only .png image.'
				)
			)*/
		);	
	
};?>