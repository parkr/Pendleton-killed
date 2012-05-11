<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		<?php echo $title_for_layout . " &raquo; Pendleton"; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('pendleton');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<div id="logo"></div>
			<nav>
				<?php echo $this->Html->link("Home", array('/')); ?>
				<a href="<?php echo $this->Html->url(array('controller' => 'collections', 'action' => 'index')); ?>">Collections
					<ul>
						<li></li>
					</ul>
				</a>
				<?php
				echo $this->Html->link("Evolutions", array('controller' => 'pages', 'action' => 'display', 'evolutions'));
				echo $this->Html->link("Press", array('controller' => 'pages', 'action' => 'display', 'press'));
				echo $this->Html->link("Contact", array('controller' => 'pages', 'action' => 'display', 'contact'));
				?>
			</nav>
		</div>
		<div id="content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
	</div>
</body>
</html>
