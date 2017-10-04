<?php

    //Nested loops (loop inside loop)
    $rows=4;
    $columns=12;
    $theChar="x";
    for ($k=0;$k<$rows; $k++)
    {
        for($m=0; $m<$columns;$m++){
            echo $theChar;
        }
        echo"</br>";
    }
    echo "Number of rows: ".$rows."</br>";
    echo "Number of columns: ".$columns."</br>";
?>