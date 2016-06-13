<ul class= "nav">
	<li><a href="index.php">Główna</a></li>
	<li><a href="about.php">O nas</a></li>
	<li><a href="products.php">Produkty</a></li>
	<li><a href="contact.php">Kontakt</a></li>
	<li><a href="cartview.php">Koszyk</a></li>
	<li style="float:right" class="dropdown">
		<a id="userOptions" href="" class="dropbtn"><?php echo $_SESSION['username'] ?></a>
		<div class="dropdown-content">
		<a id="logout" href="./controller/logout.php">Wyloguj</a>
		</div>
	</li>
</ul>