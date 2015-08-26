<?php
	include("top.html");
	//include CSS Style Sheet
	echo "<link rel='stylesheet' type='text/css' href='alpha.css' />";
?>
</ul>
<form method="POST" action = "signup-submit.php">
	<fieldset>
		<legend>Join The Community</legend>
		   <p>	
			<label for="yourEmail">Username / Email:</label>
			<input type="email" name="yourEmail" id="yourEmail" placeholder="@domain.com" required = "required"/>
		   </p>
		   <p>
			<label for="yourPass1">Create Password:</label>
			<input type="password" name="yourPass1" id="yourPass1" required="required"/>
		   </p>
		   <p>
			<label for="yourPass2">Verify Password:</label>
			<input type="password" name="yourPass2" id="yourPass2" required="required"/>
	       </p>
	</fieldset>
	<fieldset>
		<legend>Your Personal Information</legend>
		   <p>
			<label for="yourName">Name:</label>
			<input type="text" name="yourName" id="yourName" placeholder="First Last" required = "required" maxlength="30"/>
           </p>
		   <p>
			<div id="gender">
				<label for="yourGender">Gender:</label>
				<input type="radio" name="yourGender" id="yourGender" value="M" /> Male
				<input type="radio" name="yourGender" id="yourGender" value="F" checked="checked"/> Female
			</div>
           </p>
           <p>
			<label for="yourAge">Age:</label>
			<input type="number" name="yourAge" id="yourAge" placeholder="18+" min="18" max="99" required="required"/>
		   </p>
		   <p>
			<label for="yourPers">Personality Type:</label>
			<input type = "text" name="yourPers" id="yourPers" required="required" placeholder="eg. ESFJ" pattern="[eiEI][snSn][tfTF][jpJP]" maxlength="4" size = "8"> 
			<a href="http://www.humanmetrics.com/cgi-win/jtypes2.asp">(Don't know your personality type?)</a>
           </p>
		   <p>
			<div>
				<label for="yourOS">Favorite OS:</label>
				<select name="yourOS">
					<option>Windows</option>
					<option>Mac OS X</option>
					<option>Linux</option>
				</select>
			</div>
		   </p>
	</fieldset>
	<fieldset>
        <legend>I Am Seeking</legend>
		   <p>
		    <div id="seeking">
				<label>Gender:</label>
				<input type="checkbox" name="male" required="required"/>Male
				<input type="checkbox" name="female" required="required"/>Female
		    </div>
		   </p> 
		   <p>
		        <label>Age:</label>
			    <input type="number" name="minAge" id="minAge" placeholder="18+" required="required" min="16" max="99" /> to 
			    <input type="number" name="maxAge" id="minAge" required="required" min="16" max="99"/>
           </p>
	</fieldset>
	<input class="submit" id="signUpSubmit" type="submit" value="Submit"/>
</form>
<?php
	include("bottom.html");
?>
