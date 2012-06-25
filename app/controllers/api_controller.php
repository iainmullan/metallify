<?
class ApiController extends ApiAppController {

	function badge_generate() {
		$badge = $this->Metal->generate($this->params['text']);
		$this->set('badge', $badge);
	}

}
?>