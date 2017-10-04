<?php
    $value = $_GET['value'];
    $results = "results.txt";
    $index=count($vote_results);
    //Array
    $vote_results = array
    (
        1=>0,
        2=>0,
        3=>0,
        4=>0,
        5=>0
    );

    $vote_results[$value]++;

    $fp=@fopen($results, 'w');
    $i=1;
    while($vote_results[i]<$index)
    {
        fwrite($fp,$i."|".$vote_results[$i].PHP_EOL);
        $i++;
    }
    fclose($fp);
?>