 <section id="showcase">
	<div class="container">
		<div id="center">
			<div id="login-box">
				<h1 id="username-password-register-inlog-text">
						Registrera Konto
				</h1>
				<?php if (!isset($_SESSION["isLoggedIn"])) {  
					if ($error == true) {
						echo "<strong style = 'color: red'>{$message}!</strong>";
					} ?>
					<form method="POST">
						<input type="hidden" name="reg_skickat">
						<label id="username-password-register-inlog-text">Användarnamn</label><br>
						<input id="username-password-input" type="text" name="username"><br>
						<label id="username-password-register-inlog-text">Lösenord</label><br>
						<input id="username-password-input" type="password" name="password"><br>
						<input id="logg-in-ut" type="submit" name="register" value="Registrera"><br>
					</form>
				<?php } else { ?>
					<h2>Hej, <?=$_SESSION["username"]?>! Du borde inte vara här</h2>
					<br>
					<a href="?page=regpage">Registrera ett konto</a>
				<?php } ?>
			</div>
		</div>
	</div>
 </section>
