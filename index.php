<?php
	include("top.html");
?>
<header>
	<h1>Welcome!</h1>
</header>

<form method="POST" action="matches-submit.php">
	<fieldset>
		<legend>Log In</legend>
			<label for="yourEmailLogin">Email:</label>
			<input type="email" id="yourEmailLogin" name="yourEmailLogin" required="required" placeholder="janedoe1@gmail.com"/>
			<label for="yourPassLogin">Password: </label>
			<input type="password" required="required" name="yourPassLogin" id="yourPassLogin"/>
	</fieldset>
	<input class="submit" type="submit" value="Log In"/>
</form>

<article>
	<p>New to NerdLuv?</p>
	<p><a href="signup.php">Sign up</a> for a new account.</p>
</article>

<?php
	include("bottom.html");
?>