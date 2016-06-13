<?php

session_start();

if(!isset($_SESSION['logged']))
{
	header("Location: index.php");
}
?>

<html>
<head>

<?php include 'views/head.php' ?>

</head>
<body>

<?php include 'views/usernav.php' ?>


	<div class="section">
		<div class="panel">
			<div class="panel-heading">
				Koszyk
			</div>
			<div class="panel-body">
			<?php
			if(isset($_SESSION['completed']))
			{
				echo "<b>Zamówienie zarejestrowane</b>";
				unset($_SESSION['cartProducts']);
				unset($_SESSION['orderprice']);
				unset($_SESSION['completed']);
				unset($_SESSION['cart']);
			}
	
			if(!isset($_SESSION['cartProducts']))
			{
				echo "<center><b>Pusty</b></center>";
			}
			else
			{
				showCart();
			}
			?>
			<form method="GET" action="controller/order.php">
				<input type="submit" name="order" value="Zamówienie"/>
			</form>
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

<?php

function showCart()
{			
	echo "<table>
			<tr>
			<th>Nazwa</th>
			<th>Cena jedn.</th>
			<th>Cena</th>
			<th>Ilosc</th>
			</tr>";
			
	$tab = array();
	foreach($_SESSION['cartProducts'] as $cartproduct)
	{
		echo "<tr>";
		foreach($cartproduct as $product)
		{
			echo "<td>$product</td>";
			if($product == $cartproduct[2])
			{
				echo "<script>console.log('".$product."')</script>";
				array_push($tab, $product);
			}
		}
		echo "</tr>";
	}
	echo "</table>";
	echo "<center><b>Razem zapłacisz: ".array_sum($tab)."</b></center>";
	echo "<script>console.log('".array_sum($tab)."')</script>";
	$_SESSION['orderprice'] = array_sum($tab);
}

?>
</body>
</html>
