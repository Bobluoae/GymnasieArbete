 <section id="showcase">
	<div class="container">
		<div id="center">
			<div id="login-box">
				<h1 id="username-password-inlog-text">
						Sign in
				</h1>
				<?php if (!isset($_SESSION["isLoggedIn"])) {  
					if ($error == true) {
						echo '<strong style = "color: red">This account does not exist! Try again...</strong>';
					} ?>
					<form method="POST">
						<input type="hidden" name="inlogg_skickat">
						<label id="username-password-inlog-text">Username</label><br>
						<input id="username-password-input" type="text" name="username"><br>
						<label id="username-password-inlog-text">Password</label><br>
						<input id="username-password-input" type="password" name="password"><br>
						<input id="logg-in-ut" type="submit" name="logga_in" value="Logga in"><br>
					</form>
					<br>
					<a id="register-link" href="?page=regpage">Register an account</a>
				<?php } else { ?>
					<h2 id="username-password-inlog-text">Hello, <?=$_SESSION["username"]?>!</h2>
					<form method="POST">
						<input type="hidden" name="utlogg_skickat">
						<input id="logg-in-ut" type="submit" name="logga_ut" value="Logga ut">
					</form>

				<?php } ?>
			</div>
		</div>
	</div>
 </section>
