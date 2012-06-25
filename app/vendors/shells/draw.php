<?php
class DrawShell extends Shell {

	function main() {

		$dot = $this->dot(100);

		define('IMG_DIR', TMP.'/draw/');
		if (!file_exists(IMG_DIR)) {
			mkdir(IMG_DIR);
		}

		imagepng($dot, IMG_DIR.'image.png');
		imagedestroy($dot);

	}

	function dot($radius) {
		$size = $radius*2;

		$dot = imagecreate($size, $size);
		$background_color = imagecolorallocatealpha($dot, 0, 127, 0, 64);
		$text_color = imagecolorallocate($dot, 255, 255, 255);
		imagefilledellipse($dot, $size/2, $size/2, $radius, $radius, $text_color);

		return $dot;
	}

}
?>