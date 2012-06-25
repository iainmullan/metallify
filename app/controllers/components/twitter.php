<?php
class TwitterComponent extends Object {
	
	var $name = 'Twitter';
	
	var $auth = false;

	function login($username, $password) {
		// check the creds, set $this->auth to true of OK
	}

	function pic_postAndUpload($message, $imagePath) {
		if (!$this->auth) {
			return false;
		}
	}
	
}
?>