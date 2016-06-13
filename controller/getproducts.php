<?php 

	require 'connect.php';
	
	if(!($res = $mysqli->query("SELECT id, name, price FROM products")))
	{
		 echo "Query failed: (" . $mysqli->errno . ") " . $mysqli->error;
	}
	
	$name = null;
	$price = null;
	
	if(isset($_SESSION['logged']))
	{
		printf("<tr>
				<th>Name</th>
				<th>Price</th>
				<th></th>
				<th></th>
			</tr>");
	}
	else
	{
		printf("<tr>
				<th>Name</th>
				<th>Price</th>
			</tr>");
	}
	
	while($row = $res->fetch_assoc())
	{
		if(isset($_SESSION['logged']))
		{
			printf("<tr><td>%s</td> <td>%s</td> 
			<td>
				<form method='post' action='controller/cart.php'>
				<input name='productID' type='hidden' value='%s'/>
				<input name='productCount' type='number' value='1'/>
			</td>
			<td>
				<input id='addToCart' type='submit' name='addToCart' value='Dodaj do koszyka'/>
				</form>
			</td></tr>"
			, $row['name'], $row['price'], $row['id']);
		}
		else
		{
			printf("<tr><td>%s</td> <td>%s</td> </tr>", $row['name'], $row['price']);
		}
	}
	
	if(isset($_SESSION['logged']))
	{
		if($_SESSION['username'] === 'admin')
		{
			echo "<input type='submit' value='Dodaj'/>";
		}
	}
	$mysqli->close();
?>