 <section id="showcase">
	<div class="container">
		<div id="center">
			<div id="login-box">
				<h1 id="username-password-inlog-text">
						Register an account
				</h1>
				<?php if (!isset($_SESSION["isLoggedIn"])) {  
					if ($error == true) {
						echo "<strong id='gay-error'>{$message}!</strong>";
					} ?>
					<form method="POST">
						<input type="hidden" name="reg_skickat">
						<label id="username-password-inlog-text">Username</label><br>
						<input id="username-password-input" type="text" name="username"><br>
						<label id="username-password-inlog-text">Password</label><br>
						<input id="username-password-input" type="password" name="password"><br>
						<label id="username-password-inlog-text">Comfirm password</label><br>
						<input id="username-password-input" type="password" name="confirm_password"><br>
						<input class="button" id="logg-in-ut" type="submit" name="register" value="Registrera"><br>
					</form>
				<?php } else { ?>
					<h2 id='gay-error'>Hello, <?=$_SESSION["username"]?>! You should not be here...</h2>
					<br>
					<a href="?page=regpage">Register an account</a>
				<?php } ?>
			</div>
		</div>
	</div>
 </section>
