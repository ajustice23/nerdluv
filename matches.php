<?php
	include("top.html");
?>
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
<?php
	include("bottom.html");
?>