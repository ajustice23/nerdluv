<?php
	include("top.html");
?>
<p class="intro"><em>Welcome!</em>
</p>
<form method="POST" action="matches-submit.php">
	<fieldset>
		<legend>Log In</legend>
			<label for="yourEmailLogin">Username / Email:</label>
			<input type="email" name="yourEmailLogin" required="required" placeholder="janedoe1@gmail.com"/>
			<label for="yourPassLogin">Password: </label>
			<input type="password" required="required" name="yourPassLogin"/>
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
