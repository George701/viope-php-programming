<?php
	$file_grades = "grades.txt";
	$file_results = "results.txt";
	$grades = array();

	// Reading grades.txt to an array
	$fo = @fopen($file_grades,'r') or die("Can't open file");
	while(!feof($fo)){
		$string = (int)fgets($fo);
		if(is_int($string)){
			array_push($grades,$string);
		}
	}
	fclose($fo);
	
	// Incrementing values stored in array in range from 0 to 4
	foreach($grades as $id => $value){
		if($value >= 0 && $value < 5){
			$grades[$id]++;
		}
		
	}

	// Writing an array to results.txt
	$fo = @fopen($file_results,'w') or die("Can't open file");
	if(is_resource($fo)){
		foreach($grades as $value){
			fwrite($fo, $value."\n");
		}
		fclose($fo);
	}else{
		echo "Problems";
	}
	
	// Read results.txt to output the content
	$fo = @fopen($file_results,'r') or die("Can't open file");
	echo "New grades:\n";
	while(!feof($fo)){
		echo fgets($fo);
	}
	fclose($fo);
?>