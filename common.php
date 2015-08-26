<?php
       function	checkMatchAndPrint($name,$singles){
		foreach($singles as $line){
		$info=explode(',',$line);

		if($name == $info[0] ){
			$gender = $info[1];
			$seeking=$info[2];
			$age = $info[3];
			$personality = strtoupper($info[4]);
			$OS = $info[5];
			$minAge = $info[6];
			$maxAge = $info[7];
			break;
		}
	}
	

	foreach($singles as $line){

		$match = false;
		$yourSelf = false; // makes sure you don't match with yourself;
		$rightGender= false;
		$rightGender2 = false; // match is seeking the gender of the account holder
		$rightAge=false;
		$rightAge2 = false; //account holder in the age range that the match is seeking
		$rightPersonality = false;
		$rightOS = false;

		$info=explode(',',$line);

		if($info[0]==$name){
			$yourSelf = true;
		}else{
			$yourSelf = false;
		}

		//gender decisions
		if($seeking == "MF"){//checks to see if the right gender
			$rightGender = true;
		}else if($seeking == $info[1]){
			$rightGender = true;
		}else{
			$rightGender=false;
		}

		if($info[2] == "MF"){
			$rightGender2 = true;
		}else if($info[2] == $gender){
			$rightGender2=true;
		}else{
			$rightGender2 = false;
		}

		if($minAge<=$info[3] && $info[3]<=$maxAge){//checks for right age
			$rightAge=true;
		}else{
			$rightAge=false;
		}

		//checks for at least on matching letter of their personality
		$matchPers = strtoupper($info[4]);
		$firstS = substr($matchPers, 0,1); // first letter of personality for the singles
		$secondS = substr($matchPers[4],1,1); // second letter
		$thirdS = substr($matchPers,2,1); //third letter
		$fourthS = substr($matchPers,3,1); //fourth letter

		$firstA = substr($personality, 0,1); // first letter of personality for the account holder
		$secondA = substr($personality,1,1); // second letter
		$thirdA = substr($personality,2,1); //third letter
		$fourthA = substr($personality,3,1); //fourth letter
		
		if($firstA == $firstS || $secondA == $secondS || $thirdA == $thirdS || $fourthA == $fourthS){
			$rightPersonality = true;
		}else{
			$rightPersonality = false;
		}

		if($OS == $info[5]){   //checks for same OS
			$rightOS = true;
		}else{
			$rightOS=false;
		}

		if($age>=$info[6] && $age<=$info[7]){
			$rightAge2=true;
		}else{
			$rightAge2=false;
		}

		if($rightGender && $rightAge && $rightOS && $rightPersonality && !$yourSelf &&  $rightGender2 && $rightAge2){
			$match = true;
		}else{
			$match = false;
		}

		if($match){
			//print_r($line);
			
			echo '<div class="matches-submit">';
			echo '<img src="",alt="match picture", width=100,height=100/>';
			echo '<div id = "matchinfo">';
			echo '<h3>';
			echo $info[0];
			echo "</h3>\n";
			echo "<ul>\n";
			echo '<li>Gender: ';

			if($info[1] == "M"){
				echo "Male";
			}else{
				echo "Female";
			}

			echo "</li>\n";
			echo "<li>Age: ";
			echo $info[3];
			echo "</li>\n";
			echo "<li>Personality Type: ";
			echo $info[4];
			echo "</li>\n";
			echo "<li>Favorite OS: ";
			echo $info[5];
			echo "</li>\n";
			echo "</ul>\n";
			echo "</div>\n";
			echo "</div>\n";
		}
	}
}
	
?>
