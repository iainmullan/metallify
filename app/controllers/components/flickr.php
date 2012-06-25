<?php
/**
 * Flickr Component
 * @author RosSoft
 * @license MIT
 * @version 0.1
 */
define('FLICKR_CACHE_DIR',CACHE . 'flickr');

class FlickrComponent extends Object
{

    function startup(&$controller) {

   		App::import('Vendor', 'PhpFlickr', array('file' => 'phpFlickr'.DS.'phpFlickr.php'));

		$api_key = Configure::read('flickr.api_key');
		$secret = Configure::read('flickr.secret');

        //FlickrComponent instance of controller is replaced by a phpFlickr instance
        $controller->flickr =& new phpFlickr($api_key, $secret);

		if (Configure::read('flickr.cache')) {
			if (!is_dir(FLICKR_CACHE_DIR)) {
	            mkdir(FLICKR_CACHE_DIR,0777);
	        }
			$controller->flickr->enableCache('fs', FLICKR_CACHE_DIR);
		}

		$controller->set('flickr',$controller->flickr);
    }

}
?>