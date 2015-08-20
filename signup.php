<?php
	include("top.html");
?>
<header>
	<h1>Sign up</h1>
</header>
<form method="POST" action = "signup-submit.php">
	<fieldset>
		<legend>Email and Password</legend>
			<label for=yourEmail>Email:</label>
			<input type="email" name="yourEmail" id="yourEmail" placeholder="janedoe1@gmail.com" required = "required"/>
			<label for="yourPass1">Create Password:</label>
			<input type="text" name="yourPass1" id="yourPass1" required="required"/>
			<label for="yourPass2">Re-enter Password:</label>
			<input type="text" name="yourPass2" id="yourPass2" required="required"/>
	</fieldset>
	<fieldset>
		<legend>Personal Information</legend>
			<label for="yourName">Name:</label>
			<input type="text" name="yourName" id="yourName" required = "required" maxlength="30"/>

			<div id="gender">
				<label for="yourGender">Gender:</label>
				<input type="radio" name="yourGender" id="yourGender" value="male" /> Male
				<input type="radio" name="yourGender" id="yourGender" value="female" checked="checked"/> Female
			</div>

			</div id="seeking"?
				<label>Seeking:<label/>
				<input type="checkbox" name="male" />Male
				<input type="checkbox" name="female"/>Female
			</div>

			<label for="yourAge">Age:</label>
			<input type="text" name="yourAge" id="yourAge" size="6" pattern="[0-9]{1,2}" maxlength="2" required="required"/> (0-99)
			
			<label for="yourPers">Personality Type:</label>
			<input type = "text" name="yourPers" id="yourPers" required="required" placeholder="eg. ESFJ" pattern="[eiEI][snSn][tfTF][jpJP]" maxlength="4" size = "8"> 
			<a href="http://www.humanmetrics.com/cgi-win/jtypes2.asp">(Don't know your personality type?)</a>

			<div>
				<label for="yourOS">Favorite OS:</label>
				<select name="yourOS">
					<option>Windows</option>
					<option>Mac OS X</option>
					<option>Linux</option>
				</select>
			<div>

			<label>Seeking Age:</label>
			<input type="text" name="minAge" id="minAge" required="required" maxlength="2" size="6" pattern="[0-9]{1-2}" placeholder="min"/> to 
			<input type="text" name="maxAge" id="minAge" required="required" maxlength="2" size="6" pattern="[0-9]{1-2}" placeholder="max"/>
	</fieldset>
	<input class="submit" type="submit" value="Sign Up"/>
</form>
<?php
	include("bottom.html");
?>