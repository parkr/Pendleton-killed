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
				<?php echo $this->Html->link("Home", array('controller' => 'pages', 'action' => 'display', 'home')); ?>
				<a href="<?php echo $this->Html->url(array('controller' => 'collections', 'action' => 'index')); ?>">Collections
					<ul>
						<li></li>
					</ul>
				</a>
				<?php
				echo $this->Html->link("Evolution", array('controller' => 'pages', 'action' => 'display', 'evolution'));
				echo $this->Html->link("Press", array('controller' => 'pages', 'action' => 'display', 'press'));
				echo $this->Html->link("Contact", array('controller' => 'pages', 'action' => 'display', 'contact'));
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
