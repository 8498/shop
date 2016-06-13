<?php

session_start();
if(isset($_SESSION['logged']))
{
	if(!isset($_SESSION['cartProducts']))
	{
		echo "koszyk pusty";
	}
	else
	{
		showCart();
	}
}
else
{
	header("Location: ../index.php");
}

function showCart()
{
	print_r($_SESSION['cartProducts']);
}


?>