<?php
	function checkEmailandPass(){
		$email = $_POST["yourEmailLogin"];
		$pass = $_POST["yourPassLogin"];
		$singleFileName = "singlesTest.txt";
		$accountFileName = "accounts.txt";
		$accountFile = file_get_contents($accountFileName);


		$accounts = explode("\n",$accountFile); //every member of the array is an account 

		$hasAccount = false;
		//$rightPass = false;
		$rightAccountInfo = 0; //0 is no account, 1 is right email wrong pass, 2 is right email and pass
		$name; //for getting name out of the account file

		foreach($accounts as $line){//checks to make sure that the email entered has an account and that the password is right
		
		$info=explode(',',$line);
		
			if($info[0] == $email){
				$rightAccountInfo = 1;
				$hasAccount = true;
				$name=$info[2]; //assigns a name if the email has an account so that the info for the account can be found
			}
			if($info[1] == $pass && $hasAccount){
				$rightAccountInfo = 2;
			}
		}
		return $rightAccountInfo;
	}

	function findMatches(){
		
	}
?>