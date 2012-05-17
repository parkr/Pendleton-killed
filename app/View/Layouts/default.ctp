<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		<?php echo $title_for_layout . " &raquo; Pendleton"; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		
		echo $this->Html->css('grid');
		echo $this->Html->css('pendleton');
		
		echo $this->Html->script('jquery-1.7.2.min');
	?>
	<script type="text/javascript" charset="utf-8">
		$(function(){
			$.ajax({
				"url": "<?php echo $this->Html->url(array('controller' => 'collections', 'action' => 'listAll')); ?>",
				"dataType": "json",
				"success": function(data, textStatus, jqXHR){
					console && console.log && console.log(data);
					// Parse through list of collections and build <ul> that contains links to them all
					var $collections_a = $("#collections_a"), ul = document.createElement('ul'), li, a;
					for(var i=0; i<data.length; i++){
						a = document.createElement('a');
						a.href = data[i]["Collection"]["url"];
						a.textContent = data[i]["Collection"]["year"];
						
						li = document.createElement('li');
						li.appendChild(a);
						
						ul.appendChild(li);
					}
					$collections_a.append(ul);
				},
				"error": function(jqXHR, textStatus, errorThrown){
					console && console.warn && console.warn(jqXHR);
				}
			});
		});
	</script>
	<?php
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container" class="container_12">
		<div id="header">
			<div id="logo"></div>
			<nav>
				<?php 
				echo $this->Html->link("Home", array('controller' => 'pages', 'action' => 'display', 'home'), array('id' => 'home_a'));
				echo '<div id="collections_a">';
				echo $this->Html->link("Collections", array('controller' => 'collections', 'action' => 'index'));
				echo '</div><!--/#collections_a-->';
				echo $this->Html->link("Evolution", array('controller' => 'pages', 'action' => 'display', 'evolution'), array('id' => 'evolution_a'));
				echo $this->Html->link("Press", array('controller' => 'news', 'action' => 'index'), array('id' => 'press_a'));
				echo $this->Html->link("Contact", array('controller' => 'pages', 'action' => 'display', 'contact'), array('id' => 'contact_a'));
				?>
			</nav>
		</div>
		<div id="content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			&copy; 2012 Pendleton Scholarship Collection. Website designed by Becky Dugal, coded by <?php echo $this->Html->link("Parker Moore", "http://www.parkermoore.de/", array("target" => "_blank")); ?>.
		</div>
	</div>
</body>
</html>
