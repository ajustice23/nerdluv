<?php
	include("top.html");

	$email = $_POST["yourEmail"];
	$pass = $_POST["yourPass1"];
	$name = $_POST["yourName"];
	$gender = $_POST["yourGender"];
	$seekMale = $_POST["male"];
	$seekFemale = $_POST["female"];
	$age = $_POST["yourAge"];
	$pers = $_POST["yourPers"];
	$OS = $_POST["yourOS"];
	$seekAgeMin = $_POST["minAge"];
	$seekAgeMax = $_POST["maxAge"];
	$seeking;//final seeking string stored, M,F, MF

	If($seekMale && $seekFemale){
		$seeking = "MF";
	}else if($seekFemale){
		$seeking = "F";
	}else{
		$seeking = "M";
	}

	file_put_contents("singlesTest.txt", "$name,$gender,$seeking,$age,$pers,$OS,$seekAgeMin,$seekAgeMax\n",FILE_APPEND);
	file_put_contents("accounts.txt", "$email,$pass,$name\n",FILE_APPEND);
?>
<header>
	<h1>Thank you!</h1>
</header>

<article>
	<p>Welcome to NerdLuv, <?=$name; ?>!</p>
	<p>Now <a href="matches.php"> log in </a>to see your matches!</p>
</article>

<?php
	include("bottom.html");
?>