<?php
class ApiAppController extends AppController {

	var $uses = array('ApiKey');
	var $components = array('RequestHandler');

	var $key;
	var $format;
	var $method;

	var $methods = array(
		'badge.generate'
	);

	function beforeFilter() {
		parent::beforeFilter();
		if (isset($this->params['api_key'])) {
			$this->key = $this->params['api_key'];
			
			$key = $this->ApiKey->findByKey($this->key);
			
			if (!$key) {
				$this->set('error', array('code' => '136', 'Invalid key'));
				$this->render('error');
				exit();
			}

			$this->method = $this->params['method'];
			
			
			$this->format = $this->params['format'];
		}
	}

	/**
	 * All API calls will hit this action
	 */
	function index() {

		$method_name = $this->method;

		$method_name = preg_replace('/\./', '_', $method_name);
		
		__call($method_name, $this->params);

	}
	
}
?>