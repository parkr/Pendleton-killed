<?php 
	echo $this->Html->image("pendleton-logo-240px.png", array('id' => 'logo', 'alt' => 'Pendleton Logo')); 
	echo $this->Html->tag("a", 
		__("Enter"), 
		array(
			"id" => "enter_link", 
			"href" => $this->Html->url(
				array("controller" => "pages", "action" => "display", "home")
			)
		)
	);
?>