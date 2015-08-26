
<?php
	include("top.html");
	include('common.php');
?>
<header class="matches-submit">
<h1>Matches</h1>
</header>
<article>
<?php
	$email = $_POST["yourEmailLogin"];
	$pass = $_POST["yourPassLogin"];
	
	$accountFileName = "accounts.txt";
	$accountFile = file_get_contents($accountFileName);
	$singleFileName = "singlesTest.txt";
	$singlesFile = file_get_contents($singleFileName);
	$singlesFile = str_replace(',,,,,,,,','', $singlesFile);//takes out all empty lines
  

	$accounts = explode("\n",$accountFile); //every member of the array is an account 
	$singles = explode("\n",$singlesFile); //every member of the array is a different single

	//print_r ($accounts);
	//print_r ($singles);

	$hasAccount = false;
	$rightPass = false;
	$name; //for getting name out of the account file
	
	foreach($accounts as $line){//checks to make sure that the email entered has an account and that the password is right
		
		$info=explode(',',$line);
		
		if($info[0] == $email){
			$hasAccount=true;
			$name=$info[2]; //assigns a name if the email has an account so that the info for the account can be found
		}
		if($info[1] == $pass && $hasAccount){
			$rightPass = true;
		}
	}



	if($hasAccount && $rightPass){
		checkMatchAndPrint($name,$singles);
	}else if($hasAccount){
	  	echo '<p class = "wrong">Your password is incorrect.</p>';
	}else{
		echo '<p class= "wrong">You don\'t appear to have an account. Either re-enter your email and password or <a href="signup.php">sign up</a> for a new account.</p>';
	}


?>


	
</article>
<?php
	include("bottom.html");
?>