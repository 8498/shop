<?php 
session_start()
?>

<html>

<head>

	<?php include 'views/head.php' ?>

</head>

<body>
	
	<?php 
		if(isset($_SESSION['logged']))
		{
			include 'views/usernav.php';  
		}
		else
		{
			include 'views/guestnav.php';
		}
	?>
	<div class="section">
			<div class="panel">
				<div class="panel-heading">
				Kontakt
				</div>
				<div class="panel-body-center">
				<p><i class="demo-icon icon-mail-alt"></i> przemyslaw.lapinski.8498@gmail.com</p>
				</div>
			</div>
	</div>
	<?php 
		if(!isset($_SESSION['logged']))
		{
			include 'views/modals.php';  
		}
	?>
	<?php include 'views/footer.php' ?>
</body>

</html>