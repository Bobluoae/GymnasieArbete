 <section id="showcase">
	<div class="container">
		<div id="center">
			<div id="box">
				<h1>
						INLOGG
				</h1>
				<?php if (!isset($_SESSION["isLoggedIn"])) {  
					if ($error == true) {
						echo '<strong style = "color: red">Fel inloggning!</strong>';
					} ?>
					<form method="POST">
						<input type="hidden" name="inlogg_skickat">
						<label>Användarnamn</label><br>
						<input type="text" name="username"><br>
						<label>Lösenord</label><br>
						<input type="password" name="password"><br>
						<input type="submit" name="logga_in" value="Logga in"><br>
					</form>
				<?php } else { ?>
					<h2>Hej, <?=$_SESSION["username"]?>!</h2>
					<form method="POST">
						<input type="hidden" name="utlogg_skickat">
						<input type="submit" name="logga_ut" value="Logga ut">
					</form>
				<?php } ?>
			</div>
		</div>
	</div>
 </section>
