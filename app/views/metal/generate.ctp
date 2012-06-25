<div class="generate form"><?php

	echo $form->create('Metal', array('url' => array('action'=>'generate')));
		echo $form->text('text');
	echo $form->end('Rock >>');
	
	
	if (isset($img_url)) {
		echo $html->image($img_url);
		
		echo $html->image('facebook-medium.jpeg');
		echo $html->image('twitter-medium.jpeg');
		
	}
	
	?></div>