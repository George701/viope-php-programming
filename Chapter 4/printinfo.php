<?php
	$gender=$_GET["gender"];
	$age=$_GET["age"];

    if($gender=="male") {
            if ($age == 1) {echo "You're a man in his prime!";}
            else {echo "You are wise man!";}
        }

    else{
            if($age == 1){echo "You are a damsel at her most beautiful!";}
            else {echo "You look young for your age!";}
        }
?>

