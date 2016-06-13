<div id="modalSignIn" class="modal">
		<div class="modal-panel">
				<div class="modal-heading">
				Logowanie
				<a id="closeSignInModal" href="">Zamknij</a>
				</div>
				<div class="modal-body">
				<form method="post" action="./controller/auth.php">
					<label for="email">Email</label>
					<input type="text" id="email" name="email">

					<label for="password">Has³o</label>
					<input type="password" id="password" name="password">
				  
					<input type="submit" name="submitSignIn" value="Submit">
				</form>
				</div>
		</div>
	</div>
	
	<div id="modalSignUp" class="modal">
		<div class="modal-panel">
				<div class="modal-heading">
				Rejestracja
				<a id="closeSignUpModal" href="">Zamknij</a>
				</div>
				<div class="modal-body">
				<form method="post" action="./controller/auth.php">
					<label for="username">Nazwa u¿ytkownika</label>
					<input type="text" id="username" name="username">

					<label for="email">Email</label>
					<input type="text" id="email" name="email">

					<label for="password">Has³o</label>
					<input type="password" id="password" name="password">
				  
					<input type="submit" name="submitSignUp" value="Submit">
				</form>
				</div>
		</div>
	</div>
	<script src="views/script.js"></script>