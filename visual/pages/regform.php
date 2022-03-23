 <section id="showcase">
	<div class="container">
		<div id="center">
			<div id="box">
				<h1>
						Registrera Konto
				</h1>
				<?php if (!isset($_SESSION["isLoggedIn"])) {  
					if ($error == true) {
						echo "<strong style = 'color: red'>{$message}!</strong>";
					} ?>
					<form method="POST">
						<input type="hidden" name="reg_skickat">
						<label>Användarnamn</label><br>
						<input type="text" name="username"><br>
						<label>Lösenord</label><br>
						<input type="password" name="password"><br>
						<input type="submit" name="register" value="Registrera"><br>
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
