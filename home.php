<?php

session_start();
if(!isset($_SESSION['logged']))
{
	header("Location: index.php");
}	

?>
<html>
<head>
	<?php include 'views/head.php'?>
</head>

<body>
	<?php include 'views/usernav.php' ?>
	<div class="section">
			<div class="panel">
				<div class="panel-heading">
				Witaj
				</div>
				<div class="panel-body">
				Witaj <b><?php echo $_SESSION['username'] ?></b>
				</div>
			</div>
	</div>
	<?php 
		if(!isset($_SESSION['logged']))
		{
			include 'views/modals.php';  
		}
	?>
	<?php include 'views/footer.php'?>
</body>

</html>