<?
App::import('Core', array('Xml', 'HttpSocket'));

class RestSource extends DataSource {


	var $method_name_type = 'param';

	var $base_url = 'http://www.goodreads.com/';

	var $secret = 'LvhYnbcGwKkyigg1iy1C6BUagH8oBP0WGuyTiaO8j4';

	var $default_args = array();

	var $cache_dir = 'rest';

	var $cache_used = false;

	// 3600 = 1 hour
	// 86400 = 1 day
	// 604800 = 1 week

	var $Http;

	var $default_cache_time = 0;

	var $cache_times = array();

	function __construct($config) {
		parent::__construct($config);
		$this->log('Constructing RestSource');
		$this->Http = new HttpSocket();

		$this->default_cache_time = $config['default_cache_time'];
		$this->cache_dir = $config['cache_dir'];

	}

	function rest_read($method_name, $passed_args = array()) {
		//http://www.authenticjobs.com/api/?api_key=cbbca43fdd66d1b25adb5d659ca39d36&format=php&method=aj.jobs.search&type=2&category=2&location=anywhere

		$url = $this->base_url.$method_name;

		$args = array_merge($this->default_args, $passed_args);
//		$args['method'] = $method_name;

		foreach($args as $k=>$v) {
			if (empty($v)) {
				unset($args[$k]);
			}
		}

		$request_url = $url.'?'.http_build_query($args);

		$cache_time = isset($this->cache_times[$method_name]) ? $this->cache_times[$method_name] : $this->default_cache_time;

		return $this->request_url($request_url, $cache_time);
	}

	function request_url($request_url, $cache_time = null) {

		$this->log('Request URL:'.$request_url);

		$fresh = true;

		$cache_key = md5($request_url);
		$cache_file = CACHE."{$this->cache_dir}/$cache_key.ser";
		if (file_exists($cache_file)) {
			$age = time() - filemtime($cache_file);
			$length = is_null($cache_time) ? $this->default_cache_time : $cache_time;//isset($this->cache_times[$method_name]) ? $this->cache_times[$method_name] : ;
			if ($age < $length) {
				$data = file_get_contents($cache_file);
				$this->log("Reading cache file (age=$age): $cache_file");
				$fresh = false;
			} else {
				$data = $this->Http->get($request_url);
			}

		} else {
			$data = $this->Http->get($request_url);
		}

		//echo $data;

		if ($fresh) {
			$this->log('Writing cache file: '.$cache_file);
			file_put_contents($cache_file, $data);
		}

		$this->cache_used = !$fresh;

		return $this->__process($data);
	}


	function __process($response) {

		App::import('Core', array('Xml'));

		$xml = new XML($response);
		$array = $xml->toArray();

		$xml->__killParent();
		$xml->__destruct();
		$xml = null;
		unset($xml);

		return $array;
	}

	function query() {

	}

}
?>