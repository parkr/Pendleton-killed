<?php

$images = $this->Html->image("evolution/evolution1.jpg", array("class" => "grid_4 alpha")) . 
			$this->Html->image("evolution/evolution2.jpg", array("class" => "grid_4")) . 
			$this->Html->image("evolution/evolution3.jpg", array("class" => "grid_4 omega"));
echo $this->Html->tag("div", $images, array("class" => "grid_12 images_group"));

$bodyText = "Organic fixie keffiyeh gastropub keytar, ethical +1 blog messenger bag biodiesel. Four loko gluten-free cray truffaut, kogi twee before they sold out vegan pickled master cleanse lomo trust fund irony. Vice freegan hoodie, typewriter messenger bag skateboard truffaut carles portland hella high life artisan pour-over wes anderson selvage. Lo-fi fingerstache occupy, typewriter shoreditch mcsweeney's cray pork belly trust fund post-ironic cred blog retro before they sold out. Marfa locavore thundercats direct trade, vinyl sustainable pour-over. Umami truffaut seitan master cleanse. Farm-to-table before they sold out food truck, bushwick thundercats DIY next level trust fund.

Forage thundercats mustache shoreditch leggings, raw denim locavore biodiesel bicycle rights put a bird on it mixtape artisan lomo terry richardson. Seitan typewriter pork belly keytar 8-bit keffiyeh. Lomo dreamcatcher vegan four loko. Austin american apparel kale chips organic letterpress trust fund vinyl, pinterest butcher direct trade brooklyn locavore typewriter. Ennui beard pork belly authentic narwhal messenger bag. Vice small batch semiotics, pour-over photo booth locavore yr mlkshk VHS beard twee fingerstache. Etsy cliche chambray freegan dreamcatcher, keffiyeh direct trade sriracha typewriter organic butcher iphone chillwave.

Chillwave synth brooklyn, trust fund +1 pour-over keytar. Retro raw denim mlkshk dreamcatcher. Banh mi fanny pack cray, craft beer iphone master cleanse kogi mcsweeney's jean shorts. Lomo ethnic hella pop-up Austin, banksy before they sold out leggings food truck american apparel high life. Banh mi organic four loko viral brunch. Vice chambray brooklyn wes anderson, organic trust fund mixtape ennui seitan quinoa truffaut wolf bushwick. Jean shorts bushwick single-origin coffee butcher, keffiyeh tattooed put a bird on it godard brunch scenester mumblecore lomo tofu small batch.

Master cleanse godard swag flexitarian leggings butcher, stumptown brooklyn. Jean shorts ethnic pitchfork, art party aesthetic 3 wolf moon truffaut marfa pickled you probably haven't heard of them carles small batch. Viral swag flexitarian, locavore whatever hella before they sold out keffiyeh bicycle rights. Skateboard etsy DIY, mlkshk carles chambray banksy retro twee echo park portland cliche master cleanse. Street art carles blog, typewriter biodiesel mumblecore seitan portland synth PBR. Pour-over bicycle rights four loko kale chips dreamcatcher. Art party fap mlkshk +1, lo-fi jean shorts wes anderson lomo seitan.";

echo $this->Html->tag("div", nl2br($bodyText), array("class" => "grid_12"))
	
?>