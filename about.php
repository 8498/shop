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
				O nas
				</div>
				<div class="panel-body">
				Sklep internetowy - projekt na zaliczenie laboratoriów : <br>
				<b>Programowanie aplikacji internetowych</b>
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