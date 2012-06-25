<?php
class MetalController extends AppController {
	
	var $components = array('Metal');
	var $uses = array();
	var $helpers = array('Bookmarks');
	
	function home() {
		
	}
	
	function generate() {
		if (!empty($this->data)) {
			$text = $this->data['Metal']['text'];
			$text = $this->Metal->generate($text);
			$img_url = '/images/'.$text.'.jpg';
			$this->set('img_url', $img_url);
			
			// add to the session's 'recently generated'
			
		}
	}
	
}
?>