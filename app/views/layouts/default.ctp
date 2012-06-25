<?php
/* SVN FILE: $Id: default.ctp 7945 2008-12-19 02:16:01Z gwoo $ */
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) :  Rapid Development Framework (http://www.cakephp.org)
 * Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 * @link          http://www.cakefoundation.org/projects/info/cakephp CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.console.libs.templates.skel.views.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @version       $Revision: 7945 $
 * @modifiedby    $LastChangedBy: gwoo $
 * @lastmodified  $Date: 2008-12-19 02:16:01 +0000 (Fri, 19 Dec 2008) $
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $html->charset(); ?>
	<title>
		<?php echo empty($title_for_layout) ? '' : $title_for_layout.' | '; ?> Metallify
	</title>
	<?php

		echo $html->meta('icon','/favicon.gif', array('type' =>'icon'));

		echo $html->css('blueprint/src/reset');
		echo $html->css('blueprint/src/grid');
		echo $html->css('blueprint/src/forms');
		echo $html->css('blueprint/src/typography');
		echo $html->css('blueprint/src/ie');

		echo $html->css('ebotunes');
		echo $html->css('metallify');

		echo $scripts_for_layout;
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1><?php 
			/*echo $html->link(
				$html->image('header.jpeg', array('alt'=>'Metallify')),
				Router::url('/'),
				array(),
				array(),
				false); 
				*/
				?></h1>
		</div>
		<div id="content">

			<?php $session->flash(); ?>

			<?php echo $content_for_layout; ?>

		</div>
		<div id="footer">
			an
			<?php echo $html->link(
					'ebotunes',
					'http://www.ebotunes.com/',
					array('target'=>'_blank'), null, false
				);
			?> production, starring 
			<a href="http://imagemagick.org">Image Magick</a> and <a href="http://www.1001fonts.com/font_details.html?font_id=1337">Pastor of Muppets</a>
		</div>
	</div>
	<?php echo $cakeDebug; ?>
	<?php
	if (Configure::read('google.analytics')) {
		echo $this->renderElement('google/analytics', array('analytics_id' => Configure::read('google.analytics_id')));
	}
	?>
</body>
</html>