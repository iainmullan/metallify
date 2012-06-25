<?php
class ShareController extends AppController {

	var $uses = array('Badge');
	var $components = array('Twitter');

	function index() {
		
	}

	function twitpic() {

		if (!empty($this->data)) {
			// get the twitter username and password
			$this->Twitter->login($this->data['username'], $this->data['password']);
			
			$badge = $this->Badge->findById($this->data['badge_id']);

			// use twitpic component to send it
			$this->Twitter->pic_postAndUpload($this->data['message'], $this->Metal->getBadgePath($badge));
		}

	}

	function facebook() {
		
	}
	
	function flickr() {
		
		// check if authed
		
			// display photo, with title, description, tags, privacy fields
		
		// 
		
	}
	
	function flickrauth() {
		// get frob etc.
		
		// redirect to flickr action
	}
	
}
?>