<?php $s=1; ?>
<?php 

foreach($articles as $story){
	$ao = '';
	if($s%3==1){
		$ao = 'alpha';
	}else{
		if($s%3==0){
			$ao = 'omega';
		}
	}
	echo $this->Html->tag('div',
		$this->Html->tag('div', $this->Html->image($story['Photo']['src']), array('class' => 'image')) .
		$this->Html->tag('a', 
			$this->Html->tag('div', $story['News']['title'] .' by '. $story['News']['source'], array('class' => 'title')),
			array(
				'href' => $story['News']['url'],
				'class' => 'link_to_item',
				'target' => '_blank',
				'title' => $story['News']['title'] .' by '. $story['News']['source']
			)
		),
		array(
			'id' => 'news_'.$story['News']['id'],
			'class' => "news threebythree $ao"
		)
	);
	$s++;
}

?>