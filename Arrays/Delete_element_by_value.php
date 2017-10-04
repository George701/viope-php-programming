<?php

    $array = array(3,5,7,6,4,8);

    $array= array_diff($array, array('3','5'));
    foreach($array as $key => $value)
        {
            echo $key." has the value". $value;
        }
    echo "</br>";

    while(($key = array_search(6,$array)) !== false)
        {
            unset($array[$key]);
        }

    foreach($array as $key => $value)
        {
            echo $key." has the value". $value;
        }
    echo "</br>";

?>