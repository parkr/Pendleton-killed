$(function(){
	$(".threebythree .link_to_item").live('mouseover', function(){$(this).stop().animate({opacity: 0});});
	$(".threebythree .link_to_item").live('mouseout', function(){$(this).stop().animate({opacity: 0.999});});	
});