<?php
    //Foreach gives a simple way to iterate over arrays. It works ONLY with arrays!
    /*
     * foreach(array expression as $value) statement
     *  foreach(array expression as $key => $value) statement
        * key will be assigned to the variable $key on each loop.
    */
    echo "<h2>Foreach-statement</h2></br>";
    echo "Square roots of numbers ";
    $myArray = array(2,4,6,8);
    foreach($myArray as $key){
        echo "$key ";
    }
    echo "</br>";
    foreach($myArray as $value){
        $value=$value*2;
        echo $value;
        echo ", ";
    }
?>