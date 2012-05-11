<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php $title_for_layout; ?></title>
	<?php
	echo $this->fetch('css');
	echo $this->Html->css("pendleton_welcome");
	?>
</head>
<body>
	<?php echo $this->fetch('content'); ?>
</body>
</html>
