<?php

    /*
      for (expr1;expr2;expr3) statement
        *) expr1 is executed once at the beginning of a loop.
        *) expr2 is executed in the beginning of each iteration, If it evaluates to TRUE, loop continues and neasted statement(s) are executed. Once result is FALSE loop ends.
        *) expr3 is executed at the end of each iteration.
    */
    //For-loop example
    $sum=0;
    for ($i=1; $i<=10; $i++){
        $sum=$sum+$i;
    }
    echo "<h2>For-loop example</h2></br> Sum = $sum";

    /*
     While (expr){
        statement;
    }
        *) While loop executes as long as expr is TRUE.
     */
    //While-loop example
    echo "<h2>While-loop example</h2></br>";
    $a=1;
    while($a<=5)
    {
        echo "The number is ".$a."</br>";
        $a++;
    }

    /*
        do{
            ...
           }
        While(expr)
        *) While loop executes as long as expr is TRUE.
    */
    //Do-while-loop example
    echo "<h2>Do-while-loop example</h2></br>";
    $j=$a-1;
    do{
        $j++;
        echo "The number is ".$j."</br>";
    }
    while($j<=9);
?>