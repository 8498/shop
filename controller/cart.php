<?php

session_start();

if(isset($_POST['addToCart']))
{
	$productID = $_POST['productID'];
	$productCount = $_POST['productCount'];

	require 'connect.php';

	if($res = $mysqli->query("SELECT id, name, price FROM products WHERE id = $productID"))
	{
		echo "<script>console.log('ok')</script>";
	}
	else
	{
		echo "<script>console.log('".$mysqli->error."')</script>";
		echo "<script>console.log('bad')</script>";
	}

	if($row = $res->fetch_assoc())
	{	
		$_SESSION['cart'] = true;
		$products = array($row['name'], $row['price'], $row['price']*$productCount, $productCount, $row['id']);
		
		if(isset($_SESSION['cartProducts']))
		{
			array_push($_SESSION['cartProducts'],$products );
		}
		else
		{
			$_SESSION['cartProducts'] = array($products);
		}
		$mysqli->close();
		header("Location: ../products.php");
	}
	
	
}



?>