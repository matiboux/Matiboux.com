<!DOCTYPE html>
<html>
<head>

<?php include THEMEPATH . 'head.php'; ?>
<title><?php echo $_Oli->getOption('name'); ?></title>

</head>
<body>

<div class="main">
	<div class="container">
		<h1><?php echo $_Oli->getOption('name'); ?></h1>
		<p>
			<?php echo $_Oli->getOption('description'); ?>
		</p>
	</div>
</div>

<div class="footer">
	<?php include THEMEPATH . 'footer.php'; ?>
</div>

<?php $_Oli->loadEndHtmlFiles(); ?>

<script>
function changeBackground() {
	if($('body').hasClass('primary')) {
		$('body').removeClass().addClass('danger').css({
			background: '#d9534f'
		});
	}
	else {
		$('body').removeClass().addClass('primary').css({
			background: '#337ab7'
		});
	}
	
	setTimeout(changeBackground, 1000);
}

$(document).ready(function() {
	changeBackground();
});
</script>

<!-- Script executed with Oli PHP Framework in <?php echo $_Oli->getExecuteDelay() * 1000; ?> ms -->
<!-- Request executed with Oli PHP Framework in <?php echo $_Oli->getExecuteDelay(true) * 1000; ?> ms -->

</body>
</html>