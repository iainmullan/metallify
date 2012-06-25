<?php
class AppController extends Controller {

	var $components = array('Auth');

	function beforeFilter() {
		$this->Auth->allow('*');
	}

}
?>