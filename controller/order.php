<?php

session_start();

if(!isset($_SESSION['logged']) && !isset($_SESSION['cart']))
{
	header("Location: index.php");
}

echo "<script>console.log('1')</script>";

if(isset($_GET['order']))
{	
	require 'connect.php';
	
	$orderdate = date("Y-m-d H:i:s");
	echo "<script>console.log('2')</script>";
	if(!($mysqli->query("INSERT INTO orders (user_id,orderdate,price) VALUES ('".$_SESSION['userid']."','".$orderdate."','".$_SESSION['orderprice']."');"))
	{
		echo "Query failed: (" . $mysqli->errno . ") " . $mysqli->error;
	}
	
	if(!($res = $mysqli->query("SELECT LAST_INSERT_ID() as a")))
	{
		echo "Query failed: (" . $mysqli->errno . ") " . $mysqli->error;
	}
	
	$row = $res->fetch_assoc();
	
	foreach($_SESSION['cartProducts'] as $cartproduct)
	{
		foreach($cartproduct as $product)
		{
			echo "<script>console.log('3')</script>";
			if($product == $cartproduct[4])
			{
				echo "<script>console.log('".$product."')</script>";
				if(!($mysqli->query("INSERT INTO orders_products (order_id, product_id) VALUES ('".$row['a']."','".$product."');")))
				{
					echo "Query failed: (" . $mysqli->errno . ") " . $mysqli->error;
				}
			}
		}
	}
	echo "<script>console.log('4')</script>";
	$mysqli->close();
	$_SESSION['completed'] = true;
	header("Location: ../cartview.php");
	
}

?>