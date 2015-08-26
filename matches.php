<?php
	include("top.html");
?>
  <p class="intro"><em>Ready To See Your Matches?</em>
  </p>
<form method="POST" action="matches-submit.php">
	<fieldset>
		<legend>Log In</legend>
			<label for="yourEmailLogin">Username / Email:</label>
			<input type="email" id="yourEmailLogin" name="yourEmailLogin" required="required" placeholder="@domain.com"/>
			<label for="yourPassLogin">Password: </label>
			<input type="password" required="required" name="yourPassLogin" id="yourPassLogin"/>
	</fieldset>
	<input class="submit" type="submit" value="Log In"/>
</form>
<?php
	include("bottom.html");
?>
