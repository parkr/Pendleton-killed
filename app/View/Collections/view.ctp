<?php
$s = 1;
foreach($collection['Item'] as $item){
	$ao = '';
	if($s%3==1){
		$ao = 'alpha';
	}else{
		if($s%3==0){
			$ao = 'omega';
		}
	}
	echo $this->Html->tag('div',
		$this->Html->tag('div', $this->Html->image('thumb/'.basename($item['Photo'][0]['src'])), array('class' => 'image')) .
		$this->Html->tag('a', 
			$this->Html->tag('div', $item['name'], array('class' => 'title')),
			array(
				'href' => $this->Html->url(array('controller' => 'items', 'action' => 'view', $item['id'])),
				'class' => 'link_to_item',
				'title' => $item['name']
			)
		),
		array(
			'id' => 'item_'.$item['id'],
			'class' => "item threebythree $ao"
		)
	);
	$s++;
}

?>
