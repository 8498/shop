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
				Produkty
				</div>
				<div class="panel-body">
					<table>
						<?php include 'controller/getproducts.php'?>
					</table>
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