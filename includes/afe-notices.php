<?php
if ( ! defined( 'ABSPATH' ) )  exit; // Exit if accessed directly

class AFE_Notice {

	protected $_notices = array();

	public function add_admin_notice($class, $message){
		$this->_notices[] = array('class' => $class, 'message' => $message);
	}

	public function admin_notices(){
		foreach ($this->_notices as $key => $notice) {
			if(!empty($notice['class']) && !empty($notice['message'])){
				printf('<div class="%s"><p>%s</p></div>', $notice['class'], $notice['message']); 
			}
		}
	}

}