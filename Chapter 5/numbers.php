<?php
$input_number=$_GET["number"];

if($input_number >= 0) {
    while ($input_number >= 0) {
        if($input_number == 0){
            echo $input_number;
            break;
        }
        echo $input_number . " ";
        $input_number--;
    }
}else{
    echo "The number should be at least zero!";
}
?>